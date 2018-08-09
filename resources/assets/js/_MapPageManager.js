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

    function loadMarkers() {
        FormManager.sendGet('/map-markers', {}, function (response) {
            if (response.status === 'success') {
                data = response.data;
                showData();
            }
        });
    }

    function showData() {

        paths = L.layerGroup();
        users = L.layerGroup();
        packages = L.layerGroup();

        data.users.forEach(function (item, index) {
            var coordinates = item.split(',');
            L.marker(coordinates, {icon: userIcons[index % userIcons.length]}).addTo(users);
        });
        data.packages.forEach(function (item) {
            var coordinates = item.split(',');
            L.marker(coordinates, {icon: packageIcon}).addTo(packages);
        });
        data.paths.forEach(function (path) {
            var coordinates = [];
            path.forEach(function (pos) {
                coordinates.push(pos.split(','));
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
        });

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
            iconAnchor: [22, 34],
            popupAnchor: [-3, -76],
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
            iconAnchor: [30, 24],
            popupAnchor: [-3, -76],
            shadowUrl: '/plugins/leaflet/images/marker-shadow.png',
            shadowSize: [38, 35],
            shadowAnchor: [22, 30]
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