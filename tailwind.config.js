/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,css}","./node_modules/flowbite/*/.js"],
  darkMode: 'class',
  hover:'class',
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

