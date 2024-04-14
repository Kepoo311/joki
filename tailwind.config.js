/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
            nunito: ['Nunito', 'sans-serif'],
            monts: ['Montserrat', 'sans-serif'],
            autur: ['Autour One', 'sans-serif']
        },
    },
  },
  plugins: [],
}

