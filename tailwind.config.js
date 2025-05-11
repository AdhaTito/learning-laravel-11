/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            backgroundImage: {
                "hero-pattern": "url('images/bg-jumbotron.jpg')",
                "hero-jumbotron": "url('images/jumbotron.jpg')",
            },
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
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};
