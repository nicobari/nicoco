@extends('layouts.app')

@section('template_title')
    {{ $caja->name ?? 'Show Caja' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Caja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cajas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Articulo:</strong>
                            {{ $caja->articulo }}
                        </div>
                        <div class="form-group">
                            <strong>Unidades:</strong>
                            {{ $caja->unidades }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $caja->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
