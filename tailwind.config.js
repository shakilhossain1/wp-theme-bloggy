module.exports = {
  mode: 'jit',
  // purge: [
  //   "./**.php",
  //   "./**/**.php",
  //   "./assets/src/js/**.js"
  // ],
  purge: [
    './page.php',
    './single.php',
    './template-parts/*.php',
    './footer.php',
    './front-page.php',
    './header.php',
    './index.php',
    './assets/src/js/*.js',
    './functions.php',
    './single.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundColor: {
        skin: {
          primary: '#fe4f70'
        }
      },
      textColor: {
        skin: {
         //  muted: '#ffffff99',
         muted: '#8F9BAD',
         light: '#fff',
         dark: '#203656',
         primary: '#fe4f70'
        }
      },
      borderColor: {
        skin: {
          muted: '#EBEBEB',
          primary: '#fe4f70'
        }
      }
    },
  },
  variants: {
    extend: {
      backgroundColor: ['active'],
    },
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
}
