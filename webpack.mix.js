const mix = require('laravel-mix');

mix.js('./assets/src/js/main.js', './assets/build/js');

mix.postCss('./assets/src/css/tailwind.css', 'assets/build/css', [
    require('tailwindcss'),
    require('postcss-nested')
  ]);
