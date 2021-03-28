@extends('users.layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
<h1>All the users</h1>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Email</td>
            <td>password</td>
            <td>delegue</td>
            <td>pilote</td>
            <td>centre</td>
            <td>promotion</td>

        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->delegue }}</td>
            <td>{{ $user->pilote }}</td>
            <td>{{ $user->id_centre }}</td>
            <td>{{ $user->id_promotion }}</td>
            <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </tr>
    @endforeach

    </tbody>
</table>

</div>
@endsection
