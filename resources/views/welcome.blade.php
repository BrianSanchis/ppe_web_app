@extends('layouts.app')

@include('layouts.navbar')

<div class="container custom-height-container d-flex justify-content-center aligns-items-center" style="height: 92vh">
    <div class="row align-items-center">
        <div class="card col-xs" style="width: 25rem;">
            <img src="{{ asset('images/medicaments.jpg') }}" class="card-img-top mt-3" alt="...">
            <div class="card-body">
                <h5 class="card-title">Medicaments</h5>
                <p class="card-text">Page des medicaments, vous pouvez acheter ou consulter un medicament sur internet. Vous également retrouver toutes les informations concernant un medicament.</p>
                <a href="{{ route('medicaments') }}" class="btn btn-dark mt-6">Voir les produits</a>
            </div>
        </div>

        <div class="card col-xs" style="width: 18rem;"></div>

        <div class="card col-xs" style="width: 25rem;">
            <img src="{{ asset('images/machines.avif') }}" class="card-img-top mt-3" alt="...">
            <div class="card-body">
                <h5 class="card-title">Machines</h5>
                <p class="card-text">Page des machines, vous pouvez acheter ou consulter des machines sur internet. Vous également retrouver toutes les informations concernant une machine.</p>
                <a href="{{ route('machines') }}" class="btn btn-dark mt-6">Voir les produits</a>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

