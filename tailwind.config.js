/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        "casual": ["Casual", "serif"],
        "morning-rainbow": ['morning-rainbow', 'sans-serif'],
        "vietnam": ['Be Vietnam Pro', 'sans-serif'],
        "poppins": ['Poppins', 'sans-serif'],
        "inter": ['Inter', 'sans-serif'],
        'chicken-pie': ['Chicken Pie']
      },
      screens: {
        'sm': '640px',
        'md': '767px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',
      },
    },
  },
  plugins: [
    // require("tailwindcss-plugins/pagination"),
    require('flowbite/plugin')
  ],
};