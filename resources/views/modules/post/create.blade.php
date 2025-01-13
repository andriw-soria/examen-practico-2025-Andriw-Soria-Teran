@extends('layouts/main')

<div class="container mt-4">
    <h2>AGREGAR NUEVO POST</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        @method('post') 
                        <label for="name">Escribe el nombre del Post</label>
                        <input type="text" name='name' id='name' class="form-control" required>

                        <label for="name">Escriba el Titulo</label>
                        <input type="text" name='tittle' id='tittle' class="form-control" required>

                        <label for="name">Escriba el Contenido</label>
                        <input type="text" name='content' id='content' class="form-control" required>

                        <label for="name">Seleccione el Estado</label>
                        <select name="status" id="status" class="form-control">
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>

                        <button class="btn btn-primary mt-3">Agregar</button>
                        <a href="{{ route('index' )}}" class="btn btn-danger mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>