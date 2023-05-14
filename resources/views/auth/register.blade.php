@extends('layouts.app')
<title>Log in - Sign Up</title>
@section('content')
<div class="container" id="container">
<div class="card-body">
          <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <h1>Create Account</h1>
              <input type="text" placeholder="Name" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus />
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <input type="email" placeholder="Email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" />
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <input type="password" placeholder="Password" name="password" class="@error('password') is-invalid @enderror" required autocomplete="new-password" />
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <input type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" />
              <button type="submit">Sign Up</button>
            </form>
          </div>
        </div>
      <div class="form-container sign-in-container">
          <form method="POST" action="{{ route('login') }}">
              @csrf
              <h1>Sign in</h1>
              <input type="email" placeholder="Email" name="email" />
              @error('email')
                  <div class="alert">{{ $message }}</div>
              @enderror
              <input type="password" placeholder="Password" name="password" />
              @error('password')
                  <div class="alert">{{ $message }}</div>
              @enderror
              <a href="#">Forgot your password?</a>
              <button type="submit">Sign In</button>
          </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
@endsection
