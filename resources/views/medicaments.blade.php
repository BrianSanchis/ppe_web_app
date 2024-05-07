@extends('layouts.app')

@include('layouts.navbar')

<div class="container mt-5">
    <div class="row justify-content-center"> <!-- Centrer le contenu horizontalement -->
        <div class="col-md-6 mb-4"> <!-- Utiliser une colonne de taille moyenne pour le contenu -->
            <form class="d-flex" role="search" action="{{ route('recherche medicaments') }}" method="GET">
                @csrf
                <input class="form-control me-2 mr-2" type="search" placeholder="Nom du produit" aria-label="Search" name="search">
                <button class="btn btn-outline-dark" type="submit">Rechercher</button>
            </form>
        </div>
    </div>
    <div class="row">
        @if(isset($medicaments))
            @foreach($medicaments as $medicament)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/medicaments.jpg'.$medicament->image) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3 class="card-title">{{ $medicament->Libelle }}</h3>
                            <p class="card-text">{{ $medicament->Description }}</p>
                            <br>
                            <p class="card-text">Prix: {{ $medicament->Price }} €</p>
                            <br>
                            <a href="{{ route('ajoute',$medicament->IdProduct) }}" class="btn btn-dark">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

            @if(Route::currentRouteName() == 'recherche medicaments')
                @if($products->isEmpty())
                    <p>Aucun résultat trouvé.</p>
                @else
                    @foreach($products as $product)
                        <h1>Résultats de la recherche</h1>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('images/medicaments.jpg'.$product->image) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $product->Libelle }}</h3>
                                    <p class="card-text">{{ $product->Description }}</p>
                                    <br>
                                    <p class="card-text">Prix: {{ $product->Price }} €</p>
                                    <br>
                                    <a href="{{ route('ajoute',$product->IdProduct) }}" class="btn btn-dark">Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endif
    </div>
</div>

@if(Route::currentRouteName() == 'medicaments')
    <div class="container w-100 d-flex justify-content-center mt-5 mb-5">
        {{$medicaments->links()}}
    </div>
@endif

@include('layouts.footer')
