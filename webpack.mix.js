let mix = require('laravel-mix');

var LiveReloadPlugin = require('webpack-livereload-plugin');

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

//mix.copy('resources/assets/vendor/bootstrap/fonts', 'public/fonts');
//mix.copy('resources/assets/vendor/font-awesome/fonts', 'public/fonts');
mix.styles([
            //VEGAS CSS 
            'resources/assets/vendor/style.css',
            'resources/assets/vendor/vegas/vegas.min.css',
            'resources/assets/vendor/bootstrap/css/bootstrap.css',
            //'resources/assets/vendor/font-awesome/css/font-awesome.css',                                
            //'resources/assets/vendor/ladda/ladda-themeless.min.css',
            //'resources/assets/vendor/slick/slick.css',
            //'resources/assets/vendor/slick/slick-theme.css',
        ], 'public/css/app.css', './');
mix.js('resources/assets/js/app.js', 'public/js')
        .sass('resources/assets/sass/app.scss', 'public/css')
        .scripts([
            'resources/assets/vendor/jquery/jquery-3.1.1.min.js',
            'resources/assets/vendor/vegas/vegas.js',
        ],
            'public/js/app.js')
        .webpackConfig({
            plugins: [
                new LiveReloadPlugin()
            ]
        });
