@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit users</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                        <strong>Name :</strong>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Nom">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>prenom :</strong>
                        <input type="text" name="prenom" value="{{ $user->prenom }}" class="form-control" placeholder="prenom">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>email:</strong>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Adresse">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>password:</strong>
                        <input type="password" name="password" value="{{ $user->password }}" class="form-control" placeholder="password">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>delegue:</strong>
                        <input type="number" name="delegue"  value="{{ $user->delegue }}" class="form-control" placeholder="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>pilote:</strong>
                        <input type="number" name="pilote" value="{{ $user->pilote }}" class="form-control" placeholder="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>admin:</strong>
                        <input type="number" name="admin" value="{{ $user->admin }}" class="form-control" placeholder="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Promotion:</strong>
                        <input type="number" name="id_promotion"  value="{{ $user->id_promotion }}" class="form-control" placeholder="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>centre:</strong>
                        <input type="number" name="id_centre" value="{{ $user->id_centre }}" class="form-control" placeholder="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

    </form>
@endsection
