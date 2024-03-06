@extends('layouts.app')

@section('template_title')
    Pagina
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pagina') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('paginas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha Creacion</th>
										<th>Fecha Modificacion</th>
										<th>Usuario Creacion</th>
										<th>Usuario Modificacion</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Url</th>
										<th>Icono</th>
										<th>Tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paginas as $pagina)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pagina->fecha_creacion }}</td>
											<td>{{ $pagina->fecha_modificacion }}</td>
											<td>{{ $pagina->usuario_creacion }}</td>
											<td>{{ $pagina->usuario_modificacion }}</td>
											<td>{{ $pagina->nombre }}</td>
											<td>{{ $pagina->descripcion }}</td>
											<td>{{ $pagina->url }}</td>
											<td>{{ $pagina->icono }}</td>
											<td>{{ $pagina->tipo }}</td>

                                            <td>
                                                <form action="{{ route('paginas.destroy',$pagina->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('paginas.show',$pagina->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('paginas.edit',$pagina->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $paginas->links() !!}
            </div>
        </div>
    </div>
@endsection
