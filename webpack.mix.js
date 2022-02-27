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
    .js('resources/js/exercise.js','public/js')
    .js('resources/js/chartResult.js','public/js')
    .js('resources/js/chkButtonActive.js','public/js')
    .js('resources/js/indexActiveButton.js','public/js')
    .js('resources/js/selectExam.js','public/js')
    .js('resources/js/createForm.js','public/js')
    .sass('resources/sass/app.scss', 'public/css');
