/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./public/**/*.{html,js}'],
  theme: {
    colors: {
      'main': '#BBCDA9',
      'second-yellow': '#FFF000',
      'black': '#000000',
      'pudar': '#D9D9D9',
      'text': '#9ED58D'
    },
    extend: {
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

