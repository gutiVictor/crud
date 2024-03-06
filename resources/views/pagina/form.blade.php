<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_creacion') }}
            {{ Form::text('fecha_creacion', $pagina->fecha_creacion, ['class' => 'form-control' . ($errors->has('fecha_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Creacion']) }}
            {!! $errors->first('fecha_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_modificacion') }}
            {{ Form::text('fecha_modificacion', $pagina->fecha_modificacion, ['class' => 'form-control' . ($errors->has('fecha_modificacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Modificacion']) }}
            {!! $errors->first('fecha_modificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_creacion') }}
            {{ Form::text('usuario_creacion', $pagina->usuario_creacion, ['class' => 'form-control' . ($errors->has('usuario_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Creacion']) }}
            {!! $errors->first('usuario_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_modificacion') }}
            {{ Form::text('usuario_modificacion', $pagina->usuario_modificacion, ['class' => 'form-control' . ($errors->has('usuario_modificacion') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Modificacion']) }}
            {!! $errors->first('usuario_modificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $pagina->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $pagina->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('url', $pagina->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('icono') }}
            {{ Form::text('icono', $pagina->icono, ['class' => 'form-control' . ($errors->has('icono') ? ' is-invalid' : ''), 'placeholder' => 'Icono']) }}
            {!! $errors->first('icono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $pagina->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>