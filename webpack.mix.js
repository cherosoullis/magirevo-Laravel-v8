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
         'resources/js/select.js',
         'resources/js/contact.js',
         'resources/js/captcha.js'
      ],  'public/js/compine.js');

      mix.scripts([
              'node_modules/slugify/slugify.js',
          ],  'public/js/slug.js');

      //Select 2
      // @import '~select2/dist/css/select2.min.css';
      //Select2 Bootstrap theme
      // @import '~@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css';
      mix.styles([
        'resources/css/foodstaff.css',
        'resources/css/home.css',
        'resources/css/recipe.css',
        'resources/css/cookies.css',
        'resources/css/scroll.css',
        'resources/css/contact.css',
      ], 'public/css/all.css');

      mix.styles([
        'node_modules/select2/dist/css/select2.min.css',
        'node_modules/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css',
      ],  'public/css/select.css');
