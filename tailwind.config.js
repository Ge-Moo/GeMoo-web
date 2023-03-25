/** @type {import('tailwindcss').Config} */
module.exports = {
   content: ["./views/**/**.{njk, html}"],
   theme: {
      extend: {
         fontFamily: {
            rubik: ["Poppins", "sans-serif"],
          },
      },
   },
   plugins: [
      require('@tailwindcss/typography'),
      require('@tailwindcss/line-clamp'),
   ],
}
