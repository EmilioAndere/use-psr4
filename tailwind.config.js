
const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      10: '10',
      12: '12',
      fontFamily: {
        side: "'Poppins', sans-serif",
        lato: "'Lato', sans-serif"
      },
      minHeight: {
        '100vh': '100vh'
      },
      spacing: {
        '240': '240px',
        '50px': '50px',
        '20px': '20px',
        '6x': '6px',
        '5px': '5px',
        '14x': '14px',
      },
      fontSize: {
        '20px': '20px',
        '28px': '28px',
      },
      inset: {
        '8/10': '80%',
        '6px': '6px'
      },
      lineHeight: {
        '50': '50px'
      }
    },
    colors: {
      gray: colors.trueGray,
      black: colors.black,
      red: colors.red,
      blue: colors.sky,
      yellow: colors.amber,
      lime: colors.lime,
      green: colors.green,
      teal: colors.teal,
      white: colors.white,
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/line-clamp')],
}
