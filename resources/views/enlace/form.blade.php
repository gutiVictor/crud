<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('pagina_id') }}
            {{ Form::text('pagina_id', $enlace->pagina_id, ['class' => 'form-control' . ($errors->has('pagina_id') ? ' is-invalid' : ''), 'placeholder' => 'Pagina Id']) }}
            {!! $errors->first('pagina_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rol_id') }}
            {{ Form::text('rol_id', $enlace->rol_id, ['class' => 'form-control' . ($errors->has('rol_id') ? ' is-invalid' : ''), 'placeholder' => 'Rol Id']) }}
            {!! $errors->first('rol_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $enlace->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_creacion') }}
            {{ Form::text('fecha_creacion', $enlace->fecha_creacion, ['class' => 'form-control' . ($errors->has('fecha_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Creacion']) }}
            {!! $errors->first('fecha_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_modificacion') }}
            {{ Form::text('fecha_modificacion', $enlace->fecha_modificacion, ['class' => 'form-control' . ($errors->has('fecha_modificacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Modificacion']) }}
            {!! $errors->first('fecha_modificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_creacion') }}
            {{ Form::text('usuario_creacion', $enlace->usuario_creacion, ['class' => 'form-control' . ($errors->has('usuario_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Creacion']) }}
            {!! $errors->first('usuario_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_modificacion') }}
            {{ Form::text('usuario_modificacion', $enlace->usuario_modificacion, ['class' => 'form-control' . ($errors->has('usuario_modificacion') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Modificacion']) }}
            {!! $errors->first('usuario_modificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>