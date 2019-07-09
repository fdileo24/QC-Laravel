@extends('layouts.main')
@section('content')

<div class="login">
    <form class="text-center border border-0 p-5 col-md-4  center_div__ " method="POST" action="{{ route('register') }}">   
        @csrf
        <p class="h4 mb-5 pt-5 text-white">Sign up</p>
        <!-- Usuario -->
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>
        <!-- E-mail -->
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>
        <!-- Password -->
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
        <br>
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-white mb-4 ">
          Por lo menos 7 caracteres y un numero.
        </small>
        <!-- Botom -->
        <button class="btn btn-info my-4 btn-block " type="submit">Registrate!</button>
        <hr>
        <!--ToS -->
        <p class="text-white">Haciendo click en 
            <em>Registrate</em> estas de acuerdo con nuestros
            <a href="" target="_blank" >Terminos y condiciones</a></p>

    </form>
  </div>
  @endsection
