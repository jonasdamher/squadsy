@extends('layouts.dashboard',['view'=>'table'])

@section('title', 'Artículos')
@section('btn-create', 'Añadir artículo')
@section('btn-create-url', 'articles/new')

@section('main')
    <div class="col-12 border-bottom">
        <div class="d-flex justify-content-between align-items-center my-4">
            {{-- search --}}
            <form class="form-search">
                <div class="form-group d-flex m-0">
                    <button type="button" class="btn " title="Buscar"><i class="fas fa-search"></i></button>
                    <label for="search" class="sr-only">Búsqueda</label>
                    <input type="search" class="form-control mx-1" id="search" name="search" placeholder="Buscar...">
                    <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" title="Filtrar">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Categorías</button>
                        </div>
                    </div>
                </div>
            </form>
            <a href="@yield('btn-create-url')" class="btn btn-primary shadow-sm btn-new" title="@yield('btn-create')">
                <span class="icon"><i class="fas fa-plus"></i></span><span class="pl-2">@yield('btn-create')</span>
            </a>
        </div>
    </div>
    <div class="col-12 mt-4">
        <div class="d-flex justify-content-end">
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" title="Filtrar">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button">Categorías</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-2">
        {{-- table --}}
        <div class="table-responsive">
            <table class="table">
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
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end">
            <nav aria-label="Page navigation example">
                <ul class="pagination m-0">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endSection
