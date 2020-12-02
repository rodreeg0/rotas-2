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

// Route::get('/atividade4/{q1?}/{q2?}/{q3?}/{q4?}/{q5?}/{q6?}/{q7?}/{q8?}/{q9?}/{q10?}', function ($q1=null,$q2=null,$q3=null,$q4=null,$q5=null,$q6=null,$q7=null,$q8=null,$q9=null,$q10=null) {
//     //Os parametros opcionais dessa rota são só para o link de teste que o prof pediu. Pois não da pra fazer POST só com um link.
//     $data = array(
//         '1' => $q1,
//         '2' => $q2,
//         '3' => $q3,
//         '4' => $q4,
//         '5' => $q5,
//         '6' => $q6,
//         '7' => $q7,
//         '8' => $q7,
//         '9' => $q9,
//         '10' => $q10
//     );
//     return view('form')->with(compact('data'));
// });

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
