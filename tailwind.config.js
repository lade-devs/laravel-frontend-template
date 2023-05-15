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
          'primary': '',
          'secondary': '',
      },
    extend: {},
  },
  plugins: [
      require('flowbite/plugin')
  ],
}

