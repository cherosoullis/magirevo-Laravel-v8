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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
]);

  mix.styles([
  'node_modules/bootstrap-slider/dist/css/bootstrap-slider.css',

  //'node_modules/select2/dist/css/select2.min.css'
],  'public/css/bootstrap-slider.css');

mix.styles([
'resources/css/foodstaff.css'
],  'public/css/foodstaff.css');


mix.sass('resources/sass/application.scss', 'public/css');

    mix.scripts([
         // 'resources/js/slider.js',
         'resources/js/select.js'
      ],  'public/js/compine.js');

      mix.scripts([
              'node_modules/slugify/slugify.js',
          ],  'public/js/slug.js');
