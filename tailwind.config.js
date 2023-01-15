const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        screens: {
            sm: "576px",
            "sm-max": { max: "576px" },
            md: "768px",
            "md-max": { max: "768px" },
            lg: "992px",
            "lg-max": { max: "992px" },
            xl: "1200px",
            "xl-max": { max: "1200px" },
            "2xl": "1320px",
            "2xl-max": { max: "1320px" },
        },
        colors: {
            // Default Tailwind colors
            transparent: "transparent",
            current: "currentColor",
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            emerald: colors.emerald,
            indigo: colors.indigo,
            yellow: colors.yellow,
            // Primary
            "primary-hover": "#CB0827",
            "primary-main": "#E62140",
            "primary-border": "#F45971",
            "primary-focus": "#F88294",
            "primary-background": "#FFBDC7",
            // Secondary
            "secondary-hover": "#101525",
            "secondary-main": "#1C274A",
            "secondary-border": "#3C4972",
            "secondary-focus": "#757E9B",
            "secondary-background": "#B3B6C1",
            // Success
            "success-hover": "#219653",
            "success-main": "#27AE60",
            "success-border": "#6FCF97",
            "success-focus": "#AAEFC7",
            "success-background": "#E1FFEE",
            // Warning
            "warning-hover": "#F1B600",
            "warning-main": "#F2C94C",
            "warning-border": "#F5D77C",
            "warning-focus": "#F5D77C",
            "warning-background": "#FFF6DA",
            // Danger
            "danger-hover": "#E43333",
            "danger-main": "#EB5757",
            "danger-border": "#F57373",
            "danger-focus": "#FF9B9B",
            "danger-background": "#FFD2D2",
            // Info
            "info-hover": "#9B51E0",
            "info-main": "#BB6BD9",
            "info-border": "#DB8DF8",
            "info-focus": "#EBB7FF",
            "info-background": "#F6E0FF",
        },
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("tw-elements/dist/plugin"),
        require('flowbite/plugin'),
    ],
};
