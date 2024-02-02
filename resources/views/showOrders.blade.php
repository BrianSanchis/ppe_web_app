@extends('layouts.app')

@include('layouts.navbar')

<div class="container custom-height-container my-5">
    <h1>Caractéristiques des produits commandés</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Nom du produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orderedProducts as $order)
            @foreach($order->products as $product)
                <tr>
                    <td>{{ $product->Libelle }}</td>
                    <td>{{ $product->Price }} €</td>
                    <td>{{ $product->pivot->Quantity }}</td> <!-- Quantité -->
                    <td>{{ $product->Description }}</td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
</div>

@include('layouts.footer')
