@extends('layouts.dashboard',['view'=>'table'])

@section('title', 'Artículos')
@section('btn-create', 'Añadir artículo')
@section('btn-create-url', 'articles/new')

@section('main')
<div class="d-flex justify-content-between align-items-center bg-light shadow-sm p-3 mb-3 border-rd-1">
{{-- search --}}
<form>
<div class="form-group d-flex m-0">
    <button type="button" class="btn btn-light" title="Buscar"><i class="fas fa-search"></i></button>
    <label for="search" class="sr-only">Búsqueda</label>
    <input type="search" class="form-control mx-1" id="search" name="search" placeholder="Buscar...">
    <button type="button" class="btn btn-light" title="Filtrar"><i class="fas fa-sliders-h"></i></button>
</div>
</form>
{{-- dropdown --}}
<div class="btn-group">
<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
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
@endSection
