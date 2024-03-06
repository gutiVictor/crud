@extends('layouts.app')

@section('template_title')
    {{ $pagina->name ?? __('Show') . " " . __('Pagina') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pagina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paginas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Creacion:</strong>
                            {{ $pagina->fecha_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Modificacion:</strong>
                            {{ $pagina->fecha_modificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Creacion:</strong>
                            {{ $pagina->usuario_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Modificacion:</strong>
                            {{ $pagina->usuario_modificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pagina->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $pagina->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $pagina->url }}
                        </div>
                        <div class="form-group">
                            <strong>Icono:</strong>
                            {{ $pagina->icono }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $pagina->tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
