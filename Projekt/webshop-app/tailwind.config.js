import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'custom-bg': "url('/img/background.jpg')",
            },
            colors: {
                'custom-dark': '#2A2A38',
            },
            boxShadow: {
                'all-sides': '0 4px 6px rgba(0, 0, 0, 0.15), 0 -4px 6px rgba(0, 0, 0, 0.15), 4px 0 6px rgba(0, 0, 0, 0.15), -4px 0 6px rgba(0, 0, 0, 0.15)',
            },
        },
    },

    plugins: [forms],
};
