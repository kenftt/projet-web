@extends('companies.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Article</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Topic:</strong>
                {{ $company->nom_ent }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $company->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie:</strong>
                {{ $company->categorie }}
            </div>
        </div>
    </div>

@endsection
