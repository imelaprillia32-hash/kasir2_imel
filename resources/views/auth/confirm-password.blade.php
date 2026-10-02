@extends('adminlte::auth.auth-page', ['authType' => 'login'])

@section('auth_header', 'Konfirmasi kata sandi')

@section('auth_body')
    <p>Masukkan kata sandi untuk melanjutkan.</p>

    <form method="POST" action="{{ route('password.confirm.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="password">Kata sandi</label>
            <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" required autocomplete="current-password" autofocus>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary w-100" type="submit">Konfirmasi</button>
    </form>
@stop
