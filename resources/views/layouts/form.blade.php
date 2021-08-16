<div class="col-12">
    <div class="d-flex justify-content-start align-items-center mb-3">
        <a href="{{ URL::previous() }}" class="btn text-primary" title="Atrás">
            <i class="fas fa-angle-left fa-2x"></i>
        </a>
        <h1>

            @yield('title')
        </h1>
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
