module.exports = {
  theme: {
    fontFamily: {
      'sans': 'Roboto, -apple-system, BlinkMacSystemFont,sans-serif',
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
}