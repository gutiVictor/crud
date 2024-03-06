@extends('layouts.app')

@section('template_title')
    {{ $bitacora->name ?? __('Show') . " " . __('Bitacora') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bitacora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bitacoras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $bitacora->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $bitacora->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $bitacora->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Ip:</strong>
                            {{ $bitacora->ip }}
                        </div>
                        <div class="form-group">
                            <strong>So:</strong>
                            {{ $bitacora->so }}
                        </div>
                        <div class="form-group">
                            <strong>Navegador:</strong>
                            {{ $bitacora->navegador }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $bitacora->usuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
