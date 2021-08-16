@extends('layouts.dashboard',['view'=>'table'])

@section('title', 'Artículos')
@section('btn-create', 'Añadir artículo')
@section('btn-create-url', 'articles/new')

@section('main')
<div class="d-flex justify-content-between align-items-center mb-3">
{{-- search --}}
<form>
<div class="form-group d-flex m-0">
    <label for="search" class="sr-only">Búsqueda</label>
    <input type="search" class="form-control mr-1" id="search" name="search" placeholder="Buscar...">
    <button type="button" class="btn btn-primary" title="Buscar"><i class="fas fa-search"></i></button>
</div>
</form>
{{-- dropdown --}}
<div class="btn-group">
<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false" title="Configuración">
    <i class="fas fa-cog"></i>
</button>
<div class="dropdown-menu dropdown-menu-right">
    <h6 class="dropdown-header">Configuración</h6>
    <button class="dropdown-item" type="button">Categorías</button>
</div>
</div>
</div>
{{-- table --}}
<div class="table-responsive">
<table class="table">
<thead>
    <tr>
        <th scope="col" class="border-top-0">#</th>
        <th scope="col" class="border-top-0">First</th>
        <th scope="col" class="border-top-0">Last</th>
        <th scope="col" class="border-top-0">Handle</th>
    </tr>
</thead>
<tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
@endSection
