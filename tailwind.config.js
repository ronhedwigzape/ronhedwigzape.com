import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const FormKitVariants = require('@formkit/themes/tailwindcss')

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'media',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/js/**/*.vue',
        './tailwind-theme.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        container: {
            center: true,
            padding: '1rem',
            screens: {
                sm: '100%',
                md: '100%',
                lg: '700px',
                xl: '800px',
                '2xl': '900px',
            },
        },
    },

    plugins: [forms, FormKitVariants],
};
