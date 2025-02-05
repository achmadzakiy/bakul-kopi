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
                poppins: ['Poppins', 'sans-serif']
            },
            backgroundImage:{
                'custom-gradient': 'linear-gradient(0deg, rgba(1, 1, 3, 1) 10%, rgba(255, 255, 255, 0) 50%)'
            },
            colors:{
                'primary': 'var(--primary)',
                'backg': 'var(--backg)'
            }
        },
    },
    plugins: [
        
    ],
};
