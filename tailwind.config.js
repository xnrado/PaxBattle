import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import colors from "tailwindcss/colors.js";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/wireui/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],
    safelist: [
        {
            pattern: /bg-(primary|secondary|positive|negative|warning|info)-(300|400|500|600|700)/,
            variants: ['lg', 'hover', 'focus', 'dark:focus', 'lg:hover'],
        },
    ],

    theme: {
        extend: {
            colors: {
                primary: { // nord-8
                    '50':  '#BBD8DF',
                    '100': '#B1D3DC',
                    '200': '#A7CFDA',
                    '300': '#9CCBD7',
                    '400': '#95C8D6',
                    '500': '#88C0D0',
                    '600': '#7CB7C8',
                    '700': '#6EACBD',
                    '800': '#60A2B4',
                    '900': '#5499AC',
                    '950': '#4A91A5',
                },
                secondary: { // nord-9
                    '50':  '#B4C5D6',
                    '100': '#A7BBD0',
                    '200': '#9AB2CA',
                    '300': '#90ABC6',
                    '400': '#88A6C4',
                    '500': '#81A1C1',
                    '600': '#779ABE',
                    '700': '#6B91B7',
                    '800': '#5E87AF',
                    '900': '#517BA6',
                    '950': '#46729D',
                },
                positive: { // nord-14
                    '50':  '#D5DDCE',
                    '100': '#CBD7C1',
                    '200': '#C2D2B4',
                    '300': '#B9CDA8',
                    '400': '#AFC69A',
                    '500': '#A3BE8C',
                    '600': '#96B47C',
                    '700': '#8CAD6E',
                    '800': '#82A763',
                    '900': '#7AA158',
                    '950': '#729B4F',
                },
                negative: { // nord-11
                    '50':  '#DDA3A8',
                    '100': '#D7949A',
                    '200': '#D2878E',
                    '300': '#CD7981',
                    '400': '#C66C75',
                    '500': '#BF616A',
                    '600': '#B45760',
                    '700': '#AD4F58',
                    '800': '#A74650',
                    '900': '#A13F49',
                    '950': '#9B3842',
                },
                warning: { // nord-12
                    '50':  '#EDBDAE',
                    '100': '#E5AF9F',
                    '200': '#E0A593',
                    '300': '#DA9B87',
                    '400': '#D6927D',
                    '500': '#D08770',
                    '600': '#CB7E66',
                    '700': '#C1745C',
                    '800': '#B86951',
                    '900': '#AF6048',
                    '950': '#A95941',
                },
                info: { // nord-7
                    '50':  '#C3E3E3',
                    '100': '#B9DDDD',
                    '200': '#AFD5D5',
                    '300': '#A3CCCB',
                    '400': '#9AC3C2',
                    '500': '#8FBCBB',
                    '600': '#83B4B3',
                    '700': '#7AAEAD',
                    '800': '#71A8A7',
                    '900': '#69A2A1',
                    '950': '#639D9C',
                },
                'nord-comment': '#abb9cf',
                'nord-dark': '#242933',
                'nord-0': '#2e3440',
                'nord-1': '#3b4252',
                'nord-2': '#434c5e',
                'nord-3': '#4c566a',
                'nord-4': '#d8dee9',
                'nord-5': '#e5e9f0',
                'nord-6': '#eceff4',
                'nord-7': '#8fbcbb', // info
                'nord-8': '#88c0d0', // primary
                'nord-9': '#81a1c1', // secondary
                'nord-10': '#5e81ac',
                'nord-11': '#bf616a', // negative
                'nord-12': '#d08770', // warning
                'nord-13': '#ebcb8b',
                'nord-14': '#a3be8c', // success
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
