let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

/*theme css*/
mix.styles([
    'resources/assets/theme/adminator/style.css',
], 'public/css/theme.css');


mix.js('resources/assets/theme/adminator/bundle.js', 'public/js/theme/bundle.js');
mix.js('resources/assets/theme/adminator/vendor.js', 'public/js/theme/vendor.js');

/*Theme JS*/
mix.scripts([
    'public/js/loader.js',
], 'public/js/theme.js');