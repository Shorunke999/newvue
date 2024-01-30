/** @type {import('tailwindcss').Config} */
export default {
  content: [  
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      'weather-primary': "#00668A",
      'weather-secondary': "#004E71",
    },
    container:{
      padding:'2rem',
      center:true,
    },
    screens:{
      sm:"640px",
      md:"760px",
    }
  },
  plugins: [],
}

