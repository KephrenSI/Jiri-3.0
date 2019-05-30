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

mix
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copyDirectory('resources/assets/img', 'public/images')
    .sourceMaps()
    .webpackConfig({
        resolve: {
            extensions: [
                '.js',
                '.vue'
            ],
            alias: {
                '@': __dirname + '/resourses'
            }
        },
    })
    .browserSync({
        proxy: 'jiri.test'
    });

// Make Laravel Mix ignore .svgs
Mix
    .listen('configReady', function (config) {
        const rules = config.module.rules;
        const targetRegex = /(\.(png|jpe?g|gif)$|^((?!font).)*\.svg$)/;

        for (let rule of rules) {
            if (rule.test.toString() == targetRegex.toString()) {
                rule.exclude = /\.svg$/;
                break;
            }
        }
    });

// Hande .svgs with html-loader instead
mix
    .webpackConfig({
        resolve: {
            modules: [
                'node_modules',
                path.resolve(__dirname, 'resources/assets/Icons')
            ],
        },
        module: {
            rules: [{
                test: /\.svg$/,
                use: [{ loader: 'html-loader' }]
            }]
        }
    });