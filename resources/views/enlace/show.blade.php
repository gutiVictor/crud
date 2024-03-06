@extends('layouts.app')

@section('template_title')
    {{ $enlace->name ?? __('Show') . " " . __('Enlace') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Enlace</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('enlaces.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pagina Id:</strong>
                            {{ $enlace->pagina_id }}
                        </div>
                        <div class="form-group">
                            <strong>Rol Id:</strong>
                            {{ $enlace->rol_id }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $enlace->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Creacion:</strong>
                            {{ $enlace->fecha_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Modificacion:</strong>
                            {{ $enlace->fecha_modificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Creacion:</strong>
                            {{ $enlace->usuario_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Modificacion:</strong>
                            {{ $enlace->usuario_modificacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
