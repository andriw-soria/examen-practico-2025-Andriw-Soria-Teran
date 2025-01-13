@extends('layouts/main')

<div class="container mt-4">
    <h2>ACTUALIZAR POST</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action=" {{ route( 'update', $item->id ) }} " method="post">
                        @csrf
                        @method('PUT') 

                        <label for="name">Escribe el nombre del Post</label>
                        <input type="text" name='name' id='name' class="form-control" required value="{{ $item->name }}>

                        <label for="name">Escriba el Titulo</label>
                        <input type="text" name='tittle' id='tittle' class="form-control" required value="{{ $item->tittle }}>

                        <label for="name">Escriba el Contenido</label>
                        <input type="text" name='content' id='content' class="form-control" required value="{{ $item->content }}>

                        <label for="name">Seleccione el Estado</label>
                        <select name="status" id="status" class="form-control" value="{{ $item->status }}">
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>

                        <button class="btn btn-warning mt-3">Actualizar</button>
                        <a href="{{ route('index' )}}" class="btn btn-danger mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>