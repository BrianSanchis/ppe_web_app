@extends('layouts.app')

@include('layouts.navbar')

<div class="container custom-height-container custom-height-container my-5 d-flex flex-column align-items-center">
    <div class="btn-group mb-4" role="group" aria-label="Basic outlined example">
        <!-- <a href="/pompier/demande"><button type="button" class="btn btn-danger">Ajouter</button></a> -->
        <!--
        <a href="{{ route('ajout') }}" class="text-decoration-none">
            <button class="btn bg-dark d-flex align-items-center text-light" type="button">
                Ajouter
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </button>
        </a>
        -->
    </div>
    <table class="table table-striped" style="width: 140%">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Date de creation</th>
            <th scope="col">Rôles</th>
            <!--<th scope="col">Actions</th>-->
        </tr>
        </thead>
        <tbody>
        @foreach ($utilisateurs as $utilisateur)
            <tr>
                <th scope="row">{{10 * ($utilisateurs->currentPage() - 1) + $loop->iteration}}</th>
                <td>{{$utilisateur->name}}</td>
                <td>{{$utilisateur->email}}</td>
                <td>{{$utilisateur->created_at}}</td>
                <td>
                    @foreach ($utilisateur->roles as $role)
                        <span class="badge bg-primary">{{ $role->name }}</span>
                    @endforeach
                </td>
                <!--
                <td>
                    <div class="btn-group gap-1" role="group" aria-label="Basic mixed styles example">
                        <a href="#"><button type="button" class="btn bg-success">Afficher</button></a>
                        <a href="/pompier/update/"><button type="button" class="btn bg-warning">Modifier</button></a>
                        <a href="#"><button type="button" class="btn bg-danger">Supprimer</button></a>
                    </div>
                </td>
                -->
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="container w-100 d-flex justify-content-center">
        {{$utilisateurs->links()}}
    </div>
</div>

@include('layouts.footer')
