<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/atividade4', function () {
    return view('exercicio4');
});

Route::get('/atividade3/{X}/{Y}/{Z}', function ($x,$y,$z) {
    $numeros = array();
    $soma = 0;
    for($i = $x; $i <= $y; $i+=$z){
        array_push($numeros,$i);
        $soma += $i;
    }
    $quantidade = count($numeros);
    $media = $soma / $quantidade;
    return view('exercicio3')->with(compact('numeros', 'soma','quantidade','media'));
});

//A regra de negocio dessa atividade foi feita no controler
Route::post('/atividade4', [PagesController::class, 'atividade4']);
