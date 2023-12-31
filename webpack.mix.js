const mix = require('laravel-mix');

// Compile JavaScript
mix.js('resources/js/app.js', 'public/js');

// Compile CSS with Tailwind
mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);
