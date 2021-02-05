@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Modifier l'utilisateur
                <button class="btn btn-success btn-sm float-right" onclick="history.back();">retour</button>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.update', $user) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    @foreach ($roles as $role)
                        <div class="form-group">
                            <input type="checkbox" value="{{ $role->id }}" name="roles[]" id="{{ $role->id }}" @foreach($user->roles as $userRole) @if($userRole->id === $role->id) checked @endif @endforeach>
                            <label for="{{ $role->id }}" class="form-check-label">{{ $role->name }}</label>
                        </div>
                    @endforeach

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Modifier</button>
                        <button type="reset" class="btn btn-danger btn-sm">Vider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
