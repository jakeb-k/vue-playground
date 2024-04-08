import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                bebas: ['Bebas Neue', ...defaultTheme.fontFamily.sans],
                sans: ['Figtree',...defaultTheme.fontFamily.sans],
            },
            colors: {
                'neon': '#00BBF9',
                'night' : 'rgb(40, 40, 40)', 
            },
            boxShadow: {
                'post-inset': 'inset 250px 0 0 0 #00BBF9',
                'pre-inset' : 'inset 0 0 0 0 #00BBF9',
            },
        },
    },

    plugins: [forms],
};
