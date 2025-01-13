@extends('layouts/main')

<div class="container mt-4">
    <h2>INFORMACIÓN DEL POST - {{ $item->name }} </h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm table-striped text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Titulo</th>
                                <th>Contenido</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{ $item->id }}</th>
                                <th>{{ $item->tittle }}</th>
                                <th>{{ $item->content }}</th>
                                <th>{{ $item->status }}</th>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('index') }}" class="btn btn-primary mt-4">Volver a lista de Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>