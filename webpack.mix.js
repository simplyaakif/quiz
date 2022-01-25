const mix = require('laravel-mix');
require('laravel-mix-purgecss');
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

const tailwindcss = require('tailwindcss')

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/main.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('tailwind.config.js')],
    }).purgeCss();

mix.disableSuccessNotifications();

mix.browserSync('http://127.0.0.1:8000/');
