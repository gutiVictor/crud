<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('primer_name') }}
            {{ Form::text('primer_name', $persona->primer_name, ['class' => 'form-control' . ($errors->has('primer_name') ? ' is-invalid' : ''), 'placeholder' => 'Primer Name']) }}
            {!! $errors->first('primer_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_name') }}
            {{ Form::text('segundo_name', $persona->segundo_name, ['class' => 'form-control' . ($errors->has('segundo_name') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Name']) }}
            {!! $errors->first('segundo_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_apellido') }}
            {{ Form::text('primer_apellido', $persona->primer_apellido, ['class' => 'form-control' . ($errors->has('primer_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
            {!! $errors->first('primer_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_creacion') }}
            {{ Form::text('fecha_creacion', $persona->fecha_creacion, ['class' => 'form-control' . ($errors->has('fecha_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Creacion']) }}
            {!! $errors->first('fecha_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_modificacion') }}
            {{ Form::text('fecha_modificacion', $persona->fecha_modificacion, ['class' => 'form-control' . ($errors->has('fecha_modificacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Modificacion']) }}
            {!! $errors->first('fecha_modificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_creacion') }}
            {{ Form::text('usuario_creacion', $persona->usuario_creacion, ['class' => 'form-control' . ($errors->has('usuario_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Creacion']) }}
            {!! $errors->first('usuario_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_modificacion') }}
            {{ Form::text('usuario_modificacion', $persona->usuario_modificacion, ['class' => 'form-control' . ($errors->has('usuario_modificacion') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Modificacion']) }}
            {!! $errors->first('usuario_modificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>