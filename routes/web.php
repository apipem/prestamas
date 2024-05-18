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

Route::get('/', function () {return view('login');});
Route::post('/home', function () {return view('home');});
Route::get('/home', function () {return view('home');});
Route::get('/clientes', function () {return view('clientes');});
Route::get('/rutas', function () {return view('rutas');});
Route::get('/informes', function () {return view('informes');});
Route::get('/administracion', function () {return view('administracion');});


##Route::get('/', [AuthController::class, 'login'])->name('a');

Route::get('/hola', [HolaController::class, 'index']);

/** /// ########################### LOGINNNNN ##################################################################**/
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

/** #---------------------------- LOGINNNNN ----------------------------------------------------------------- **/
?>
