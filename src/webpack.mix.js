const mix = require('laravel-mix');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

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

mix.react('resources/react-app/js/app.js', 'public/js/react')
    .sass('resources/react-app/sass/app.scss', 'public/css/react')
    .purgeCss()
    .tailwind('tailwind.config.js')
    .webpackConfig({
        externals: [
            'child_process'
        ],
        node: {
            fs: 'empty'
        }
    }).sourceMaps().version();
