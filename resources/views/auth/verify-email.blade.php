@extends('adminlte::auth.auth-page', ['authType' => 'login'])

@section('auth_header', 'Verifikasi email')

@section('auth_body')
    @if ($status)
        <div class="alert alert-success" role="status">{{ $status }}</div>
    @endif

    <p>Periksa kotak masuk email Anda untuk tautan verifikasi.</p>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button class="btn btn-primary w-100" type="submit">Kirim ulang tautan verifikasi</button>
    </form>
@stop
