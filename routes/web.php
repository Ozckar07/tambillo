<?php

use Illuminate\Support\Facades\Route;

/*ENRUTAMIENTO DIRECTO PAGINA DE TAMBILLO*/
Route::get('/', function () {
    return view('tambillo');
});

/*ENRUTAMIENTO DIRECTO A OTRA VISTA
Route::get('/', function () {
    return view('welcome');
});*/

/*ENRUTAMIENTO A UN STRING U OBJETO*/
Route::get('Bienvenidos', function () {
    return 'esta es tu primera pagina de laravel';
});

/*ENRUTAMIENTO CON PARAMETROS */
Route::get('fotos/{numero?}', function ($numero = 'si numero') {
    return 'Foto numero: '.$numero;

})->where('numero', '[0-9]+');


/*ENRUTAMIENTO DIRECTO A OTRA VISTA*/
Route::get('fotos', function () {
    return view('fotos');
});
