const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.js('resources/assets/js/app.js', 'public/assets/js').vue()
    .js('resources/assets/js/main.js', 'public/assets/js')
    .copy('resources/assets/js/plugins.min.js', 'public/assets/js')
    .copy('resources/assets/js/vendor.min.js', 'public/assets/js')

    // css
    .css('resources/assets/css/vendor/vendor.min.css', 'public/assets/css/vendor')
    .css('resources/assets/css/plugins/plugins.min.css', 'public/assets/css/plugins')
    .sass('resources/assets/scss/style.scss', 'public/assets/css')


    .copy('resources/assets/images', 'public/assets/images')

