@extends('layouts.dashboard',['view'=>'table'])

@section('title', 'Artículos')
@section('btn-create', 'Añadir artículo')
@section('btn-create-url', 'articles/new')

@section('navbar-table')
    {{-- search --}}
    <form class="form-search">
        <div class="form-group d-flex m-0">
            <button type="button" class="btn " title="Buscar"><i class="fas fa-search"></i></button>
            <label for="search" class="sr-only">Búsqueda</label>
            <input type="search" class="form-control mx-1" id="search" name="search" placeholder="Buscar...">
            {{-- filters --}}
            <div>
                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" title="Filtrar">
                    <i class="fas fa-sliders-h"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right bg-white">
                    <button class="dropdown-item" type="button">Categorías</button>
                </div>
            </div>
        </div>
    </form>
@endSection

@section('navbar-table-options')
    <div class="ml-2 d-flex">
        <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            title="Configuración">
            <i class="fas fa-ellipsis-v"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="/categories">Categorías</a>
        </div>
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
