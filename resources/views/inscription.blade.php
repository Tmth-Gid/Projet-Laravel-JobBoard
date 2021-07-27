@extends('layout')

@section('content')
<div class="form-group mx-auto p-4 bg-info" >
    <form method='post'>
        @csrf

        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" placeholder="Nom" value="{{ old('nom')}}"><br>
        @if($errors->first('nom'))
            <p class='text-danger'>{{ $errors->first('nom') }}</p>
        @endif
        
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" name="prenom" placeholder="Prenom" value="{{ old('prenom')}}"><br>
        @if($errors->first('prenom'))
            <p class='text-danger'>{{ $errors->first('prenom') }}</p>
        @endif

        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email"><br>
        @if($errors->first('email'))
            <p class='text-danger'>{{ $errors->first('email') }}</p>
        @endif

        <label for="mdp">Mot de passe</label>
        <input type="password" class="form-control" name="password" placeholder="Mot de passe"><br>
        @if($errors->first('password'))
            <p class='text-danger'>{{ $errors->first('password') }}</p>
        @endif

        <label for="mdpConfirm">Confirmez</label>
        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmez mot de passe"><br>
        @if($errors->first('password_confirmation'))
            <p class='text-danger'>{{ $errors->first('password_confirmation') }}</p>
        @endif

        <input type="submit" class="form-control btn btn-dark w-50" value="M'inscrire">

    </form>
</div>

@endsection