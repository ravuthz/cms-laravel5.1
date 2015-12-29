var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var bower = './resources/assets/bower/';
var css = './resources/admin/css';
var js = './resources/admin/js';

elixir(function(mix) {
    mix.styles('bootstrap.min.css', 'public/css/bootstrap.min.css', css);
    mix.styles('font-awesome.min.css', 'public/css/font-awesome.min.css', css);
    mix.styles('bootstrap-table/dist/bootstrap-table.min.css', 'public/css/bootstrap-table.min.css', bower);
    mix.styles('ionicons.min.css', 'public/css/ionicons.min.css', css);
    mix.styles('style.css', 'public/css/style.css', css);

    mix.scripts('jquery.min.js', 'public/js/jquery.min.js', js);

    mix.scripts([
        'angular/angular.min.js',
        'angular-route/angular-route.min.js'
    ], 'public/js/angular.min.js', bower);

    mix.scripts('bootstrap.min.js', 'public/js/bootstrap.min.js', js);

    mix.scripts([
        'bootstrap-table/dist/bootstrap-table.min.js',
        //'bootstrap-table/dist/extensions/angular/bootstrap-table-angular.min.js'
    ], 'public/js/bootstrap-table.min.js', bower);

    mix.scripts('Director/app.js', 'public/js/app.js', js);

});
