@extends('companies.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('companies.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $company->nom_ent }}</td>
            <td>{{ $company->secteur_ent }}</td>
            <td>{{ $company->adresse_ent }}</td>
            <td>{{ $company->stagiaire_pris }}</td>
            <td>{{ $company->note_stagiaire_ent }}</td>
            <td>{{ $company->note_pilote_ent }}</td>
            <td>
                <form action="{{ route('companies.destroy',$company->id_ent) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('companies.show',$company->id_ent) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('companies.edit',$company->id_ent) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
