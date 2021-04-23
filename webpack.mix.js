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

mix.js('resources/js/app.js', 'public/js')
.js('resources/js/header.js', 'public/js')
    .js('resources/js/fontAwesomeIcon.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/login-register.css', 'public/css')
    .postCss('resources/css/home.css', 'public/css')
    .postCss('resources/css/about.css', 'public/css')
    .postCss('resources/css/disclaimer.css', 'public/css')
    .postCss('resources/css/contact.css', 'public/css')
    .postCss('resources/css/dashboard.css', 'public/css');

