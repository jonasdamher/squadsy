<div class="col-12">
    <div class="d-flex justify-content-between align-items-center p-3">
        <h1>@yield('title')</h1>
        <a href="@yield('btn-create-url')" class="btn btn-primary btn-lg shadow-sm d-flex" title="@yield('btn-create')">
            <span class="icon pr-2"><i class="fas fa-plus"></i></span><span class="d-lg-block d-md-none">@yield('btn-create')</span>
        </a>
    </div>
</div>
<div class="col-12">
    @section('main')
    @show
</div>
