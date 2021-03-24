@extends('app')

@section('title', 'A propos | '. config('app.name'))

@section('content')
    <p><a href="{{ route ('offre')}}">Revenir à la page d'accueil</a></p>
@endsection
