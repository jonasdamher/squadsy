@extends('layouts.dashboard',['view'=>'table'])

@section('title', 'Categorías')
@section('btn-create', 'Añadir categoría')
@section('btn-create-url', 'categories/new')

@section('navbar-table')
    {{-- search --}}
    <form class="form-search col-md-4">
        <div class="form-group d-flex m-0">
            <button type="button" class="btn " title="Buscar"><i class="fas fa-search"></i></button>
            <label for="search" class="sr-only">Búsqueda</label>
            <input type="search" class="form-control mx-1" id="search" name="search" placeholder="Buscar...">
        </div>
    </form>
@endSection

@section('navbar-table-options')
    
@endSection

@section('table')
    <thead>
        <tr>
            <th scope="col" class="border-top-0">Nombre</th>
             <th scope="col" class="border-top-0">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">TPV</th>
            <td>
                <a class="btn" href="#"><i class="fas fa-eye"></i></a>
                <a class="btn" href="#"><i class="fas fa-pen"></i></a>
                <button class="btn" type="button"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
    </tbody>
@endSection
