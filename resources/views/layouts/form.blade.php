<div class="col-12">
    <div class="d-flex justify-content-start align-items-center p-3 border-bottom">
        <a href="{{ URL::previous() }}" class="btn text-primary d-flex mr-2" title="Atrás">
            <i class="fas fa-angle-left fa-2x"></i>
        </a>
        <h1 class="m-0">
            @yield('title')
        </h1>
    </div>
</div>
<div class="col-12">
    <div class="p-4">
        @section('main')
        @show
    </div>
</div>
