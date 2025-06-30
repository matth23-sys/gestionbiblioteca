
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

/* sina uth
// Libros (puedes protegerlos también si quieres)
Route::get("/libros/crear", [LibrosController::class, "crear"])->name("libros.crear")->middleware('auth', 'rol:admin');
Route::post("/libros/store", [LibrosController::class, "store"])->name("libros.store")->middleware('auth');
Route::get("/libros/leer", [LibrosController::class, "leer"])->name("libros.leer")->middleware('auth');
Route::put("/libros/{libro}", [LibrosController::class, "update"])->name("libros.update")->middleware('auth');
Route::get("/libros/eliminar", [LibrosController::class, "eliminar"])->name("libros.eliminar")->middleware('auth');
Route::post("/libros/destroy", [LibrosController::class, "destroy"])->name("libros.destroy")->middleware('auth');
*/
//ejemplares 
/*
Route::middleware(['auth', 'rol:admin'])->group(function () {
    Route::get('/ejemplares', [EjemplarController::class, 'index'])->name('ejemplares.index');
    Route::get('/ejemplares/crear', [EjemplarController::class, 'create'])->name('ejemplares.create');
    Route::post('/ejemplares', [EjemplarController::class, 'store'])->name('ejemplares.store');
    Route::patch('/ejemplares/{id}/estado', [EjemplarController::class, 'updateEstado'])->name('ejemplares.updateEstado');
    Route::delete('/ejemplares/{id}', [EjemplarController::class, 'destroy'])->name('ejemplares.destroy');
});*/


/*
// Grupo de rutas protegidas para admi


    Route::get('/ejemplares/crear', [EjemplarController::class, 'crear'])->name('ejemplares.create');
    Route::post('/ejemplares', [EjemplarController::class, 'store'])->name('ejemplares.store');
    Route::get('/ejemplares/{id}/leer', [EjemplarController::class, 'leer'])->name('ejemplares.leer'); // Para mostrar formulario editar
    Route::put('/ejemplares/{id}', [EjemplarController::class, 'update'])->name('ejemplares.update'); // Actualizar datos completos
    Route::patch('/ejemplares/{id}/estado', [EjemplarController::class, 'updateEstado'])->name('ejemplares.updateEstado'); // Actualizar solo estado
    Route::delete('/ejemplares/{id}', [EjemplarController::class, 'destroy'])->name('ejemplares.destroy');
*/
/* sin auth
// Ejemplares
Route::get("/ejemplares/crear", [EjemplaresController::class, "crear"])->name("ejemplares.crear");
Route::post("/ejemplares/store", [EjemplaresController::class, "store"])->name("ejemplares.store");
Route::get("/ejemplares/leer", [EjemplaresController::class, "leer"])->name("ejemplares.leer");
Route::post("/ejemplares/{ejemplar}/estado", [EjemplaresController::class, "cambiarEstado"])->name("ejemplares.estado");
Route::delete("/ejemplares/{ejemplar}", [EjemplaresController::class, "eliminar"])->name("ejemplares.eliminar");
*/ 


Route::middleware(['auth', 'rol.admin'])->group(function () {
    // Rutas Libros protegidas
    Route::get("/libros/crear", [LibrosController::class, "crear"])->name("libros.crear");
    Route::post("/libros/store", [LibrosController::class, "store"])->name("libros.store");
    Route::get("/libros/leer", [LibrosController::class, "leer"])->name("libros.leer");
    Route::put("/libros/{libro}", [LibrosController::class, "update"])->name("libros.update");
    Route::get("/libros/eliminar", [LibrosController::class, "eliminar"])->name("libros.eliminar");
    Route::post("/libros/destroy", [LibrosController::class, "destroy"])->name("libros.destroy");

    // Rutas Ejemplares protegidas
    Route::get("/ejemplares/crear", [EjemplaresController::class, "crear"])->name("ejemplares.crear");
    Route::post("/ejemplares/store", [EjemplaresController::class, "store"])->name("ejemplares.store");
    Route::get("/ejemplares/leer", [EjemplaresController::class, "leer"])->name("ejemplares.leer");
    Route::post("/ejemplares/{ejemplar}/estado", [EjemplaresController::class, "cambiarEstado"])->name("ejemplares.estado");
    Route::delete("/ejemplares/{ejemplar}", [EjemplaresController::class, "eliminar"])->name("ejemplares.eliminar");
});
