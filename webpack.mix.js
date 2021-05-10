const mix = require('laravel-mix');

//enable sourcemaps only in dev environment
if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: "inline-source-map"
    });
}

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// source paths configuration
const vendors = 'node_modules/'
const src = 'resources/';
const srcCss = src + 'css/';
const srcJs = src + 'js/';

//destination paths configuration
const dest = 'public/';
// const destFonts = dest + 'fonts/';
const destFonts = dest + 'webfonts/';
const destCss = dest + 'css/';
const destJs = dest + 'js/';
const destImg = dest + 'img/';
const destVendors = dest + 'vendors/';

const paths = {
    'animate': vendors + 'animate.css/',
    'bootstrap': vendors + 'bootstrap/dist/',
    'popper': vendors + 'popper.js/dist/umd/',
    'jquery': vendors + 'jquery/dist/',
    'fontawesome': vendors + '@fortawesome/fontawesome-free/',
    'wenk': vendors + 'wenk/dist/',
    'bootstrapValidator': vendors + 'bootstrapvalidator/dist/',
    'perfectscrollbar': vendors + 'perfect-scrollbar/',
    "backstretch": vendors + 'jquery-backstretch/',
    'jasnyBootstrap': vendors + 'jasny-bootstrap/dist/',
    'chartjs': vendors + 'chart.js/dist/',
    'dataTables': vendors + 'datatables/media/',
    'datatablesbs4': vendors + 'datatables.net-bs4/',
    'datatablesbuttonsbs4': vendors + 'datatables.net-buttons-bs4/',
    'datatablesbutton': vendors + 'datatables.net-buttons/',
    'pdfmake': vendors + 'pdfmake/build/',
    'select2': vendors + 'select2/dist/',
    'select2bootstraptheme': vendors + '@ttskch/select2-bootstrap4-theme/dist/',
    'toastr': vendors + 'toastr/',
    'sweetalert2': vendors + 'sweetalert2/',





    // 'datatablesbuttonsbs4' : npmvendors + 'datatables.net-buttons-bs4/',




};


//webfonts
mix.copy(paths.fontawesome + 'webfonts', destFonts);

//jasny-bootstrap
mix.copy(paths.jasnyBootstrap + 'css/jasny-bootstrap.css', destVendors + 'jasny-bootstrap/css');
mix.copy(paths.jasnyBootstrap + 'js/jasny-bootstrap.js', destVendors + 'jasny-bootstrap/js');

//sweetalert2
mix.copy(paths.sweetalert2 + 'dist/sweetalert2.css', destVendors + 'sweetalert/css');
mix.copy(paths.sweetalert2 + 'dist/sweetalert2.js', destVendors + 'sweetalert/js');


//Chart.js
mix.copy(paths.chartjs + 'Chart.js', destVendors + 'chartjs/js');

// ------------------resource js folders into public js folder--------------
mix.copy(srcJs, destJs);

// ------------------resource css folders into public css folder--------------
mix.copy(srcCss, destCss);



// animate
mix.copy(paths.animate + 'animate.min.css', destVendors + 'animate');

// jquery.backstretch
mix.copy(paths.backstretch + 'jquery.backstretch.js', destVendors + 'jquery.backstretch/js');


//   wenk plugin

mix.copy(paths.wenk + 'wenk.min.css', destVendors + 'wenk');



// bootstrap validator plugin

mix.copy(paths.bootstrapValidator + 'css/bootstrapValidator.min.css', destVendors + 'bootstrapvalidator/css/');
mix.copy(paths.bootstrapValidator + 'js/bootstrapValidator.min.js', destVendors + 'bootstrapvalidator/js/');

//select2
mix.copy(paths.select2 + 'css/select2.min.css', destVendors + 'select2/css');
mix.copy(paths.select2 + 'js/select2.min.js', destVendors + 'select2/js');
mix.copy(paths.select2 + 'js/select2.full.js', destVendors + 'select2/js');

mix.copy(paths.select2bootstraptheme + 'select2-bootstrap4.min.css', destVendors + 'select2/css/');

// bootstrap validator plugin

//perfect-scrollbar
mix.copy(paths.perfectscrollbar + 'css/perfect-scrollbar.css', destVendors + 'perfect-scrollbar/css/');
mix.copy(paths.perfectscrollbar + 'dist/perfect-scrollbar.js', destVendors + 'perfect-scrollbar/js/');

// toastr
mix.copy(src + 'css/plugin/toastr.css', destVendors + 'toastr/css');
mix.copy(paths.toastr + 'toastr.js', destVendors + 'toastr/js');
// mix.copy(srcJs + 'pages/ui-toastr.js', destJs);


// images

mix.copy(src + 'img', destImg, false);

// videos

mix.copy(src + 'video', dest + 'video');
// mix.copy(src + 'img/authors', destImg + '/authors');

mix.copy(src + 'fonts', dest + 'fonts');

//datatables
mix.copy(paths.dataTables + 'js/jquery.dataTables.min.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbs4 + 'js/dataTables.bootstrap4.min.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbs4 + 'css/dataTables.bootstrap4.min.css', destVendors + 'datatables/css');

mix.copy(paths.datatablesbuttonsbs4 + 'css/buttons.bootstrap4.min.css', destVendors + 'datatables/css');
mix.copy(paths.datatablesbuttonsbs4 + 'js/buttons.bootstrap4.min.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/buttons.print.min.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/dataTables.buttons.min.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/buttons.html5.min.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/buttons.colVis.min.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/buttons.print.min.js', destVendors + 'datatables/js');

mix.copy(paths.pdfmake + 'pdfmake.min.js', destVendors + 'datatables/js');
mix.copy(paths.pdfmake + 'vfs_fonts.js', destVendors + 'datatables/js');
//-------------------mix-styles---------------------------
mix.sass(src + 'sass/bootstrap/bootstrap.scss', destCss + 'bootstrap.min.css').options({
    processCssUrls: false
});
// mix.sass(src + 'scss/main.scss', destCss + 'main.css');
// pages scss
mix.sass(src + 'sass/bootstrap/pages.scss', destCss + 'pages.css');
mix.sass('resources/sass/auth.scss','public/css');

mix.styles(
    [

        destCss + 'bootstrap.min.css',
        paths.fontawesome + 'css/all.min.css',
        destVendors + 'perfect-scrollbar/css/perfect-scrollbar.css',
        destCss + 'pages.css',
        vendors + 'metismenu/dist/metisMenu.css',

    ], destCss + 'app.css');


//-----------------------mix-scripts--------------------


mix.scripts(
    [
        paths.jquery + 'jquery.min.js',
        paths.popper + 'popper.min.js',
        paths.bootstrap + 'js/bootstrap.min.js',
        vendors + 'metismenu/dist/metisMenu.js',
        srcJs + 'leftmenu.js'
    ], destJs + 'app.js');

