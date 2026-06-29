/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./assets/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'primary-blue': '#2F7DB1',
        'dark-blue': '#1A4E7A',
        'tips-green': '#5CB85C',
        'dark-footer': '#1a1a1a',
      },
      fontFamily: {
        'sans': ['"Open Sans"', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', 'sans-serif'],
      },
      boxShadow: {
        'premium': '0 10px 30px -10px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
      }
    },
  },
  plugins: [],
}
