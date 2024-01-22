<?php

use App\Http\Controllers\ParkingController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

Route::get('/test-connexion', function () {
    try {
        DB::connection()->getPdo();
        echo "Connexion à la base de données réussie.";
    } catch (\Exception $e) {
        die("Impossible de se connecter à la base de données. Erreur : " . $e->getMessage());
    }
});

Route::get('/', function () {
    //creation des roles et des permissions, exemple
    //1er étapes
    //$createAdmin = Role::create(['name' => 'Administrateur']);
    //$createCustomer = Role::create(['name' => 'Client']);
    //$createGestion = Role::create(['name' => 'Gestion']);
    //2ième étapes
    //$createRoleAdmin = Permission::create(['name' => 'Administrateur']);
    //$createRoleCustomer = Permission::create(['name' => 'Client']);
    //$createRoleGestion = Permission::create(['name' => 'Gestion']);
    //3ième étapes
    //$roleAdmin = Role::find(1);
    //$roleAdmin->givePermissionTo("Administrateur");
    //$roleCustomer = Role::find(2);
    //$roleCustomer->givePermissionTo("Client");
    //$roleGestion = Role::find(3);
    //$roleGestion->givePermissionTo("Gestion");
    //4ième étapes
    //$user = auth()->user();
    //$assignRole = $user->assignRole('Administrateur');
    //$user = auth()->user();
    //$assignRole = $user->assignRole('Client');
    //$user = auth()->user();
    //$assignRole = $user->assignRole('Gestion');
    return view('welcome');
})->name('home');

Route::get("/home", function (){
    return view("welcome");
});

Route::get('/medicaments', [App\Http\Controllers\ProductController::class, 'showMedicaments'])->name('medicaments');

Route::get('/machines', [App\Http\Controllers\ProductController::class, 'showMachines'])->name('machines');

Route::get('/utilisateurs', [App\Http\Controllers\UserController::class, 'showAll'])->name('utilisateurs');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Auth::routes();
Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/connection', function () {
    return view('auth.login');
})->name('connection');

Auth::routes();
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/verify', function () {
    return view('auth.verify');
});

Route::get('/utilisateur', [App\Http\Controllers\UserController::class, 'showAll'])->name('utilisateur');
