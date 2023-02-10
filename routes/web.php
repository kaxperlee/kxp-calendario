<?php

use App\Http\Controllers\CalComunidadController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\LocalidadController;
use App\Models\CalComunidad;
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
Route::view('/test', 'test');

Route::get('/ftp', [CalendarioController::class, 'ftp'])->name('calendario.ftp');

Route::get('/', [CalendarioController::class, 'index'])->name('calendario.index');
Route::get('/informe', [CalendarioController::class, 'informe'])->name('calendario.informe');
Route::get('/calendario/empresas/{fecha}', [CalendarioController::class, 'empresas'])->name('calendario.empresas');
Route::get('/calendario/empresas/{id}/{fecha}', [CalendarioController::class, 'empresa'])->name('calendario.empresa');
Route::get('/calendario/{fecha}', [CalendarioController::class, 'show'])->name('calendario.show');

Route::get('/horario', [HorarioController::class, 'index'])->name('horario.index');

Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa.index');
Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresa.create');
Route::post('/empresa', [EmpresaController::class, 'store'])->name('empresa.store');
Route::get('/empresa/edit/{empresa}', [EmpresaController::class, 'edit'])->name('empresa.edit');
Route::get('/empresa/{empresa}', [EmpresaController::class, 'show'])->name('empresa.show');
Route::put('/empresa/update/{empresa}', [EmpresaController::class, 'update'])->name('empresa.update');

Route::get('/evento/list/{ano}', [EventoController::class, 'index'])->name('evento.index');
Route::get('/evento/create', [EventoController::class, 'create'])->name('evento.create');
Route::post('/evento', [EventoController::class, 'store'])->name('evento.store');
Route::get('/evento/edit/{evento}', [EventoController::class, 'edit'])->name('evento.edit');
Route::get('/evento/{evento}', [EventoController::class, 'show'])->name('evento.show');
Route::put('/evento/update/{evento}', [EventoController::class, 'update'])->name('evento.update');

Route::get('/localidad/ls/{comunidad}', [LocalidadController::class, 'index'])->name('localidad.index');
Route::get('/localidad/create', [LocalidadController::class, 'create'])->name('localidad.create');
Route::post('/localidad', [LocalidadController::class, 'store'])->name('localidad.store');
Route::get('/localidad/edit/{comunidad}', [LocalidadController::class, 'edit'])->name('localidad.edit');
Route::get('/localidad/{localidad}', [LocalidadController::class, 'show'])->name('localidad.show');
Route::put('/localidad/update/{localidad}', [LocalidadController::class, 'update'])->name('localidad.update');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
