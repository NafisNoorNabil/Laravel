/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        nunito:["Nunito Sans"],
        oswald:["Oswald"],
        roboto:["Roboto"],
        playfair:["Playfair Display"],
        poppins:["Poppins"]
      }
    },
  },
  plugins: [],
}

