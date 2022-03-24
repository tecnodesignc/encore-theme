const mix = require('laravel-mix');
const WebpackShellPlugin = require('webpack-shell-plugin');
const themeInfo = require('./theme.json');
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
mix.options({
    processCssUrls: false
});
mix.copy('resources/fonts', 'assets/fonts');
mix.copy('resources/css', 'assets/css');
mix.copy('resources/images', 'assets/images');
mix.copy('resources/js', 'assets/js');
mix.copy('resources/favicon.ico', 'assets/favicon.ico');


mix.sass('resources/scss/style.scss', 'assets/css');

mix.copy('assets','../../../public_html/themes/'+ themeInfo.name);
