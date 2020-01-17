@extends('layouts.app')

@section('content')
<div class="login">
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <label for="username">{{ __('Username') }}</label>
            <input id="username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
    </form>
</div>
@endsection