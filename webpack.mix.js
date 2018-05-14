let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/fonts/fonts.scss', 'public/fonts')
    .browserSync({
        proxy: 'localhost:8000',
        notify: false,
        open: false,
        files: [
            '!node_modules', '!vendor', 'public/{*,**/*}', '{*,**/*}.php']
    })
    .version();
