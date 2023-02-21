/** @type {import('tailwindcss').Config} */
module.exports = {
    content: require('fast-glob').sync([
        './wp-content/themes/jupiter-child/**/*.php'
    ]),

    theme: {
        fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
            relaway: ['Raleway', 'Arial', 'sans-serif'],
            roboto: ['Roboto'],
            'open-sans': ['Open Sans', 'sans-serif']
        },
        extend: {},
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1240px',
            'xxl': '2000px'
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
        require('tailwindcss-3d')
    ],
    corePlugins: {
        preflight: false,
    }
}
