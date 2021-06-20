const mix = require('laravel-mix');

mix.postCss('./assets/src/css/tailwind.css', 'assets/build/css', [
    require('tailwindcss'),
  ]);
