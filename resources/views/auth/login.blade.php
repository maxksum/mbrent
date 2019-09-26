@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card card-login mx-auto mt-5">
    <div class="card-header">Администрирование</div>
    <div class="card-body">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <div class="form-label-group">
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <label for="inputEmail">Логин</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <label for="inputPassword">Пароль</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary">
            {{ __('Войти') }}
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
