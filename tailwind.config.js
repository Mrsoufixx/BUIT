/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
// const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/rappasoft/laravel-livewire-tables/resources/views/tailwind/**/*.blade.php',

    ],
    darkMode: true,
    theme: {


        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'montserrat': ['Montserrat'],
                'lato': ['Lato'],
                'garamond': ['Garamond'],
                'railway' : ['Railway'],
                'raleway' : ['Raleway']
            },
            colors: {
                'buit1': '#312783',
                'buit2': '#f9b233',
            },

        },
    },
    variants: {},

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
