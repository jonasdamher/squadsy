<div class="col-12">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>@yield('title')</h1>
        <a href="@yield('btn-create-url')" class="btn btn-primary shadow-sm">
            <span class="icon pr-2"><i class="fas fa-plus"></i></span>@yield('btn-create')
        </a>
    </div>
</div>
<div class="col-12">
    <div class="card shadow-sm">
        <div class="card-body">
            @section('main')
            @show
        </div>
    </div>
</div>
