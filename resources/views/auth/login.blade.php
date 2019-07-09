@extends('layouts.main')
@section('content')

<div class="login">
    <form class="text-center border border-0 p-5 col-md-4  center_div__ " method="POST" action="{{ route('login') }}">
        @csrf
      <br><br><br>  
        <p class="h4 mb-4 text-white">Login!</p>       
        <!-- Usuario -->
        <input type="email" id="email" class="form-control mb-4 @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!-- Password -->
        <input type="password" id="password" class="form-control mb-4 @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!-- Remember -->
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <br>
        <label class="form-check-label text-white mb-4" for="defaultCheck1">Remember me!</label>
        <!-- Botom -->
        <button class="btn btn-info my-4 btn-block " type="submit">Logeate!</button>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
  </div>
@endsection
