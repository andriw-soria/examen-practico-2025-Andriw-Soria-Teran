@extends('layouts/main')

@section('content')


    <div class="container mt-4">
        <h2>APP NOTICIAS - 2025</h2>
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('create')}}" class="btn btn-primary">
                            <i class="fa-solid fa-circle-plus"></i> Agregar Noticia
                        </a>

                        <hr>

                        <table class="table table-sm table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Titulo</th>
                                    <th>Contenido</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- No es necesario mostrar toda la informacion, ya que se encarga la ruta show --}}
                                @forelse ($items as $item)
                                <tr>
                                    {{-- Hide al Id --}}
                                    <td>{{ $item->id }}</td> 
                                    <td>{{ $item->tittle }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td> 
                                        <form action="{{ route( 'destroy', $item->id ) }}" method="post" class="">
                                            @csrf
                                            @method('UPDATE')

                                            <a class="btn btn-info" href="{{ route('show', $item->id) }}">
                                                <i class="fa-solid fa-rectangle-list"></i> Mostrar
                                            </a>
                                            <a class="btn btn-warning" href="{{ route('edit', $item->id) }}">
                                                <i class="fa-solid fa-pen-to-square"></i> Editar
                                            </a>
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i> Dar de Baja
                                            </button> 
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No hay registros</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end">
                            {{ $items->links() }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection