const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/admin/js/sb-admin-2.min.js', 'public/admin1/js')
    
    .sass('resources/sass/admin/sb-admin-2.scss', 'public/admin1/css ')
    
    .combine(['resources/admin/vendor/jquery/jquery.min.js',
            'resources/admin/vendor/bootstrap/js/bootstrap.bundle.min.js',
            'resources/admin/vendor/jquery-easing/jquery.easing.min.js'], 'public/admin1/vender/vendor.js');

   mix.combine(['resources/admin / vendor / chart.js / Chart.min.js',
        'resources/admin/vendor/chart.js/Chart.js',
        'resources/admin/js/demo/chart-area-demo.js',
        'resources/admin/js/demo/chart-pie-demo.js',  ], 'public/admin1/vender2/vendor2.js');

// 
//
//