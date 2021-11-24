@extends('layouts.dashboard',['view'=>'table'])

@section('title', 'Artículos')
@section('btn-create', 'Añadir artículo')
@section('btn-create-url', 'articles/new')


@section('navbar-table-options')
    <li>
        <button class="dropdown-item" type="button">Categorías</button>
    </li>
@endSection

@section('table')
    <thead>
        <tr>
            <th scope="col" class="border-top-0">Artículo <span class="ms-2 text-secondary"><i
                        class="fas fa-sort"></i></span>
            </th>
            <th scope="col" class="border-top-0">Proveedor<span class="ms-2 text-secondary"><i
                        class="fas fa-sort"></i></span>
            </th>
            <th scope="col" class="border-top-0">Código de barras<span class="ms-2 text-secondary"><i
                        class="fas fa-sort"></i></span></th>
            <th scope="col" class="border-top-0">Unidades<span class="ms-2 text-secondary"><i
                        class="fas fa-sort"></i></span></th>
            <th scope="col" class="border-top-0">Estado<span class="ms-2 text-secondary"><i
                        class="fas fa-sort"></i></span>
            </th>
            <th scope="col" class="border-top-0"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">
                <div class="d-flex">
                    <img src="{{ asset('images/articles/article-example.jpg') }}" alt="article"
                        class="rounded shadow-sm me-2" width="64px" />
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <p class="mb-0">TPV surepos100</p>
                        <span class="badge rounded-pill bg-info">tpv</span>
                    </div>
                </div>
            </th>
            <td><a href="#" class="text-decoration-none" title="Ver SuperProveedor">SuperProveedor</a></td>
            <td>
                <div class="d-inline">
                    <span class="badge bg-light text-dark me-1">EAN13</span>
                    978020137962
                </div>
            </td>
            <td>
                <div class="d-flex flex-column justify-content-center align-items-start fw-bold">
                    <span ><small>32 totales</small></span>
                    <span class="text-success"><small>10 disponibles</small></span>
                </div>
            </td>
            <td>
                <span class="badge bg-success">Activo</span>
            </td>
            <td>
                <a class="btn" href="#"><i class="fas fa-eye"></i></a>
                <a class="btn" href="#"><i class="fas fa-pen"></i></a>
                <button class="btn" type="button"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
    </tbody>
@endSection
