@extends('layout')

@section('content')
    <h1>Utilisateurs</h1>

    <ul>
        @foreach($utilisateurs as $tulisateur)
            <li>{{ $tulisateur->email }}</li>
        @endforeach

    </ul>
    

@endsection
