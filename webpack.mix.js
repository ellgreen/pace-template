let mix = require('laravel-mix');

mix.disableSuccessNotifications();

mix.js('resources/js/app.js', 'public/')
    .postCss('resources/css/app.css', 'public/', [
        require('tailwindcss')
    ]);
