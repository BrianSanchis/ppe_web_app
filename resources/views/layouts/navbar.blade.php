@php
    $totalItems = 0;
    if(session()->has('cart')) {
        foreach(session('cart') as $item) {
            $totalItems += $item['quantity'];
        }
    }
@endphp

<nav class="navbar navbar-expand-lg custom-background-color">
    <div class="container-fluid">
        <div class="mx-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="white" class="bi bi-capsule" viewBox="0 0 16 16">
                <path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429z"/>
            </svg>
        </div>
        <a class="navbar-brand text-white" href="\">PharmaShop</a>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('medicaments') }}">Médicaments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('machines') }}">Machines</a>
                </li>
                <li class="nav-item">
                    @auth
                        <a class="nav-link text-white" href="{{ route('commandes') }}">Commandes</a>
                    @else
                        <a class="nav-link text-white" href="{{ route('connection') }}">Commandes</a>
                    @endauth
                </li>
                <li class="nav-item d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                    @auth
                        <a class="nav-link text-white" href="{{ route('panier') }}">Panier</a><span id="cartItemCount" class="badge bg-danger">{{ $totalItems }}</span>
                    @else
                        <a class="nav-link text-white" href="{{ route('connection') }}">Panier</a><span id="cartItemCount" class="badge bg-danger">{{ $totalItems }}</span>
                    @endauth
                </li>
                @if(Auth::check() && Auth::user()->name == 'admin')
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('utilisateurs') }}">Liste utilisateur</a>
                    </li>
                @endif
            </ul>

                @auth
                    <a href="{{ route('profil') }}" class="text-decoration-none">
                        <button class="btn btn-outline-dark d-flex align-items-center" type="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 17 18">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            {{ Auth::user()->name }}
                        </button>
                    </a>
                @else
                    @if(Route::is('connection'))
                        <a href="{{ route('register') }}" class="text-decoration-none">
                            <button class="btn btn-outline-dark d-flex align-items-center" type="#">
                                S'inscrire
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 17">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v-2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                </svg>
                            </button>
                        </a>
                    @else
                        <a href="{{ route('connection') }}" class="text-decoration-none">
                            <button class="btn btn-outline-dark d-flex align-items-center" type="#">
                                Se connecter
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 17">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v-2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                </svg>
                            </button>
                        </a>
                    @endif
                @endauth
        </div>
    </div>
</nav>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>

@yield('scripts')
