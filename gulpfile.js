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

elixir(function (mix) {
    mix.sass('app.scss');
});
elixir(function (mix) {
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';
    var ckEditorPath = 'node_modules/node-ckeditor/ckeditor';
    mix.copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
        .copy('node_modules/jquery/dist/jquery.min.js','public/js')
        .copy(ckEditorPath , 'public/js');
    ;
});