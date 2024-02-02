<?php

use App\Http\Controllers\ParkingController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/*
Route::get('/test-connexion', function () {
    try {
        DB::connection()->getPdo();
        echo "Connexion à la base de données réussie.";
    } catch (\Exception $e) {
        die("Impossible de se connecter à la base de données. Erreur : " . $e->getMessage());
    }
});
*/

//Routes d'acceuill
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

//Page des produits
Route::get('/medicaments', [App\Http\Controllers\ProductController::class, 'showMedicaments'])->name('medicaments');
Route::get('/machines', [App\Http\Controllers\ProductController::class, 'showMachines'])->name('machines');

//Affichage des utilisateurs
Route::get('/utilisateurs', [App\Http\Controllers\UserController::class, 'showAll'])->name('utilisateurs');

//Routes liés à l'utilisateur et son compte
Auth::routes();
Route::get('/profil', [App\Http\Controllers\UserController::class, 'index'])->name('profil');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/connection', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('connection');
Auth::routes();
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::get('/verify', [App\Http\Controllers\Auth\VerificationController::class, 'index'])->name('verify');


//Gestion de panier
Route::get('/panier',[App\Http\Controllers\CartController::class, 'index'])->name('panier');
Route::get('/panier/{id}',[App\Http\Controllers\CartController::class, 'addToCart'])->name('ajoute');
Route::get('/panier/supprimer/{id}',[App\Http\Controllers\CartController::class, 'deleteProduct'])->name('supprimer');
Route::put('/panier/mettre-a-jour', [App\Http\Controllers\CartController::class, 'updateCart'])->name('updateCart');

//Ggestion du récapitulatif du panier
Route::get('/recapitulatif',[App\Http\Controllers\SummaryCartController::class, 'showCartSummary'])->name('recapitulatif');
Route::post('/recapitulatif/validation',[App\Http\Controllers\SummaryCartController::class, 'validateCartSummary'])->name('validation');


Route::get('/commandes',[App\Http\Controllers\OrderController::class, 'showUserOrders'])->name('commandes');
