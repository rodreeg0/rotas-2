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

Route::get('/produtos/{qnt}', function ($qnt) {
    $nomes = array('Sabonete','Sabao','Detergente','Miojo','Tempero','chá','café','suco','torrada','mostarda','maionese','geleia','bolacha','leite',
    'chimarrao','vodka','amaciante','desodorante');

    $random = array();
    for($i = 1;$i <= $qnt; $i++){
        $tempArray = array_rand($nomes,3);
        $tempNome = $nomes[$tempArray[0]].' '.$nomes[$tempArray[1]].' '.$nomes[$tempArray[2]];
        array_push($random,$tempNome);
    }
    
    return view('exercicio2')->with(compact('random'));
})->where('qnt', '([1-9]|[1-9][0-9])+');

Route::get('/serie/{X}/{Y}/{Z}', function ($x,$y,$z) {
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

Route::get('/atividade4', function () {
    return view('exercicio4');
});

//A regra de negocio dessa atividade foi feita no controler
Route::post('/atividade4', [PagesController::class, 'atividade4']);
