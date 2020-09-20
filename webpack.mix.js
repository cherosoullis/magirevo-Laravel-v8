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

mix.sass('resources/sass/application.scss', 'public/css');

    mix.scripts([
         'resources/js/slider.js',
         'resources/js/select.js'
         // 'resources/js/trix.js'
         // 'resources/js/summernote.js',
      ],  'public/js/compine.js');

      mix.scripts([
              'node_modules/slugify/slugify.js',
          ],  'public/js/slug.js');
