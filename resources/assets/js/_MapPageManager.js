var MapPageManager = (function () {

    var map, packageIcon, userIcons = [];
    var RevealManager = require('./_RevealManager');
    var FormManager = require('./_FormManager');
    var data;
    var filters = [
        'users', 'paths', 'packages'
    ];
    var users, paths, packages;

    function init() {
        RevealManager.init();
        initMap();
    }

    function groupBy(xs, key) {
        return xs.reduce(function (rv, x) {
            (rv[x[key]] = rv[x[key]] || []).push(x);
            return rv;
        }, {});
    }

    function sortBy(array, key) {
        return array.sort(function (a, b) {
            var x = a[key];
            var y = b[key];
            return ((x < y) ? -1 : ((x > y) ? 1 : 0));
        });
    }

    function loadMarkers() {
        FormManager.sendGet('/map-markers', {}, function (response) {
            if (response.status === 'success') {
                data = response.data.events;
                showData();
            }
        });
    }

    function showData() {

        paths = L.layerGroup();
        users = L.layerGroup();
        packages = L.layerGroup();

        var id, item, events, coordinates, index = 0, lastEvent;
        var userEvents = groupBy(data.user_events, 'user_pubkey');

        for (id in userEvents) {
            if (userEvents.hasOwnProperty(id)) {
                item = userEvents[id];
                events = sortBy(item, 'timestamp');

                //DISPLAY ONLY LAST EVENT
                lastEvent = events.slice(-1)[0];
                coordinates = lastEvent.location.split(',');
                L.marker(coordinates, {icon: userIcons[++index % userIcons.length]}).addTo(users);

            }
        }

        var packagesEvents = groupBy(data.packages_events, 'escrow_pubkey');

        for (id in packagesEvents) {
            if (packagesEvents.hasOwnProperty(id)) {
                item = packagesEvents[id];
                events = sortBy(item, 'timestamp');

                coordinates = [];
                events.forEach(function (pos) {
                    coordinates.push(pos.location.split(','));
                });

                antPolyline = L.polyline.antPath(coordinates, {
                    "delay": 1200,
                    "dashArray": [10, 20],
                    "weight": 5,
                    "color": "#2ac4ff",
                    "pulseColor": "#FFFFFF",
                    "paused": false,
                    "reverse": false
                });
                antPolyline.addTo(paths);

                //DISPLAY ONLY LAST PACKAGE POSITION
                lastEvent = events.slice(-1)[0];
                coordinates = lastEvent.location.split(',');
                L.marker(coordinates, {icon: packageIcon}).addTo(packages);
            }
        }

        paths.addTo(map);
        users.addTo(map);
        packages.addTo(map);

    }

    function initButtons() {
        $('.filter-btn').click(function () {
            var filter = $(this).attr('data-filter');
            var layer = getLayer(filter);
            var index = filters.indexOf(filter);
            $(this).toggleClass('selected');
            if (index >= 0) {
                filters.splice(index, 1);
                if (map.hasLayer(layer)) {
                    map.removeLayer(layer);
                }
            } else {
                filters.push(filter);
                if (!map.hasLayer(layer)) {
                    map.addLayer(layer);
                }
            }
        });
    }

    function getLayer(filter) {
        switch (filter) {
            case  'users': {
                return users
            }
            case  'packages': {
                return packages
            }
            case  'paths': {
                return paths
            }
        }
    }

    function loadUserIcon(id) {
        userIcons.push(L.icon({
            iconUrl: '/images/map/user_' + id + '.png',
            iconSize: [39, 54],
            shadowUrl: '/plugins/leaflet/images/marker-shadow.png',
            shadowSize: [38, 35],
            shadowAnchor: [22, 30]
        }));
    }

    function initMap() {
        var token = 'pk.eyJ1Ijoia29ucmFkLWNyYWNzb2Z0IiwiYSI6ImNqa2w2MDA5aTFybnMzcG9nMXdhNTlmOWsifQ.zA5TCRI7TFVWWJyJpnQxYg';
        map = L.map('mapId').setView([51.505, -0.09], 8);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + token, {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 19,
            id: 'mapbox.streets',
            accessToken: 'your.mapbox.access.token'
        }).addTo(map);

        packageIcon = L.icon({
            iconUrl: '/images/map/marker_package.png',
            iconSize: [40, 55],
            iconAnchor: [20, 55],
            // popupAnchor: [-3, -76],
            shadowUrl: '/plugins/leaflet/images/marker-shadow.png',
            shadowSize: [38, 35],
            shadowAnchor: [14, 35]
        });

        loadUserIcon(1);
        loadUserIcon(2);
        loadUserIcon(3);

        initButtons();
        loadMarkers();
    }

    return {
        init: init
    }
})();

module.exports = MapPageManager;