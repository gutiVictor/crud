@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? __('Show') . " " . __('Persona') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Primer Name:</strong>
                            {{ $persona->primer_name }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Name:</strong>
                            {{ $persona->segundo_name }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $persona->primer_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Creacion:</strong>
                            {{ $persona->fecha_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Modificacion:</strong>
                            {{ $persona->fecha_modificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Creacion:</strong>
                            {{ $persona->usuario_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Modificacion:</strong>
                            {{ $persona->usuario_modificacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
