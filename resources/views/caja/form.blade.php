<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('articulo') }}
            {{ Form::text('articulo', $caja->articulo, ['class' => 'form-control' . ($errors->has('articulo') ? ' is-invalid' : ''), 'placeholder' => 'Articulo']) }}
            {!! $errors->first('articulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidades') }}
            {{ Form::text('unidades', $caja->unidades, ['class' => 'form-control' . ($errors->has('unidades') ? ' is-invalid' : ''), 'placeholder' => 'Unidades']) }}
            {!! $errors->first('unidades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $caja->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>