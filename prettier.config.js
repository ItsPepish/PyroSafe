export default {
    plugins: ['prettier-plugin-blade', 'prettier-plugin-tailwindcss'],

    tailwindStylesheet: './resources/css/app.css',

    printWidth: 140,
    singleQuote: true,
    bracketSameLine: true,

    overrides: [
        {
            files: ['*.blade.php'],
            options: {
                parser: 'blade',
            },
        },
    ],
};