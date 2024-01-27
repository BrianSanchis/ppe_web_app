@extends('layouts.app')

@include('layouts.navbar')
<div class="container custom-height-container">
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Categorie</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
    @if(session('cart'))
        @foreach(session('cart') as $id => $details)
            <tr rowId="{{ $id }}">
                <td data-th="Product">
                    <div class="row">
                        <!--<div class="col-sm-3 hidden-xs"><img src="" class="card-img-top"></div>-->
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['Libelle'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">${{ $details['Price'] }}</td>
                <td data-th="Quantity" class="text-center">{{ $details['quantity'] }}</td>
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
</div>





@include('layouts.footer')
