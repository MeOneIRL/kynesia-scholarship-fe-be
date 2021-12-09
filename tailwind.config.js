module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'primary-color': '#13B0BE',
        'secondary-color': '#1E335F',
        'accent-color': '#FED15B',
        'bg-color': '#ffffff'
      },
    },
  },
  variants: {
    extend: {
      borderRadius: ['first', 'last'],
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
