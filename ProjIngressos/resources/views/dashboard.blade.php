<x-app-layout>    
@extends('site.layout')
@section('content')
    
                <li class="nav-item active {{ (Route::current()->getName() === 'contatosmanager' ? ' active' : '') }}">
                    <a class="nav-link" href="{{ route('artistasmanager.index') }}">ContatosManager</a>
                </li>

                <li class="nav-item active {{ (Route::current()->getName() === 'contatosmanager' ? ' active' : '') }}">
                    <a class="nav-link" href="{{ route('artistasmanager.index') }}">ArtistasManager</a>
                </li>

</x-app-layout>
@endsection