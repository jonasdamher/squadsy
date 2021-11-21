@extends('layouts.dashboard',['view'=>'table'])

@section('title', 'Artículos')
@section('btn-create', 'Añadir artículo')
@section('btn-create-url', 'articles/new')

@section('navbar-table')
    {{-- search --}}
    <form class="form-search col-md-4">
        <div class="form-group d-flex m-0">
            <button type="button" class="btn " title="Buscar"><i class="fas fa-search"></i></button>
            <label for="search" class="sr-only">Búsqueda</label>
            <input type="search" class="form-control mx-1" id="search" name="search" placeholder="Buscar...">
            {{-- filters --}}
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="filtros" data-bs-toggle="dropdown"
                    aria-expanded="false" title="Filtros">
                    <i class="fas fa-sliders-h"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="filtros">
                    <li>
                        <button class="dropdown-item" type="button">Categorías</button>
                    </li>
                </ul>
            </div>
        </div>
    </form>
@endSection

@section('navbar-table-options')

    <div class="dropdown d-flex">
        <button class="ms-2 btn dropdown-toggle" type="button" id="opciones" data-bs-toggle="dropdown" aria-expanded="false"
            title="Configuración">
            <i class="fas fa-ellipsis-v"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="opciones">
            <li>
                <button class="dropdown-item" type="button">Categorías</button>
            </li>
        </ul>
    </div>

@endSection

@section('table')
    <thead>
        <tr>
            <th scope="col" class="border-top-0">Nombre</th>
            <th scope="col" class="border-top-0">Código de barras</th>
            <th scope="col" class="border-top-0">Unidades</th>
            <th scope="col" class="border-top-0">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">TPV surepos100</th>
            <td>1112223334445</td>
            <td>32</td>
            <td>
                <a class="btn" href="#"><i class="fas fa-eye"></i></a>
                <a class="btn" href="#"><i class="fas fa-pen"></i></a>
                <button class="btn" type="button"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
    </tbody>
@endSection
