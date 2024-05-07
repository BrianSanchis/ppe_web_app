@extends('layouts.app')

@include('layouts.navbar')

<div class="container mt-5">
    <div class="row justify-content-center"> <!-- Centrer le contenu horizontalement -->
        <div class="col-md-6 mb-4"> <!-- Utiliser une colonne de taille moyenne pour le contenu -->
            <form class="d-flex" role="search" action="{{ route('recherche machines') }}" method="GET">
                @csrf
                <input class="form-control me-2 mr-2" type="search" placeholder="Nom du produit" aria-label="Search" name="search">
                <button class="btn btn-outline-dark" type="submit">Rechercher</button>
            </form>
        </div>
    </div>
    <div class="row">
        @if(isset($machines))
            @foreach($machines as $machine)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/machines.avif'.$machine->image) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3 class="card-title">{{ $machine->Libelle }}</h3>
                            <p class="card-text">{{ $machine->Description }}</p>
                            <br>
                            <p class="card-text">Prix: {{ $machine->Price }} €</p>
                            <br>
                            <a href="{{ route('ajoute',$machine->IdProduct) }}" class="btn btn-dark">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

            @if(Route::currentRouteName() == 'recherche machines')
                @if($products->isEmpty())
                    <p>Aucun résultat trouvé.</p>
                @else
                    @foreach($products as $product)
                        <h1>Résultats de la recherche</h1>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('images/machines.avif'.$product->image) }}" class="card-img-top" alt="">
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

@if(Route::currentRouteName() == 'machines')
    <div class="container w-100 d-flex justify-content-center mt-5 mb-5">
        {{$machines->links()}}
    </div>
@endif

@include('layouts.footer')
