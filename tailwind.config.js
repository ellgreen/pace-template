module.exports = {
  purge: [
      'resources/css/*.css',
      'resources/views/**/*.blade.php',
      'resources/views/**/*.md',
  ],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
  future: {
    removeDeprecatedGapUtilities: true,
  },
}
