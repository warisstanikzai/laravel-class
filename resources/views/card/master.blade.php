@include('layouts.head')
@include('layouts.header')
<div class="row">
    <div class="col-md-3">
        @include('layouts.sidebar')
    </div>
    <div class="col-md-9">
        @yield('content')
    </div>
</div>

@include('layouts.footer')