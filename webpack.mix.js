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
    .js('resources/js/char_generator/characteristics.js', 'public/js/char_generator')
    .js('resources/js/char_generator/female-names.js', 'public/js/char_generator')
    .js('resources/js/char_generator/char_generator.js', 'public/js/char_generator')
    .js('resources/js/char_generator/male-names.js', 'public/js/char_generator')
    .js('resources/js/char_generator/skills.js', 'public/js/char_generator')
    .sass('resources/sass/app.scss', 'public/css');
