import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            colors: {
                'nord-comment': '#abb9cf',
                'nord-dark': '#242933',
                'nord-0': '#2e3440',
                'nord-1': '#3b4252',
                'nord-2': '#434c5e',
                'nord-3': '#4c566a',
                'nord-4': '#d8dee9',
                'nord-5': '#e5e9f0',
                'nord-6': '#eceff4',
                'nord-7': '#8fbcbb',
                'nord-8': '#88c0d0',
                'nord-9': '#81a1c1',
                'nord-10': '#5e81ac',
                'nord-11': '#bf616a',
                'nord-12': '#d08770',
                'nord-13': '#ebcb8b',
                'nord-14': '#a3be8c',
                'nord-15': '#b48ead',
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
        require('flowbite/plugin'),
    ],
};
