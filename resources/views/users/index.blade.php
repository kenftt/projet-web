@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Créer un nouvel utilisateur</a>
            </div>

            <div>
                <div class="mx-auto pull-right">
                    <div class="">
                        <form action="{{ route('users.index') }}" method="GET" role="search">
                            <div class="input-group">
                                <button class="btn btn-info" type="submit" title="Rechercher un utilisateur">
                                    <span class="fas fa-search"></span>
                                </button>
                                <a href="{{ route('users.index') }}" class="">
                                    <button class="btn btn-danger" type="button" title="Rafraichir les données">
                                        <span class="fas fa-sync-alt"></span>
                                    </button>
                                </a>
                                <input type="text" class="form-control mr-2" name="nomRecherche"
                                    placeholder="Rechercher un utilisateur" id="nomRecherche">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <td>No</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Email</td>
                    <td>Mot de passe</td>
                    <td>Délégué</td>
                    <td>Pilote</td>
                    <td>Admin</td>
                    <td>Centre</td>
                    <td>Promotion</td>
                    <th width="280px">Action</th>

                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->delegue }}</td>
                        <td>{{ $user->pilote }}</td>
                        <td>{{ $user->admin }}</td>
                        <td>{{ $user->id_centre }}</td>
                        <td>{{ $user->id_promotion }}</td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                                <a href="{{ route('users.show', $user->id) }}" title="show">
                                    <i class="fas fa-eye text-success  fa-lg"></i>

                                    <a href="{{ route('users.edit', $user->id) }}">
                                        <i class="fas fa-edit  fa-lg"></i>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" title="delete"
                                            style="border: none; background-color:transparent;">
                                            <i class="fas fa-trash fa-lg text-danger"></i>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

        @endsection
