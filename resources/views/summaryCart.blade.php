@extends('layouts.app')

@include('layouts.navbar')

<div class="container custom-height-container">
    <form action="{{ route('validation') }}" method="POST">
    @csrf
    @if(count($cart) > 0)
            <h1 class="mb-5">Récapitulatif du Panier</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Produit</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>Catégorie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart as $id => $details)
                <tr>
                    <td>{{ $details['Libelle'] }}</td>
                    <td>{{ $details['Price'] }}€</td>
                    <td>{{ $details['quantity'] }}</td>
                    <td data-th="Category">
                        @if(isset($details['IdCat']) && $details['IdCat'] == 2)
                            Medicament
                        @else
                            Machine
                        @endif
                    </td>
                </tr>
                <input type="hidden" name="idProduit[]" value="{{ $details['IdProduct'] }}">
                <input type="hidden" name="produit[]" value="{{ $details['Libelle'] }}">
                <input type="hidden" name="prixUnitaire[]" value="{{ $details['Price'] }}">
                <input type="hidden" name="quantite[]" value="{{ $details['quantity'] }}">
                <input type="hidden" name="categorie[]" value="{{ isset($details['IdCat']) && $details['IdCat'] == 2 ? 'Medicament' : 'Machine' }}">
            @endforeach
            </tbody>
        </table>
        <div class="total-price-container">
            <h4 class="total-price-title">Prix total du panier:</h4>
            <div class="total-price">
                <span id="totalPrice">{{ $totalPrice }}</span>€
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" id="validateButton" class="btn bg-primary mt-5 mr-3 text-white">Valider ma commande</button>
        </div>
    </form>

    @else
        <p>Votre panier est vide.</p>

        <div class="d-flex justify-content-center">
            <a href="{{ route('home') }}" class="btn btn-secondary mt-5 mr-3 text-white">Revenir à l'accueil</a>
        </div>
    @endif
</div>

@include('layouts.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantities = document.querySelectorAll('.quantity');

        quantities.forEach(function(quantity) {
            quantity.addEventListener('input', function() {
                let id = this.getAttribute('data-id');
                let quantityValue = parseInt(this.value);
                let priceElement = this.closest('tr').querySelector('.price');
                let initialPrice = parseFloat(priceElement.getAttribute('data-initial-price'));
                let newPrice = initialPrice * quantityValue;
                priceElement.textContent = newPrice.toFixed(2) + '€';
                updateTotalPrice();
            });
        });

        function updateTotalPrice() {
            let totalPrice = 0;
            const prices = document.querySelectorAll('.price');
            prices.forEach(function(price) {
                totalPrice += parseFloat(price.textContent.replace('€', ''));
            });
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);

            // Mise à jour du nombre d'articles dans la navbar
            let totalItems = 0;
            quantities.forEach(function(quantity) {
                totalItems += parseInt(quantity.value);
            });
            document.getElementById('cartItemCount').innerText = totalItems;
        }
    });
</script>
