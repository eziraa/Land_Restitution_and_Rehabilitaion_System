const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css');
mix.js('resources/js/bootstrap.js', 'public/js');