@extends('layouts.app')

@include('layouts.navbar')

<div class="container mt-5">
    <div class="row">
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
    </div>
</div>

<div class="container w-100 d-flex justify-content-center mb-5 mt-5">
    {{$medicaments->links()}}
</div>

@include('layouts.footer')
