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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.styles('resources/css/common.css', 'public/css/common.css')
    .styles('resources/css/footer.css', 'public/css/footer.css')
    .styles('resources/css/header.css', 'public/css/header.css')
    .styles('resources/css/main.css', 'public/css/main.css')
    .styles('resources/css/media.css', 'public/css/media.css')
    .styles('resources/css/side.css', 'public/css/side.css');

mix.js('resources/js/AddReview.js', 'public/js')
