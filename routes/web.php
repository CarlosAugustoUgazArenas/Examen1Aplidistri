<?php

use App\Http\Controllers\PropiedadesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' =>'admin'], function(){
    Route::resource('/propiedades',PropiedadesController::class);
});

/*
Route::get('/categoria', function () {
    return view('categoria.index');
});
*/
/*Route::get('/articulo', function () {
    return view('articulo.index');
});*/


