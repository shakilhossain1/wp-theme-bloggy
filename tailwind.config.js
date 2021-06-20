function withOpacity(variableName) {
  return ({ opacityValue }) =>
    opacityValue !== undefined
      ? `rgba(${variableName}, ${opacityValue})`
      : `rgba(${variableName})`;
}

module.exports = {
  mode: 'jit',
  purge: [
    './page.php',
    './single.php',
    './template-parts/*.php',
    './template-parts/**/*.php',
    './inc/*.php',
    './footer.php',
    './front-page.php',
    './header.php',
    './index.php',
    './assets/src/js/*.js',
    './functions.php',
    './single.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundColor: {
        skin: {
          primary: withOpacity('var(--color-primary)'),
        },
      },
      textColor: {
        skin: {
          //  muted: '#ffffff99',
          muted: withOpacity('var(--color-muted)'),
          light: withOpacity('var(--color-light)'),
          dark: withOpacity('var(--color-dark)'),
          primary: withOpacity('var(--color-primary)'),
        },
      },
      borderColor: {
        skin: {
          muted: withOpacity('var(--color-muted)'),
          primary: withOpacity('var(--color-primary)'),
        },
      },
    },
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ['active'],
    },
  },
  plugins: [require('@tailwindcss/typography')],
};
