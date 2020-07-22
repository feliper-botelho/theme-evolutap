const mix = require("laravel-mix");
const CopyWebpackPlugin = require("copy-webpack-plugin");
const ImageminWebpWebpackPlugin = require("imagemin-webp-webpack-plugin");

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

mix.js("resources/js/main.js", "public/js");
mix
  .sass("resources/scss/main.scss", "public/css")
  .sourceMaps(true, "source-map")
  .copyDirectory("resources/fonts", "public/fonts");
mix.webpackConfig({
  plugins: [
    new CopyWebpackPlugin([
      {
        from: "resources/images",
        to: "../resources/images", // Laravel mix will place this in 'public/img'
      },
    ]),
    new ImageminWebpWebpackPlugin(),
  ],
});
mix.webpackConfig({
  plugins: [
    new CopyWebpackPlugin([
      {
        from: "resources/images",
        to: "images", // Laravel mix will place this in 'public/img'
      },
    ]),
  ],
});

mix.setPublicPath("public");
mix.setResourceRoot("..");
