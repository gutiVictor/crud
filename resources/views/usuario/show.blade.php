@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? __('Show') . " " . __('Usuario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $usuario->persona_id }}
                        </div>
                        <div class="form-group">
                            <strong>Rol Id:</strong>
                            {{ $usuario->rol_id }}
                        </div>
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $usuario->clave }}
                        </div>
                        <div class="form-group">
                            <strong>Habilitado:</strong>
                            {{ $usuario->habilitado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $usuario->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Creacion:</strong>
                            {{ $usuario->fecha_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Creacion:</strong>
                            {{ $usuario->usuario_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Modificacion:</strong>
                            {{ $usuario->usuario_modificacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
