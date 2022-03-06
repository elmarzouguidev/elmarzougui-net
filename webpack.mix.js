const mix = require('laravel-mix');

require('laravel-mix-purgecss');

/*mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/

mix.js('resources/js/app.js', 'public/js');
    //.postCss('resources/css/app.css', 'public/css').sourceMaps();
/* .purgeCss({
     enabled: true
 });*/

mix.sass('resources/sass/app.scss', 'public/css');
