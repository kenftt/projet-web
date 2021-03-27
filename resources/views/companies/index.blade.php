@extends('companies.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('create') }}"> Create new Company</a>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Secteur</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">NB stagiaire pris</th>
                        <th scope="col">Note stagiaire</th>
                        <th scope="col">Note pilote</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <th scope="row">{{ $company->id_ent }}</th>
                            <td>{{ $company->nom_ent }}</td>
                            <td>{{ $company->secteur_ent }}</td>
                            <td>{{ $company->adresse_ent }}</td>
                            <td>{{ $company->stagiaire_pris }}</td>
                            <td>{{ $company->note_stagiaire_ent }}</td>
                            <td>{{ $company->note_pilote_ent }}</td>
                            <td>
                                <form action="" method="POST">

                                    <a class="btn btn-info"
                                        href="{{ route('show', $company->id_ent) }}">Show</a>

                                    <a class="btn btn-primary"
                                        href="{{ route('edit', $company->id_ent) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $companies->links() }}
    @endsection
