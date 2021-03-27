@extends('companies.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check your fields<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('show') }}" method="GET">
        @csrf
        <div class="form-group">
            <label for="topic">Nom entreprise</label>
            <input type="text" class="form-control" placeholder="Enter Company" name="nom_ent">
        </div>
        <div class="form-group">
            <label for="topic">Secteur entreprise</label>
            <input type="text" class="form-control" placeholder="Enter Sector" name="secteur_ent">
        </div>
        <div class="form-group">
            <label for="topic">Adresse entrprise</label>
            <input type="text" class="form-control" placeholder="Enter adress" name="adress_ent">
        </div>
        <div class="form-group">
            <label for="topic">NB Stagiaire pris</label>
            <input type="text" class="form-control" placeholder="Enter nb stagiairre" name="stagiare_pris">
        </div>
        <div class="form-group">
            <label for="topic">Topic title</label>
            <input type="text" class="form-control" placeholder="Enter Topic" name="note_stagiare_ent">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" rows="3" placeholer="Enter description" name="note_pilote_ent"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
