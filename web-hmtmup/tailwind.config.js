/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ['./public/**/*.{html,js}'],
  theme: {
    screens: {
      'xs': '320px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
    },
    colors: {
      'main': '#BBCDA9',
      'second-yellow': '#FFF000',
      'black': '#000000',
      'pudar': '#D9D9D9',
      'text': '#9ED58D'
    },
    extend: {
      fontFamily: {
        monserrat: ['Monserrat',]
      },
      colors: {
        'main': '#BBCDA9'
      }
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: ["light"]
  }
}

