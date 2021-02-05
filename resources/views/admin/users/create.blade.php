@extends('layouts/app')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Creer un utilisateur
                <button class="btn btn-success btn-sm float-right" onclick="history.back();">retour</button>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" name="name" id="name" placeholder="Entrer le nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Entrer l'adresse email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe:</label>
                        <input type="password" name="password" id="password" placeholder="Entrer le mot de passe" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Valider</button>
                        <button type="reset" class="btn btn-danger btn-sm">Vider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
