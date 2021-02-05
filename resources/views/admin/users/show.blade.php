@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Affichage de l'utilisateur
                <button class="btn btn-success btn-sm float-right" onclick="history.back();">retour</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong>Nom: </strong> <span>{{ $user->name }}</span>
                        </p>
                        <p>
                            <strong>E-mail: </strong> <span>{{ $user->email }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
