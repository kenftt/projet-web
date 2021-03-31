@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('offers.index') }}"> Retour</a>
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

    <form action="{{ route('offers.update',$offer->id_offre) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duree du stage (en semaines):</strong>
                    <input type="text" name="duree_stage" value="{{ $offer->duree_stage }}" class="form-control" placeholder="Durée du stage (en semaines)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rénumeration :</strong>
                    <input type="text" name="renumeration" value="{{ $offer->renumeration }}" class="form-control" placeholder="Rénumeration">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lettre de motivation :</strong>
                    <input type="text" name="lm" value="{{ $offer->lm }}" class="form-control" placeholder="Lettre de motivation">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fiche de validation :</strong>
                    <input type="text" name="fiche_valid" value="{{ $offer->fiche_valid }}" class="form-control" placeholder="Fiche de validation">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Convention de stage :</strong>
                    <input type="text" name="convention_stage" value="{{ $offer->convention_stage }}" class="form-control" placeholder="Convention de stage">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre de places :</strong>
                    <input type="text" name="nb_place" value="{{ $offer->nb_place }}" class="form-control" placeholder="Nombre de places">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Compétence :</strong>
                    <input type="text" name="competence" value="{{ $offer->competence }}" class="form-control" placeholder="Compétence">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID ent :</strong>
                    <input type="text" name="id_ent" value="{{ $offer->id_ent }}" class="form-control" placeholder="Compétence">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
