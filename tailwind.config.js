/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            JosefinSans: ["Josefin Sans", "sans-serif"],
            Rosario: ["Rosario", "sans-serif"],
            RobotoSlab: ["Roboto Slab", "sans-serif"],
        },
        extend: {},
    },
    plugins: [],
};
