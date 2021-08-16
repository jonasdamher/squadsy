@push('scriptsTail')
    <script src="{{ mix('js/menu.js') }}"></script>
@endpush

@include('includes.header')
@include('includes.nav')
<div class="d-flex">
    @include('includes.menu')
    <!-- main -->
    <div class="main-view d-flex flex-column">
        <main>
            <div class="container pt-4">
                <div class="row">
                    @include('layouts.'.$view)
                </div>
            </div>
        </main>
        @include('includes.footer')
    </div>
</div>
@include('includes.tail')
