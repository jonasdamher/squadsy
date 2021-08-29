@push('scripts-head')
    <link rel="stylesheet" type="text/css" href="{{ mix('css/dashboard.css') }}">
@endpush

@push('scripts-tail')
    <script src="{{ mix('js/menu.js') }}"></script>
@endpush

@include('partials.header')
<div class="d-flex">
    @include('partials.menu')
    <!-- main -->
    <div class="main-view d-flex flex-column">
        @include('partials.nav')
        <main>
            <div class="container-fluid">
                <div class="row">
                    @include('layouts.'.$view)
                </div>
            </div>
        </main>
        @include('partials.footer')
    </div>
</div>
@include('partials.tail')
