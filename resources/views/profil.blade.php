@extends('layouts.app')

@include('layouts.navbar')

<div class="container custom-height-container rounded w-25 my-5 d-flex flex-column justify-content-center custom-background-color">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="w-100 mt-4 d-flex justify-content-center" style="padding-bottom: -50px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="85" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </div>
        <div class="mb-3 w-75 mt-4" style="margin-left: auto; margin-right: auto">
            <label for="exampleFormControlInput1" class="form-label">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom d'utilisateur" name="username" value="{{ Auth::user()->name }}" disabled>
        </div>
        <div class="mb-3 w-75" style="margin-left: auto; margin-right: auto">
            <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Mot de passe" name="password" disabled>
        </div>
        <div class="mb-3 w-75" style="margin-left: auto; margin-right: auto">
            <label for="exampleFormControlInput1" class="form-label">Confirmation du mot de passe</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirmation du mot de passe" name="confPassword" disabled>
        </div>
        <div class="col-auto mb-3 w-75" style="margin-left: auto; margin-right: auto">
            <button type="submit" class="btn btn-dark mb-3 mt-3 bg-dark w-100">Se deconnecter</button>
        </div>
    </form>
</div>

@include('layouts.footer')

