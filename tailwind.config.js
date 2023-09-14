// /** @type {import('tailwindcss').Config} */
// export default {
//   content: [],
//   theme: {
//     extend: {},
//   },
//   plugins: [],
// }

const colors = require('tailwindcss/colors')
const forms = require('tailwindcss/forms')
const typography = require('tailwindcss/typography')

module.exports = {
    content: [
        // './packages/admin/resources/**/*.blade.php',
        // './packages/forms/resources/**/*.blade.php',
        // './packages/notifications/resources/**/*.blade.php',
        // './packages/support/resources/**/*.blade.php',
        // './packages/tables/resources/**/*.blade.php',
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.amber,
            },
            fontFamily: {
                sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
