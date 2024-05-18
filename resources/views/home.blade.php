@extends('layouts.app')

@section('title', 'Pagama$')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mb-4">Menú Principal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg mb-4">
                    <div class="card-body p-5">
                        <h5 class="card-title text-center mb-4">Menú</h5>
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('clientes') ? 'active' : '' }}" href="/clientes">Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('rutas') ? 'active' : '' }}" href="/rutas">Rutas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('informes') ? 'active' : '' }}" href="/informes">Informes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('administracion') ? 'active' : '' }}" href="/administracion">Administración</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @yield('menu_content')
            </div>
        </div>
    </div>
@endsection
