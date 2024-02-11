import type { Config } from "tailwindcss";

module.exports = {
  important: true,
  content: [
    "./filter-layout.php",
    "./filter-layout2.php",
    "./filter-layout-lokale.php",
    "./functions.php",
    "./assets/**/*.{js,ts}",
    "./parts/**/*.{html,php}",
    "./atcf7/**/*.{html,php}",
    "./patterns/**/*.{html,php}",
    "./templates/**/*.{html,php}",
  ],
  plugins: [require("tailwind-clip-path")],
  theme: {
    container: {
      screens: {
        lg: "960px",
        xl: "1170px",
        "2xl": "1445px",
      },
    },
    screens: {
      mobile: "480px",
      tablet: "640px",
      desktop: "1024px",
      wide: "1496px",
      fullhd: "1920px",
    },
    extend: {
      colors: {
        primaryRed: "#b22944",
        textGray: "#2E384D",
        bgLightGray: "#EBEEF2",
        btnHoverRed: "#D00C32",
        bgDarkGray: "#8A8F99",
        lightBlue: "#CCF6FF",
      },
      transitionProperty: {
        height: "height",
      },
    },
  },
} satisfies Config;
