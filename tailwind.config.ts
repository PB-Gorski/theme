import type { Config } from "tailwindcss";

module.exports = {
  content: [
    "./assets/**/*.{js,ts}",
    "./parts/**/*.{html,php}",
    "./patterns/**/*.{html,php}",
    "./templates/**/*.{html,php}",
  ],
  plugins: [require("tailwind-clip-path")],
  theme: {
    container: {
      screens: {
        lg: '960px',
				'xl': '1100px',
				'2xl': '1540px',
				'3xl': '2100px',
      },
    },
    screens: {
      mobile: "480px",
      tablet: "640px",
      desktop: "1024px",
      wide: "1496px",
      fullhd: "1920px",
    },
  },
} satisfies Config;
