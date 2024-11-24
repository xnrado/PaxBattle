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
            colors: {
                transpartent: 'transparent',
                current: 'currentColor',
                'nord-comment': '#abb9cf',
                'nord-dark': '#242933',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            gridTemplateColumns: {
                '16': 'repeat(16, minmax(0, 1fr))',
                '20': 'repeat(20, minmax(0, 1fr))',
            },
            gridColumn: {
                'span-13': 'span 13 / span 13',
                'span-14': 'span 14 / span 14',
                'span-15': 'span 15 / span 15',
                'span-16': 'span 16 / span 16',
                'span-17': 'span 17 / span 17',
                'span-18': 'span 18 / span 18',
                'span-19': 'span 19 / span 19',
                'span-20': 'span 20 / span 20',
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss-animated'),
        require('tailwind-nord'),
    ],
};
