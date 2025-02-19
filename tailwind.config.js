/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

import colors from 'tailwindcss/colors'

export default {
    content: ['./resources/**/*.blade.php', './vendor/filament/**/*.blade.php'],
    theme: {
        screens: {
            'xs': '320px',
            ...defaultTheme.screens,
        },
        extend: {
            container: {
                center: true,
                padding: "1rem",
            },
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
            },
            fontFamily: {
                'sans': ['Helvetica', 'Arial', 'sans-serif'],
                'serif': ['Helvetica', 'Arial', 'sans-serif'],
                'mono': ['Helvetica', 'Arial', 'sans-serif'],
            }

        },
    },

}
