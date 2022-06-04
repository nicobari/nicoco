<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Apellido y Nombre') }}
            {{ Form::text('nombre_cliente', $servicio->nombre_cliente, ['class' => 'form-control' . ($errors->has('nombre_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('nombre_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono cliente') }}
            {{ Form::text('telefono_cliente', $servicio->telefono_cliente, ['class' => 'form-control' . ($errors->has('telefono_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Cliente']) }}
            {!! $errors->first('telefono_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de equipo') }}
            {{ Form::text('tipo_producto', $servicio->tipo_producto, ['class' => 'form-control' . ($errors->has('tipo_producto') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Producto']) }}
            {!! $errors->first('tipo_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Falla') }}
            {{ Form::text('falla', $servicio->falla, ['class' => 'form-control' . ($errors->has('falla') ? ' is-invalid' : ''), 'placeholder' => 'Falla']) }}
            {!! $errors->first('falla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado de la reparación') }}
            {{ Form::text('estado_repa', $servicio->estado_repa, ['class' => 'form-control' . ($errors->has('estado_repa') ? ' is-invalid' : ''), 'placeholder' => 'Estado Repa']) }}
            {!! $errors->first('estado_repa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Presupuesto') }}
            {{ Form::text('presupuesto', $servicio->presupuesto, ['class' => 'form-control' . ($errors->has('presupuesto') ? ' is-invalid' : ''), 'placeholder' => 'Presupuesto']) }}
            {!! $errors->first('presupuesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('seña') }}
            {{ Form::text('senia', $servicio->senia, ['class' => 'form-control' . ($errors->has('senia') ? ' is-invalid' : ''), 'placeholder' => 'Senia']) }}
            {!! $errors->first('senia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observacion') }}
            {{ Form::text('observacion', $servicio->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => 'Observacion']) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
</div>
