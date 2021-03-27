@extends('companies.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Company</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check your fields.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<form action="{{ route('index',$company->id_ent) }}" method="GET">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="topic">Nom</label>
    <input type="text" class="form-control" value="{{ $company->nom_ent }}" placeholder="Enter Topic" name ="nom_ent">
  </div>
  <div class="form-group">
    <label for="topic">Topic title</label>
    <input type="text" class="form-control" value="{{ $company->secteur_ent }}" placeholder="Enter Topic" name ="nom_ent">
  </div>
  <div class="form-group">
    <label for="topic">Topic title</label>
    <input type="text" class="form-control" value="{{ $company->adresse_ent }}" placeholder="Enter Topic" name ="nom_ent">
  </div>
  <div class="form-group">
    <label for="topic">Topic title</label>
    <input type="text" class="form-control" value="{{ $company->stagiaire_ent }}" placeholder="Enter Topic" name ="nom_ent">
  </div>
  <div class="form-group">
    <label for="topic">Topic title</label>
    <input type="text" class="form-control" value="{{ $company->note_stagiare_ent }}" placeholder="Enter Topic" name ="nom_ent">
  </div>
  <div class="form-group">
    <label for="topic">Topic title</label>
    <input type="text" class="form-control" value="{{ $company->note_pilote_ent }}" placeholder="Enter Topic" name ="nom_ent">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
