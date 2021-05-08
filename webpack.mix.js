let mix = require('laravel-mix')
require('laravel-mix-pace')

let buildPath = mix.inProduction() ? 'build_prod' : 'build'

mix.setPublicPath(buildPath)
    .disableNotifications()

mix.js('resources/js/app.js', '')
    .postCss('resources/css/app.css', '', [
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .copyDirectory('resources/assets', buildPath)
    .browserSync({
        server: buildPath,
    })
    .pace({
        buildPath,
    })

if (mix.inProduction()) {
    mix.version()
}
