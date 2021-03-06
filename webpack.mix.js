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

mix.scripts(['node_modules/bootstrap/dist/js/bootstrap.js',
            'node_modules/jquery/dist/jquery.js',
            'node_modules/popper.js/dist/popper.js',  

        ], 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css/app.css');
