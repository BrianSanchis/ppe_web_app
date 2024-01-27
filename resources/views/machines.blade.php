@extends('layouts.app')

@include('layouts.navbar')

<div class="container mt-5">
    <div class="row">
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
    </div>
</div>

<div class="container w-100 d-flex justify-content-center mt-5 mb-5">
    {{$machines->links()}}
</div>

@include('layouts.footer')
