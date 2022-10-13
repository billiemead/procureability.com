const mix = require('laravel-mix')

// Определяем важные пути
const resources_path = './wp-content/themes/jupiter-child/'

// Куда копировать ресурсы из CSS
mix.setPublicPath(resources_path + 'dist')

// Автоподмена пути к ресурсам в cSS
mix.setResourceRoot(resources_path + 'dist')

mix.options({
    processCssUrls: false,
    legacyNodePolyfills: false,
    autoprefixer: {
        cascade: false,
        grid: 'autoplace',
    },
})

mix.disableSuccessNotifications()

mix.webpackConfig({
    externals: {
        jquery: 'jQuery',
        swiper: 'swiper',
        fancybox: 'fancybox'
    },
    module: {
        rules: [
            // Для маски - @import "blocks/**/*.scss"
            {
                test: /\.scss$/,
                loader: 'import-glob-loader',
            },
            // fix excluding
            /*{
                test: /\.jsx?$/,
                exclude: /(bower_components)/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: mix.config.babel(),
                    }
                ]
            }*/
        ],
    },
    watchOptions: {
        ignored: resources_path + 'dist/'
    }
})

// JS
mix
    .js(resources_path + 'assets/js/index.js', resources_path + 'dist')
    .js(resources_path + 'assets/js/page/digital-services.js', resources_path + 'dist')
    .js(resources_path + 'assets/js/page/about.js', resources_path + 'dist')
    .js(resources_path + 'assets/js/leaders.js', resources_path + 'dist')
    .js(resources_path + 'assets/js/page/front-page.js', resources_path + 'dist')
    .vue()
    // .autoload({
    //     jquery: ['$', 'window.jQuery', 'jQuery']
    // })

    // SASS
    .sass(resources_path + 'assets/sass/main.scss', resources_path + 'dist/main.css')
    // sass(resources_path + 'assets/sass/admin.scss', resources_path + 'dist/admin.css')
    //.sass(resources_path + 'sass/print.scss', 'dist')

    .postCss(resources_path + "assets/postcss/index.css", resources_path + 'dist/index.css', [
        require("postcss-import"),
        require('postcss-nested'),
        require("tailwindcss")
    ])

    // Generate sourceMaps
    .sourceMaps(false, 'source-map')
    .combine([
        resources_path + 'dist/main.css',
        resources_path + 'dist/index.css'
    ], resources_path + 'dist/style.css')

// Add hash version to file {{ mix('/css/app.css') }}
.copy(resources_path + 'assets/img', resources_path + 'dist/img').
copy(resources_path + 'assets/fonts', resources_path + 'dist/fonts')

if (mix.inProduction()) {
    mix.version()
}

mix.browserSync({
    open: false,
    proxy: process.env.MIX_BROWSERSYNC_PROXY_URL,
    files: [resources_path + "**/*.php", resources_path + "assets/sass/**/*.scss"]
});
