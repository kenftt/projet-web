@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ config('app.name') }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('offers.create') }}"> Créer une nouvelle offre</a>
            </div>
        </div>
    </div>

    <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('offers.index') }}" method="GET" role="search">
                    <div class="input-group">
                        <button class="btn btn-info" type="submit" title="Rechercher une offre">
                            <span class="fas fa-search"></span>
                        </button>
                        <a href="{{ route('offers.index') }}" class="">
                            <button class="btn btn-danger" type="button" title="Rafraichir les données">
                                <span class="fas fa-sync-alt"></span>
                            </button>
                        </a>
                        <input type="text" class="form-control mr-2" name="term"
                            placeholder="Rechercher une offre" id="term">
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
            <th>N°</th>
            <th>Duree du stage (en semaines)</th>
            <th>Rénumeration</th>
            <th>Lettre de motivation</th>
            <th>Fiche de validation</th>
            <th>Convention de stage</th>
            <th>Nombre de places</th>
            <th>Compétence</th>
            <th>ID ent</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($offers as $offer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $offer->duree_stage }}</td>
            <td>{{ $offer->renumeration }}</td>
            <td>{{ $offer->lm }}</td>
            <td>{{ $offer->fiche_valid }}</td>
            <td>{{ $offer->convention_stage }}</td>
            <td>{{ $offer->nb_place }}</td>
            <td>{{ $offer->competence }}</td>
            <td>{{ $offer->id_ent }}</td>
            <td>
                <form action="{{ route('offers.destroy',$offer->id_offre) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('offers.show',$offer->id_offre) }}">Voir</a>

                    <a class="btn btn-primary" href="{{ route('offers.edit',$offer->id_offre) }}">Modifier</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
