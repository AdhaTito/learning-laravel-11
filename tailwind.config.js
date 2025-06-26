/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                mainColor: "#",
                secondaryColor: "#",
                ascentColor: "#",
            },
            fontFamily: {
                poppins: ["poppins"],
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
