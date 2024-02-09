<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CategoryManager; // Asegúrate de usar el namespace correcto
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/manage-expenses', function () {
    return view('manage-expenses');
})->middleware(['auth']); // Asegúrate de añadir cualquier middleware necesario, como autenticación.

Route::get('/categories', CategoryManager::class)->name('categories')->middleware('auth');
// Apuntar correctamente a la vista en caso de usar un namespace o grupo de rutas.
Route::get('/categories/manage', function () {
    return view('categories.manage');
})->middleware(['auth']); // Suponiendo que esta página requiera autenticación.
