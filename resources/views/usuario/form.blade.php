<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('persona_id') }}
            {{ Form::text('persona_id', $usuario->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => 'Persona Id']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rol_id') }}
            {{ Form::text('rol_id', $usuario->rol_id, ['class' => 'form-control' . ($errors->has('rol_id') ? ' is-invalid' : ''), 'placeholder' => 'Rol Id']) }}
            {!! $errors->first('rol_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave') }}
            {{ Form::text('clave', $usuario->clave, ['class' => 'form-control' . ($errors->has('clave') ? ' is-invalid' : ''), 'placeholder' => 'Clave']) }}
            {!! $errors->first('clave', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habilitado') }}
            {{ Form::text('habilitado', $usuario->habilitado, ['class' => 'form-control' . ($errors->has('habilitado') ? ' is-invalid' : ''), 'placeholder' => 'Habilitado']) }}
            {!! $errors->first('habilitado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $usuario->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_creacion') }}
            {{ Form::text('fecha_creacion', $usuario->fecha_creacion, ['class' => 'form-control' . ($errors->has('fecha_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Creacion']) }}
            {!! $errors->first('fecha_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_creacion') }}
            {{ Form::text('usuario_creacion', $usuario->usuario_creacion, ['class' => 'form-control' . ($errors->has('usuario_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Creacion']) }}
            {!! $errors->first('usuario_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_modificacion') }}
            {{ Form::text('usuario_modificacion', $usuario->usuario_modificacion, ['class' => 'form-control' . ($errors->has('usuario_modificacion') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Modificacion']) }}
            {!! $errors->first('usuario_modificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>