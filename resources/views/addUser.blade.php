@extends('layouts.app')

@include('layouts.navbar')

<div class="container custom-height-container">
    <div class="container rounded w-50 my-5 custom-margin-top d-flex flex-column justify-content-center custom-background-color">
        <form method="post" action="/pompier/add">
            @csrf
            <div class="mb-3 w-75 mt-4" style="margin-left: auto; margin-right: auto">
                <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prénom" name="Firstname">
            </div>
            <div class="mb-3 w-75 mt-4" style="margin-left: auto; margin-right: auto">
                <label for="exampleFormControlInput1" class="form-label">Nom</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom" name="Last">
            </div>
            <div class="mb-3 w-75 mt-4" style="margin-left: auto; margin-right: auto">
                <label for="exampleFormControlInput1" class="form-label">Mail</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Mail" name="Mail">
            </div>
            <div class="mb-3 w-75 mt-4" style="margin-left: auto; margin-right: auto">
                <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Mot de passe" name="Password">
            </div>
            <div class="mb-3 w-75 mt-4" style="margin-left: auto; margin-right: auto">
                <label for="exampleFormControlInput1" class="form-label">Confirmation de mot de passe</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Confirmation de mot de passe" name="ConfPassword">
            </div>
            <div class="mb-3 w-75 mt-4" style="margin-left: auto; margin-right: auto">
                <label for="exampleFormControlInput1" class="form-label">Role </label>
                <select class="form-select" id="exampleFormControlSelect1" name="ChefAgret">
                    <option value="Gestion">Gestion</option>
                    <option value="Client">Client</option>
                    <option value="N">N</option>
                </select>
            </div>

            <div class="mb-3 w-75 mt-4" style="margin-left: auto; margin-right: auto">
                <button type="submit" class="btn btn-dark mb-3 mt-3 bg-dark w-100">Ajouter</button>
            </div>
        </form>
    </div>
</div>

@include('layouts.footer')

