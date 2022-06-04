@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <nav class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="./servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./products">Articulos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./cajas">Caja</a>
                </li>
            </nav>
            <div class="card">
                <div class="card-header">BIENVENIDOS AL SISTEMA ADMINISTRATIVO</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
