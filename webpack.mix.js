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
mix.js('resources/js/admin.js', 'public/js')
    .sass('resources/sass/admin.scss', 'public/css')
    .sourceMaps();
mix.sass('resources/sass/home.scss', 'public/css');
mix.copy('node_modules/trumbowyg/dist/ui/icons.svg', 'public/js/ui/icons.svg')
