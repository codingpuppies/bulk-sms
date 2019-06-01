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
    'public/css/loader.css',
], 'public/css/theme.css');

/* SCSS to CSS Theme css files */
mix.sass('resources/assets/theme/adminator/src/assets/styles/index.scss', 'public/css/theme');
mix.copyDirectory('resources/assets/theme/adminator/src/assets/scripts/', 'public/js/theme');


mix.js('resources/assets/theme/adminator/src/assets/scripts/index.js', 'public/js/bundle.js');

// mix.js('public/js/theme/index.js','public/js/theme/import');
// mix.combine(['public/js/theme/'], 'public/js/bundle.js');

/*Theme JS*/
mix.scripts([
    'public/js/loader.js',
], 'public/js/theme.js');