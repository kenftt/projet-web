@extends('app')



@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Menu administrateur Entreprise</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('companies.create') }}"> Créer une nouvelle entreprise</a>
            </div>

            <div>
                <div class="mx-auto pull-right">
                    <div class="">
                        <form action="{{ route('companies.index') }}" method="GET" role="search">
                            <div class="input-group">
                                <button class="btn btn-info" type="submit" title="Rechercher une entreprise">
                                    <span class="fas fa-search"></span>
                                </button>
                                <a href="{{ route('companies.index') }}" class="">
                                    <button class="btn btn-danger" type="button" title="Rafraichir la page">
                                        <span class="fas fa-sync-alt"></span>
                                    </button>
                                </a>
                                <input type="text" class="form-control mr-2" name="term"
                                    placeholder="Rechercher une entreprise" id="term">
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
                    <th>No</th>
                    <th>Nom entreprise</th>
                    <th>Secteur</th>
                    <th>Adresse</th>
                    <th>Nombre de stagiaire pris</th>
                    <th>Note stagiaire</th>
                    <th>Note pilote</th>
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
                            <form action="{{ route('companies.destroy', $company->id_ent) }}" method="POST">

                                <a href="{{ route('companies.show', $company->id_ent) }}" title="show">
                                    <i class="fas fa-eye text-success  fa-lg"></i>

                                    <a href="{{ route('companies.edit', $company->id_ent) }}">
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
            {!! $companies->links() !!}

        @endsection
