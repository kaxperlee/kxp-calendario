<?php

use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\EmpresaController;
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
Route::get('/ftp', [CalendarioController::class, 'ftp'])->name('calendario.ftp');

Route::get('/', [CalendarioController::class, 'index'])->name('calendario.index');
Route::get('/informe', [CalendarioController::class, 'informe'])->name('calendario.informe');
Route::get('/calendario/empresas/{fecha}', [CalendarioController::class, 'empresas'])->name('calendario.empresas');
Route::get('/calendario/empresas/{id}/{fecha}', [CalendarioController::class, 'empresa'])->name('calendario.empresa');
Route::get('/calendario/{fecha}', [CalendarioController::class, 'show'])->name('calendario.show');


Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa.index');
Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresa.create');
Route::post('/empresa', [EmpresaController::class, 'store'])->name('empresa.store');
Route::get('/empresa/edit/{id}', [EmpresaController::class, 'edit'])->name('empresa.edit');
Route::get('/empresa/{id}', [EmpresaController::class, 'show'])->name('empresa.show');
Route::put('/empresa/update', [EmpresaController::class, 'update'])->name('empresa.update');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
