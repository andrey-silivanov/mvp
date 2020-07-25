const mix = require('laravel-mix');

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

mix
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/media_query.scss', 'public/css')
    .sass('resources/sass/owl.carousel.scss', 'public/css')
    .sass('resources/sass/owl.theme.default.scss', 'public/css')
    .sass('resources/sass/animate.scss', 'public/css')
    .sass('resources/sass/select2.scss', 'public/css')

    .js('resources/js/app.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .js('resources/js/location.js', 'public/js')
    .js('resources/js/jquery.stellar.min.js', 'public/js')
    .js('resources/js/jquery.waypoints.min.js', 'public/js')
    .js('resources/js/modernizr-3.5.0.min.js', 'public/js')
    .js('resources/js/owl.carousel.min.js', 'public/js')


    .copy( 'resources/images/', 'public/images/' );
