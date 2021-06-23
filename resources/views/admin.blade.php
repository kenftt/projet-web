<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page administrateur') }}
        </h2>
        <h2>{{ Auth::user()->name }}</h2>
        <h3>{{ Auth::user()->role}}</h3>
    </x-slot>

    <!-- Side navigation -->


    <div class="sidenav">
        <a href="users" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Editer un profil</a>
        <a href="companies" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Editer une
            entreprise</a>
        <a href="offers" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Editer une offre</a>

    </div>

    <div class="main">

    </div>

</x-app-layout>
