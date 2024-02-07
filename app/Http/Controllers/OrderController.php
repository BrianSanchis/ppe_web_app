<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function showUserOrders() {
        // Récupérer l'utilisateur actuellement authentifié avec ses commandes et les produits associés

        $user = auth()->id();



        $orderedProducts = DB::table('Product')
            ->join('CartLine', 'Product.IdProduct', '=', 'CartLine.IdProduct')
            ->join('Cart', 'CartLine.IdCart', '=', 'Cart.IdCart')
            ->join('users', 'Cart.id', '=', 'users.id')
            ->where('users.id', $user)
            ->select('Product.*', 'CartLine.Quantity as Quantity', 'Cart.created_at as Date')
            ->get();

        /*
        $orderedProducts = $user->orders()->with('products')->get();
        */
        return view('showOrders', compact('orderedProducts'));

    }
}
