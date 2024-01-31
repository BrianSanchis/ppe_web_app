@extends('layouts.app')

@include('layouts.navbar')

<div class="container custom-height-container">
    <form action="{{ route('updateCart') }}" method="POST">
        @csrf
        @method('PUT')
    <table id="cart" class="table table-bordered">
        <thead>
        <tr>
            <th>Produit</th>
            <th>Prix unitaire</th>
            <th>Quantité</th>
            <th>Categorie</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @php
            $totalPrice = 0;
        @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php
                    $subtotal = $details['Price'] * $details['quantity'];
                    $totalPrice += $subtotal;
                @endphp
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['Libelle'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price" class="price" data-initial-price="{{ $details['Price'] }}">{{ $details['Price']}}€</td>
                    <td data-th="Quantity" class="text-center">
                        <input type="number" class="form-control quantity" name="quantity[{{$id}}]" value="{{ $details['quantity'] }}" min="1" data-id="{{ $id }}">
                    </td>
                    <td data-th="Category">
                        @if(isset($details['IdCat']) && $details['IdCat'] == 2)
                            Medicament
                        @else
                            Machine
                        @endif
                    </td>
                    <td class="actions">
                        <a href="{{ route('supprimer', ['id' => $id]) }}" class="btn btn-outline-danger btn-sm delete-product">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    <div class="total-price-container">
        <h4 class="total-price-title">Prix total du panier:</h4>
        <div class="total-price">
            <span id="totalPrice">{{ $totalPrice }}</span>€
        </div>
    </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn bg-dark mt-5 mr-3 text-white">Mettre à jour le panier</button>
        </div>
    </form>
    <a href="{{ route('recapitulatif') }}" class="btn btn-primary mt-5">Passer la commande</a>
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
