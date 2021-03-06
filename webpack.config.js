var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // uncomment to create hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // uncomment to define the assets of the project
    .addEntry('home', './assets/js/HomeController.js')
    .addEntry('form', './assets/js/FormController.js')
    .addStyleEntry('homeCss', './assets/scss/Pages/home.scss')
    .addStyleEntry('styleCss', './assets/scss/style.scss')

    // uncomment if you use Sass/SCSS files
     .enableSassLoader()
     .enablePostCssLoader()


// uncomment for legacy applications that require $/jQuery as a global variable
    // .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
