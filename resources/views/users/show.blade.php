@extends('app')

@section('content')
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        {{ $user->id }}
      </h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">
        Date de creation : {{date_format($user->created_at, 'j/m/Y')}}
      </p>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">
        Dernière modification : {{date_format($user->updated_at, 'j/m/Y')}}
      </p>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Nom
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$user->name}}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Prénom
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$user->prenom}}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Email
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$user->email}}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Mot de passe
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$user->password}}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Délégué
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$user->delegue}}
          </dd>
        </div>
        <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
              Pilote
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{$user->pilote}}
            </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
              Admin
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{$$user->admin}}
            </dd>
        </div>
        <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
              Centre
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{$$user->id_centre}}
            </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
              Promotion
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{$$user->id_promotion}}
            </dd>
        </div>
      </dl>
    </div>
  </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Retour</a>
        </div>
    </div>
@endsection
