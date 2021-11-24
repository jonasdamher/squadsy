<div class="col-12 border-bottom">

    <div class="d-flex justify-content-between align-items-center my-4">
        <h1 class="h2 m-0">@yield('title')</h1>
        <div class="d-flex ms-2">
            <a href="@yield('btn-create-url')" class="btn btn-primary shadow-sm btn-new" title="@yield('btn-create')">
                <span class="icon"><i class="fas fa-plus"></i></span><span
                    class="pl-2">@yield('btn-create')</span>
            </a>
            <div class="dropdown d-flex">
                <button class="ms-2 btn " type="button" id="opciones" data-bs-toggle="dropdown"
                    aria-expanded="false" title="Configuración">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="opciones">
                    @section('navbar-table-options')
                    @show
                </ul>
            </div>

        </div>
    </div>

</div>
<div class="col-12">
    <div class="row d-flex justify-content-between align-items-center my-4">
        <form class="form-search col-md-4 order-1">
            <div class="form-group d-flex m-0">
                <button type="button" class="btn " title="Buscar"><i class="fas fa-search"></i></button>
                <label for="search" class="sr-only">Búsqueda</label>
                <input type="search" class="form-control" id="search" name="search" placeholder="Buscar...">
                {{-- filters --}}
                <button class="btn btn-filter-toggle" title="Filtros" type="button">
                    <i class="fas fa-sliders-h"></i>
                </button>
            </div>
        </form>
        <form class="form-filters col-md-6 col-12 mt-3 order-2 order-md-3" style="display: none;">
            <div class="row">
                <div class="col-12 ">
                    <p><strong>Filtros avanzados</strong></p>
                 </div>
                <div class="col-md-4 mb-2 m-md-0">
                    <label for="filtro1" class="sr-only">Filtro 1</label>
                    <input type="text" class="form-control" id="filtro1" name="filtro1" placeholder="Filtro 1">
                </div>
                <div class="col-md-4 mb-2 m-md-0">
                    <label for="filtro2" class="sr-only">Filtro 2</label>
                    <input type="text" class="form-control" id="filtro2" name="filtro2" placeholder="Filtro 2">
                </div>
                <div class="col-md-4 mb-2 m-md-0">
                    <label for="filtro3" class="sr-only">Filtro 3</label>
                    <input type="text" class="form-control" id="filtro3" name="filtro3" placeholder="Filtro 3">
                </div>
            </div>
        </form>
        <div class="col-md-8 d-flex mt-4 mt-md-0 order-3 order-md-2">
            <div class="dropdown ms-auto">
                <button class="btn btn-outline-primary" type="button" id="exportar"
                    data-bs-toggle="dropdown" aria-expanded="false" title="Exportar tabla">
                    <span class="me-2"><i class="fas fa-file-export"></i></span>Exportar
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="exportar">
                    <li>
                        <button class="dropdown-item" type="button">CSV</button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">PDF</button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">EXCEL</button>
                    </li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="ms-2 btn btn-outline-primary" type="button" id="columnas"
                    data-bs-toggle="dropdown" aria-expanded="false" title="Mostrar columnas de tabla">
                    <span class="me-2"><i class="fas fa-columns"></i></span>Columnas
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="columnas">
                    <li>
                        <button class="dropdown-item active" type="button">Nombre</button>
                    </li>
                    <li>
                        <button class="dropdown-item active" type="button">Código de barras</button>
                    </li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="ms-2 btn dropdown-toggle" type="button" id="opciones" data-bs-toggle="dropdown"
                    aria-expanded="false" title="Registros por página">
                    10
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="opciones">
                    <li>
                        <button class="dropdown-item active" type="button">10</button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">20</button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">50</button>
                    </li>
                </ul>
            </div>
        </div>

      

    </div>
</div>

<div class="col-12 mt-2">

    <div class="table-responsive">
        <table class="table">
            @section('table')
            @show
        </table>
    </div>

    <div class="d-flex justify-content-end">
        <nav aria-label="Paginaciones">
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
