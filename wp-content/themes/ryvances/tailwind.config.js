module.exports = {
  mode: 'jit',
  content: [
    './*/*.php',
    './**/*.php',
    './resources/css/*.css',
    './resources/js/*.js',
    './safelist.txt',
  ],
  theme: {
    extend: {
      screens: {
        '2xl': '1450px',
      },
      colors: {
        primary: '#E0FFFF',
        secondary: '#2D92B3',
        // secondary: '#4663AC',

        'tx-primary': '#333333',
        'tx-secondary': '#666666',

        'btn-primary': '#5227FF',
        'btn-secondary': '#6D1EA9',

        'footer-primary': '#6F00FF',
        'footer-secondary': '#E1EBEE',
        'footer-text': '#E0E0E0',

        
      },
      fontFamily: {
        sans: ['Raleway', 'sans-serif'],
      },
      boxShadow: {
        standard: '2px 2px 16px rgba(0, 0, 0, 0.1)',
        bottom: '0px 15px 10px -15px rgba(0, 0, 0, 0.2)',
      },
    },
  },
  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          '@screen sm': {
            maxWidth: '640px',
          },
          '@screen md': {
            maxWidth: '768px',
          },
          '@screen lg': {
            maxWidth: '1024px',
          },
          '@screen xl': {
            maxWidth: '1280px',
          },
          '@screen 2xl': {
            maxWidth: '1410px',
          },
        },
      });
    },
  ],
};
