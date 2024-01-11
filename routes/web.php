<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test-database', function () {
    try {
        DB::connection()->getPdo();
        echo "Connexion à la base de données établie avec succès.";
    } catch (\Exception $e) {
        die("Impossible de se connecter à la base de données. Erreur : " . $e->getMessage());
    }
});

Route::get('/', function () {
    return view('welcome'); // Assure-toi que tu as une vue appelée 'accueil.blade.php'
})->name('home');

// Route pour la page des médicaments
Route::get('/medicaments', function () {
    return view('medicaments'); // Assure-toi que tu as une vue appelée 'medicaments.blade.php'
})->name('medicaments');

// Route pour la page des machines
Route::get('/machines', function () {
    return view('machines'); // Assure-toi que tu as une vue appelée 'machines.blade.php'
})->name('machines');

Route::get('/connexion', function () {
    return view('connexion'); // Assure-toi que tu as une vue appelée 'connexion.blade.php'
})->name('connexion');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
