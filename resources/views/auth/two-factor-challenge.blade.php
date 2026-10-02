@extends('adminlte::auth.auth-page', ['authType' => 'login'])

@section('auth_header', 'Verifikasi dua langkah')

@section('auth_body')
    <form method="POST" action="{{ route('two-factor.login.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="code">Kode autentikasi</label>
            <input class="form-control @error('code') is-invalid @enderror" id="code" name="code" type="text" inputmode="numeric" autocomplete="one-time-code">
            @error('code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="recovery_code">Kode pemulihan</label>
            <input class="form-control @error('recovery_code') is-invalid @enderror" id="recovery_code" name="recovery_code" type="text" autocomplete="one-time-code">
            @error('recovery_code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary w-100" type="submit">Verifikasi</button>
    </form>
@stop
