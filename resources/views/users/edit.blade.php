@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Attention !</strong> Problème lors de la saisie.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nom :</strong>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Nom">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prenom :</strong>
                        <input type="text" name="prenom" value="{{ $user->prenom }}" class="form-control" placeholder="Prenom">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email :</strong>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Mot de passe :</strong>
                        <input type="password" name="password" value="{{ $user->password }}" class="form-control" placeholder="Mot de passe">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Délégué :</strong>
                        <input type="number" name="delegue"  value="{{ $user->delegue }}" class="form-control" placeholder="Délégué">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pilote :</strong>
                        <input type="number" name="pilote" value="{{ $user->pilote }}" class="form-control" placeholder="Pilote">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Admin :</strong>
                        <input type="number" name="admin" value="{{ $user->admin }}" class="form-control" placeholder="Admin">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Promotion :</strong>
                        <input type="number" name="id_promotion"  value="{{ $user->id_promotion }}" class="form-control" placeholder="Promotion">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Centre :</strong>
                        <input type="number" name="id_centre" value="{{ $user->id_centre }}" class="form-control" placeholder="Centre">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Modifier un utilisateur</button>
                </div>
            </div>

    </form>
@endsection
