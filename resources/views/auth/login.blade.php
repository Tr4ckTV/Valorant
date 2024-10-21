<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
            @endif
        </form>
    </div>
</div>
@endsection

<style>
/* Ajoute ton style ici si nécessaire */
body {
    background-color: #0d0d0d;
    color: #f2f2f2;
    font-family: "Arial", sans-serif;
    margin: 0;
    padding: 0;
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-box {
    background-color: #1a1a1a;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
    width: 400px;
    text-align: center;
}

.login-box h2 {
    color: #ff4655;
    margin-bottom: 1.5rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-control {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #333;
    border-radius: 5px;
    background-color: #262626;
    color: #f2f2f2;
}

.btn-primary {
    background-color: #ff4655;
    color: #fff;
    padding: 0.75rem 2rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #e03a49;
}

.invalid-feedback {
    color: #ff4655;
}
</style>
