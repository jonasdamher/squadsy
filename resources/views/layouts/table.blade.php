<div class="col-12 border-bottom">

    <div class="d-flex justify-content-between align-items-center my-4">
        <h1 class="h2 m-0">@yield('title')</h1>
        <div class="d-flex ml-2">
            <a href="@yield('btn-create-url')" class="btn btn-primary shadow-sm btn-new" title="@yield('btn-create')">
                <span class="icon"><i class="fas fa-plus"></i></span><span
                    class="pl-2">@yield('btn-create')</span>
            </a>
            @section('navbar-table-options')
            @show
        </div>
    </div>

</div>
<div class="col-12">

    <div class="d-flex justify-content-between align-items-center my-4">

        @section('navbar-table')
        @show
        <div class="d-flex">
            <div class="ml-2">
                <button type="button" class="btn btn-outline-primary" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" title="Filtrar">
                    <span class="mr-2"><i class="fas fa-file-export"></i></span> Exportar
                </button>
                <div class="dropdown-menu dropdown-menu-right bg-white">
                    <button class="dropdown-item" type="button">CSV</button>
                    <button class="dropdown-item" type="button">PDF</button>
                    <button class="dropdown-item" type="button">EXCEL</button>
                </div>
            </div>
            <div class="ml-2">
                <button type="button" class="btn btn-outline-primary" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" title="Filtrar">
                    <span class="mr-2"><i class="fas fa-columns"></i></span> Columnas
                </button>
                <div class="dropdown-menu dropdown-menu-right bg-white">
                    <button class="dropdown-item" type="button">Nombre</button>
                    <button class="dropdown-item" type="button">Código de barras</button>
                 </div>
            </div>
            <div class=" ml-2">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" title="Filtrar">10</button>
                <div class="dropdown-menu dropdown-menu-right bg-white">
                    <button class="dropdown-item active" type="button">10</button>
                    <button class="dropdown-item" type="button">20</button>
                    <button class="dropdown-item" type="button">50</button>
                </div>
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
