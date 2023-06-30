<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthentificationController;

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
    return view('accueil');
});
//route pour afficher l'accueil
Route::get('/accueil_prospection', function () {
    return view('accueil');
});
// Route pour afficher le formulaire de connexion
Route::get('authentificatin', function () {
    return view('login');
})->name('login_prospection');

//dashboard
Route::get('dashboard|Prospection', function () {
    return view('dashboard_prospection');
})->name('dashboard_prospection');

Route::get('/home_dashboard', function () {
    return view('dashboard_prospection');
})->name('dashboard_prospection');

Route::get('/ajout_prospection', function () {
    return view('formulaire_prospection');
})->name('formulaire_prospection');

Route::get('/gestion_prospection', function () {
    return view('gestion_prospection');
})->name('gestion_prospection');

// Route pour traiter le formulaire de connexion
//Route::post('/login', [AuthentificationController::class, 'login'])->name('login');
Route::resource('/gestion_prospection','App\Http\Controllers\GestionProspectionController');
//Route::get('/liste_prospection','App\Http\Controllers\GestionProspectionController@liste')->name('liste_prospection');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
Route::get('deconnecter','App\Http\Controllers\AuthentificationController@logout')->name('deconnexion');

