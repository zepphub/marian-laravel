require('./bootstrap');
let mix = require('laravel-mix');
mix.copy('node_modules/tinymce/tinymce.min.js', 'public/js/tinymce.min.js');
