@extends('adminlte::auth.passwords.email')

@section('password_email_url', route('password.email'))
@section('login_url', route('login'))
@section('register_url', route('register'))
