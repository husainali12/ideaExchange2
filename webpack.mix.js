let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
//var path = require('path');


// mix.options({
//     terser: {
//         terserOptions: {
//             warnings: true
//         }
//     }
// });
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


  //  mix.js('resources/assets/js/app.js', 'public/js')
  //   .webpackConfig({
  //        module: {
  //           rules: [
  //               // SASS has different line endings than SCSS
  //               // and cannot use semicolons in the markup
  //               {
  //                 test: /\.sass$/,
  //                 use: [
  //                   'vue-style-loader',
  //                   'css-loader',
  //                   {
  //                     loader: 'sass-loader',
  //                     // Requires sass-loader@^7.0.0
  //                     options: {
  //                       // This is the path to your variables
  //                       data: "@import '@/styles/variables.scss'"
  //                     },
  //                     // Requires sass-loader@^8.0.0
  //                     options: {
  //                       // This is the path to your variables
  //                       prependData: "@import '@/styles/variables.scss'"
  //                     },
  //                   },
  //                 ],
  //               },
  //               // SCSS has different line endings than SASS
  //               // and needs a semicolon after the import.
  //               {
  //                 test: /\.scss$/,
  //                 use: [
  //                   'vue-style-loader',
  //                   'css-loader',
  //                   {
  //                     loader: 'sass-loader',
  //                     // Requires sass-loader@^7.0.0
  //                     options: {
  //                       // This is the path to your variables
  //                       data: "@import '@/styles/variables.scss';"
  //                     },
  //                     // Requires sass-loader@^8.0.0
  //                     options: {
  //                       // This is the path to your variables
  //                       prependData: "@import '@/styles/variables.scss';"
  //                     },
  //                   },
  //                 ],
  //               },
  //             ],
  //        },
  //        resolve: {
  //           alias: {
  //             '@': path.resolve('resources/assets/sass')
  //           }
  //         }
  //    })
  //  .sass('resources/assets/sass/app.scss', 'public/css');
