/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue'
  ],
  // darkMode: 'class',
  theme: {
    extend: {
      
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}

