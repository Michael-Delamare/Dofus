<?php

use App\Http\Controllers\ServeurController;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/Accueil', function () {
    return view('dashboard');
})->name('accueil');

Route::resource('/serveur', ServeurController::class);
Route::resource('/portail', App\Http\Controllers\PortailController::class);
Route::resource('/info_portail', App\Http\Controllers\InformationPortailController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
