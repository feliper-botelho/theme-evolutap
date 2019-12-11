const mix = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');

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

// mix.babel([
//     'resources/js/images.js',
//     'resources/js/trajetoria.js',
//     'resources/js/scroller.js',
//     'resources/js/menu-subpages.js',
//     'resources/js/codigo-etica.js',
// ], 'public/js/all.js');
mix.js('resources/js/main.js', 'public/js')
mix.sass('resources/scss/main.scss', 'public/css')
    .sourceMaps(true, 'source-map')
    .copyDirectory('resources/fonts', 'public/fonts');
mix.webpackConfig({
    plugins: [
        new CopyWebpackPlugin([{
            from: 'resources/images',
            to: 'images', // Laravel mix will place this in 'public/img'
        }]),
        new ImageminPlugin({
            test: /\.(jpe?g|png|gif|svg)$/i,
            plugins: [
                imageminMozjpeg({
                    quality: 80,
                })
            ]
        })
    ]
});
mix.setPublicPath('public');
mix.setResourceRoot('..');