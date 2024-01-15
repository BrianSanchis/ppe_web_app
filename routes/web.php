<?php

use App\Http\Controllers\ParkingController;
use Illuminate\Support\Facades\Route;

Route::get('/test-connexion', function () {
    try {
        DB::connection()->getPdo();
        echo "Connexion à la base de données réussie.";
    } catch (\Exception $e) {
        die("Impossible de se connecter à la base de données. Erreur : " . $e->getMessage());
    }
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/medicaments', function () {
    return view('medicaments');
})->name('medicaments');

Route::get('/machines', function () {
    return view('machines');
})->name('machines');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Auth::routes();
Route::get('/connection', [App\Http\Controllers\HomeController::class, 'index'])->name('connection');

Auth::routes();
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/verify', function () {
    return view('auth.verify');
});
