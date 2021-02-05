@extends('layouts/app')


@section('content')
    <div class="container">
        @can('crud-users')
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm mb-2 float-lg-right">Creer +</a>
        @endcan
        <table class="table text-center table-bordered">
            <thead>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ implode(', ', $user->roles->pluck('name')->toArray()) }}</td>
                    <td>
                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary btn-sm">Voir</a>
                        @can('crud-users')
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-success btn-sm">Modifier</a>
                        @endcan

                        @can('crud-users')
                        <form class="d-inline" action="{{ route('admin.users.destroy', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
