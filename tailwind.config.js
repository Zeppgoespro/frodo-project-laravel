/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './resources/**/*.css',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php'
  ],
  theme: {
    extend: {},
  },
  plugins: [require("./tailgrids/plugin")],
}
