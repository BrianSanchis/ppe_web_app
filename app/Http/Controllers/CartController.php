<?php

namespace App\Http\Controllers;



use App\Models\Product;

use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use Gloudemans;


class CartController extends Controller
{
    public function index(){
        return view('cart');
    }

    public function addToCart($id){
        $product = Product::find($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                "Libelle" => $product->Libelle,
                "Price" => $product->Price,
                "Description" => $product->Description,
                "Stock" => $product->Stock,
                "Dosage" => $product->Dosage,
                "IdCat" => $product->IdCat,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Le produit a bien été ajouté !');
    }

    public function deleteProduct($id){
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            if($cart[$id]['quantity'] > 1) {
                // Décrémenter la quantité du produit
                $cart[$id]['quantity']--;
                session()->put('cart', $cart);
                session()->flash('success', 'Une quantité du produit a été supprimée du panier');
            } else {
                unset($cart[$id]);
                session()->put('cart', $cart);
                session()->flash('success', 'Produit supprimé du panier');
            }
        } else {
            session()->flash('error', 'Le produit n\'existe pas dans le panier');
        }

        return redirect()->back();
    }
}
