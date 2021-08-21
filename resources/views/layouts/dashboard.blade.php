@push('scriptsTail')
    <script src="{{ mix('js/menu.js') }}"></script>
@endpush

@include('includes.header')
<div class="d-flex">
    @include('includes.menu')
    <!-- main -->
    <div class="main-view d-flex flex-column">
        @include('includes.nav')
        <main>
            <div class="container-fluid">
                <div class="row">
                    @include('layouts.'.$view)
                </div>
            </div>
        </main>
        @include('includes.footer')
    </div>
</div>
@include('includes.tail')
