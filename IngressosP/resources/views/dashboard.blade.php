<x-app-layout>
@extends('site.layout')
@section('content')

    <li class="nav-item active {{ (Route::current()->getName() === 'home' ? ' active' : '') }}">
        <a class="nav-link" href="{{ route('site.home') }}">Home</a>
    </li>

    <li class="nav-item active {{ (Route::current()->getName() === 'artistasmanager' ? ' active' : '') }}">
        <a class="nav-link" href="{{ route('artistasmanager.index') }}">Artistas Manager</a>
    </li>

    <li class="nav-item active {{ (Route::current()->getName() === 'contatosmanager' ? ' active' : '') }}">
        <a class="nav-link" href="{{ route('contatosmanager.index') }}">Contatos Manager</a>
    </li>

    <li class="nav-item active {{ (Route::current()->getName() === 'showsmanager' ? ' active' : '') }}">
        <a class="nav-link" href="{{ route('showsmanager.index') }}">Shows Manager</a>
    </li>
</x-app-layout>
@endsection