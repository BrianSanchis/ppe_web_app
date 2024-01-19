@extends('layouts.app')

@include('layouts.navbar')

<div class="container mt-4">
    <div class="row">
        @foreach($machines as $machine)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('chemin/vers/votre/image/'.$machine->image) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="card-title">{{ $machine->Libelle }}</h3>
                        <p class="card-text">{{ $machine->Description }}</p>
                        <br>
                        <p class="card-text">Prix: {{ $machine->Price }} €</p>
                        <br>
                        <a href="#" class="btn btn-dark">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('layouts.footer')
