module.exports = {
  theme: {
    fontFamily: {
      'sans': 'Roboto, -apple-system, BlinkMacSystemFont,sans-serif',
    },
    colors: {
      white: '#ffffff',
      black: '#2B2929',
      gray: {
        100: '#F3F3F3',
        200: '#F8F8F8',
        500: '#7A808B',
        600: '#42495b',
      },
      blue: {
        500: '#4582FF'
      },
      orange: {
        500: '#FF9900',
      },
      indigo: {
        200: '#E4EEF7',
        900: '#151948'
      }
    },
    extend: {}
  },
  variants: {},
  corePlugins: {
    container: false,
  },
  plugins: [
    require('tailwind-bootstrap-grid')({
      gridGutterWidth: '32px',
    })
  ]
};
