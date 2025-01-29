import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                Abril: ['"Abril Fatface"', ...defaultTheme.fontFamily.sans], // Fixed Abril font
                Poppins: ['"Poppins"', ...defaultTheme.fontFamily.sans], // Fixed Abril font
                Inter: ['"Inter"', ...defaultTheme.fontFamily.sans], // Fixed Abril font
                Eczar: ['"Eczar"', ...defaultTheme.fontFamily.sans], // Fixed Abril font
                Anek: ['"Anek Tamil"', ...defaultTheme.fontFamily.sans], // Fixed Abril font
            },
        },
    },
    plugins: [],
};