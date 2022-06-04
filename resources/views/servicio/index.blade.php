@extends('layouts.app')

@section('template_title')
    Servicios tecnicos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Servicios Tecnicos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('servicios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Servicio') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Nro</th>

										<th>Nombre Cliente</th>
										<th>Telefono</th>
										<th>Equipo</th>
										<th>Falla</th>
										<th>Estado Repa</th>
										<th>Presupuesto</th>
										<th>Seña</th>
										<th>Ingreso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicios as $servicio)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $servicio->nombre_cliente }}</td>
											<td>{{ $servicio->telefono_cliente }}</td>
											<td>{{ $servicio->tipo_producto }}</td>
											<td>{{ $servicio->falla }}</td>
											<td>{{ $servicio->estado_repa }}</td>
											<td>{{ $servicio->presupuesto }}</td>
											<td>{{ $servicio->senia }}</td>
											<td>{{ $servicio->created_at}}</td>

                                            <td>
                                                <form action="{{ route('servicios.destroy',$servicio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('servicios.show',$servicio->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('servicios.edit',$servicio->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $servicios->links() !!}
            </div>
        </div>
    </div>
@endsection
