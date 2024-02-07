@extends('layouts.app')

@include('layouts.navbar')

<div class="container d-flex align-items-center">
    <div class="container mb-5">
        @php
            $currentDate = null;
            $totalPrice = 0;
        @endphp
        {{-- Vérifier si la collection est vide --}}
        @if($orderedProducts->isEmpty())
            <div class="container border border-dark rounded w-50 text-center">
                <h1 class="mb-2 mt-5">Aucune commande trouvée</h1>
                <p class="mb-5">Vous n'avez pas encore passé de commande.</p>
                <a href="{{ route('home') }}" class="btn btn-dark mb-5 custom-background-color border-0">Retour à l'accueil</a>
            </div>
            @else
                {{-- Boucle foreach pour itérer sur les commandes --}}
                @foreach($orderedProducts as $order)
                    @php
                        $date = \Carbon\Carbon::parse($order->Date);
                        $formattedDate = $date->format('Y-m-d');
                    @endphp
                    {{-- Vérifier si la date actuelle est différente de la date formatée --}}
                    @if($currentDate != $formattedDate)
                        {{-- Fermer la table précédente si la date actuelle n'est pas nulle --}}
                        @if($currentDate !== null)
                            </tbody>
            </table>
            <div class="text-right">
                <strong>Prix total : {{ $totalPrice }} €</strong>
            </div>
    </div>
    <br>
    @endif
    {{-- Mettre à jour la date actuelle --}}
    @php
        $totalPrice = 0;
        $currentDate = $formattedDate;
    @endphp
    {{-- Ouvrir une nouvelle div pour la nouvelle date --}}

        <div class="card-header custom-background-color text-white">
            Commandes du {{ $currentDate }}
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nom du produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                @endif
                {{-- Afficher les détails de la commande --}}
                <tr>
                    <td>{{ $order->Libelle }}</td>
                    <td>{{ $order->Price }} €</td>
                    <td>{{ $order->Quantity }}</td>
                    <td>{{ $order->Description }}</td>
                </tr>
                {{-- Accumuler le prix total --}}
                @php
                    $totalPrice += $order->Price * $order->Quantity;
                @endphp
                @endforeach
                {{-- Fermer la dernière table --}}
                </tbody>
            </table>
            <div class="text-right">
                <strong>Prix total : {{ $totalPrice }} €</strong>
            </div>
        </div>
    @endif
</div>
</div>

@include('layouts.footer')
