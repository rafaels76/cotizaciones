<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Auth;

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

/*
Route::get('/empleado', function () {
    return view('empleado.index');
});
Route::get('/empleado/create', [EmpleadoController::class, 'create']);*/


Route::get('/', function () { return view('home');});
Route::resource('empleado', EmpleadoController::class)->middleware('auth');
Auth::routes();
//Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/empresa', [App\Http\Controllers\EmpresaController::class, 'index']);
Route::get('/empresa/create', [App\Http\Controllers\EmpresaController::class, 'create']);
Route::resource('empresa', EmpresaController::class);

// Estas lineas que vienen es para modificar las redirecciones de auth
/*
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');

});
*/
