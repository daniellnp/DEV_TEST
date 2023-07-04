<?php

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
//header(header:'Access-Control-Allow-Origin:http://127.0.0.1:8000/');
Route::group(['middleware' =>'web'], function(){
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



});

Route::get('/cad/', [App\Http\Controllers\CadastroControllers::class,'index'])->middleware('auth');
Route::post('/add', [App\Http\Controllers\CadastroControllers::class,'add'])->middleware('auth');
Route::get('/{id}/edit', [App\Http\Controllers\CadastroControllers::class,'edit'])->middleware('auth');
Route::post('/update', [App\Http\Controllers\CadastroControllers::class,'update'])->middleware('auth');
Route::delete('/{id}/delete', [App\Http\Controllers\CadastroControllers::class,'delete'])->middleware('auth');
Route::get('/apiCepJson/{cep}/', [App\Http\Controllers\CadastroControllers::class,'getApiCepJson'])->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teste',  function () {
        return view('layouts.app');
 });
#(Router::get,Router::post,Router::put,Router::patch,Route::delete,Route::options)


