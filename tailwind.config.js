/** @type {import('tailwindcss').Config} */
export default {
  content: [
    // Filled Content
    "./resources/**/**/*.blade.php",
    "./resources/**/**/*.js",
    "./app/View/Components/**/**/*.php",
    "./app/Livewire/**/**/*.php",

    // Add Mary UI
    "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
  ],
  theme: {
    extend: {},
  },
  variants: {
    extend: {
      display: ['group-hover', 'group-focus', 'responsive'],
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: [
      {
        mytheme: {
          "primary": "#a991f7",
          "secondary": "#f6d860",
          "accent": "#37cdbe",
          "neutral": "#3d4451",
          "base-100": "#ffffff",
        },
      },
      "light",
      "cupcake",
      "emerald",
      "valentine",
      "garden",
      "luxury",
      "dracula",
      "lemonade",
      "sunset",
      "forest",
      "autumn",
      "dark",
    ],
    darkTheme: "class", // name of one of the included themes for dark mode
    base: true, // applies background color and foreground color for root element by default
    styled: true, // include daisyUI colors and design decisions for all components
    utils: true, // adds responsive and modifier utility classes
    themeRoot: ":root", // The element that receives theme color CSS variables
  },
}

