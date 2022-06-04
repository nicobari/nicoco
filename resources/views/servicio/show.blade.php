@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? 'Show Servicio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre Cliente:</strong>
                            {{ $servicio->nombre_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono Cliente:</strong>
                            {{ $servicio->telefono_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Producto:</strong>
                            {{ $servicio->tipo_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Falla:</strong>
                            {{ $servicio->falla }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Repa:</strong>
                            {{ $servicio->estado_repa }}
                        </div>
                        <div class="form-group">
                            <strong>Presupuesto:</strong>
                            {{ $servicio->presupuesto }}
                        </div>
                        <div class="form-group">
                            <strong>Seña:</strong>
                            {{ $servicio->senia }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $servicio->observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Ingreso:</strong>
                            {{ $servicio->created_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
