
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EjemplaresController;
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


Route::view('/login', 'login')->name("login");
Route::view('/registro', 'register')->name("registro");
Route::get('/reservas', function () {return view('reservas');})->name('reservas');


Route::post("/validar-registro", [LoginController::class, "register"])->name("validar-registro");
Route::post("/inicia-sesion", [LoginController::class, "login"])->name("inicia-sesion");
Route::post("/logout", [LoginController::class, "logout"])->name("logout");
Route::get('/home', function () {return view('home');})->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'rol.admin'])->group(function () {
    
    Route::get("/libros/crear", [LibrosController::class, "crear"])->name("libros.crear");
    Route::post("/libros/store", [LibrosController::class, "store"])->name("libros.store");
    Route::get("/libros/leer", [LibrosController::class, "leer"])->name("libros.leer");
    Route::put("/libros/{libro}", [LibrosController::class, "update"])->name("libros.update");
    Route::get("/libros/eliminar", [LibrosController::class, "eliminar"])->name("libros.eliminar");
    Route::post("/libros/destroy", [LibrosController::class, "destroy"])->name("libros.destroy");

   
    Route::get("/ejemplares/crear", [EjemplaresController::class, "crear"])->name("ejemplares.crear");
    Route::post("/ejemplares/store", [EjemplaresController::class, "store"])->name("ejemplares.store");
    Route::get("/ejemplares/leer", [EjemplaresController::class, "leer"])->name("ejemplares.leer");
    Route::post("/ejemplares/{ejemplar}/estado", [EjemplaresController::class, "cambiarEstado"])->name("ejemplares.estado");
    Route::delete("/ejemplares/{ejemplar}", [EjemplaresController::class, "eliminar"])->name("ejemplares.eliminar");
});
