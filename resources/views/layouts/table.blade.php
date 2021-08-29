<div class="col-12 border-bottom">

    <div class="d-flex justify-content-between align-items-center my-4">
        @section('navbar-table')
        @show
       <div class="d-flex ml-2">
        <a href="@yield('btn-create-url')" class="btn btn-primary shadow-sm btn-new" title="@yield('btn-create')">
            <span class="icon"><i class="fas fa-plus"></i></span><span class="pl-2">@yield('btn-create')</span>
        </a>
        @section('navbar-table-options')
        @show
       </div>
    </div>

</div>

<div class="col-12 mt-4">

    <div class="d-flex justify-content-end">

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
