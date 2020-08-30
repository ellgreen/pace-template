let mix = require('laravel-mix')
require('laravel-mix-pace')

mix.setPublicPath('public/')
    .disableSuccessNotifications()

mix.js('resources/js/app.js', '')
    .postCss('resources/css/app.css', '', [
        require('tailwindcss')
    ])
    .pace()
