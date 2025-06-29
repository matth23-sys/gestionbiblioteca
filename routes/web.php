
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {return view('welcome');});
Route::get('/home', function () {return view('home');});
// Vistas
Route::view('/login', 'login')->name("login");
Route::view('/registro', 'register')->name("registro");
Route::get('/reservas', function () {return view('reservas');})->name('reservas');

// Acciones
Route::post("/validar-registro", [LoginController::class, "register"])->name("validar-registro");
Route::post("/inicia-sesion", [LoginController::class, "login"])->name("inicia-sesion");
Route::post("/logout", [LoginController::class, "logout"])->name("logout");
Route::get('/home', function () {return view('home');})->name('home');


// Ruta protegida


// Libros (puedes protegerlos también si quieres)
Route::get("/libros/crear", [LibrosController::class, "crear"])->name("libros.crear")->middleware('auth');
Route::post("/libros/store", [LibrosController::class, "store"])->name("libros.store")->middleware('auth');
Route::get("/libros/leer", [LibrosController::class, "leer"])->name("libros.leer")->middleware('auth');
Route::put("/libros/{libro}", [LibrosController::class, "update"])->name("libros.update")->middleware('auth');
Route::get("/libros/eliminar", [LibrosController::class, "eliminar"])->name("libros.eliminar")->middleware('auth');
Route::post("/libros/destroy", [LibrosController::class, "destroy"])->name("libros.destroy")->middleware('auth');

