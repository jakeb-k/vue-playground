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
                'ocean' : '#0061c2',
                'smoke' : ' #E5E7EB', 
            },
            boxShadow: {
                'post-inset': 'inset 250px 0 0 0 #00BBF9',
                'pre-inset' : 'inset 0 0 0 0 #00BBF9',
                'footer-pre': 'inset 250px 0 0 0 rgb(40,40,40)',
                'footer-post' : 'inset 0 0 0 0 rgb(40,40,40)',
                'cta-pre' : '12px 12px 0 #0061c2',
                'cta-post' : '-12px -12px 0 #E5E7EB',
                'pb-pre' : '18px 18px 0 #0061c2',
                'pb-post' : '-18px -18px 0 #E5E7EB',
                'nav' : '0 0 30px #00BBF9',
                'about':'0 0 10px #00BBF9',
                'contact': '30px 30px 0 #018cbe',
                'tech': '0 0 10px #0061c2;'
            },
            backgroundImage: {
                'custom-gradient': 'linear-gradient(rgb(83, 200, 244) 3.8%, rgb(36, 45, 123) 91.1%)',
            }
        },
    },

    plugins: [forms],
};
