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
