<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartLine;
use App\Models\Product;
use Illuminate\Http\Request;

class SummaryCartController extends Controller
{
    public function showCartSummary()
    {
        $cart = session()->get('cart', []);
        $totalPrice = 0;

        foreach ($cart as $id => $details) {
            $totalPrice += $details['Price'] * $details['quantity'];
        }

        return view('summaryCart', ['cart' => $cart, 'totalPrice' => $totalPrice]);
    }

    public function validateCartSummary(Request $request){
        $validated = $request->validate([
            'produit' => 'required|array',
            'prixUnitaire' => 'required|array',
            'quantite' => 'required|array',
            'categorie' => 'required|array',
        ]);


        $user_id = auth()->id(); // Récupérer l'ID de l'utilisateur actuellement authentifié
        $panier = Cart::create([
            'id' => $user_id,
        ]);

        foreach ($request->input('idProduit') as $index => $idProduit) {
            CartLine::create([
                'IdCart' => $panier->IdCart,
                'IdProduct' => $idProduit,
                'Quantity' => $request->input('quantite')[$index], // Quantité du produit
            ]);
        }

        return redirect()->back()->with('success', 'Votre commande à bien été faite !');
    }
}
