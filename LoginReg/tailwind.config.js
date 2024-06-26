/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      sm:'480px',
      md:'768px',
      lg:'976px',
      xl:'1440px'
    },
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

