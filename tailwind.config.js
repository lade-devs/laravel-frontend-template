/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
      colors: {
          'primary': '#0c0b0b',
          'secondary': '',
      },
    extend: {},
  },
  plugins: [
      require('flowbite/plugin')
  ],
}

