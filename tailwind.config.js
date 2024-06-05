/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"],
  theme: {
    container: {
      center: true,
      padding: "16px"
    },
    extend: {
      colors: {
        primary: "#f97316",
        second: "#3b82f6",
        phar: "#64748b",
        dark: "#111827",
        pink: "#dd7d7e",
        pinktua: "#be185d"
      },
      fontFamily: {
        sans: ["Inter var", ...defaultTheme.fontFamily.sans]
      }
    },
    screens: {
      sm: "480px",
      md: "768px",
      lg: "976px",
      xl: "1320px",
      "2xl": "1440px"
    },
    fontFamily: {
      inter: ["Inter"]
    }
  },
  plugins: []
};
