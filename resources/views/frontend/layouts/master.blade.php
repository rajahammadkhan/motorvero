@include('frontend/layouts/header')
<section class="content">
@include('frontend/layouts/error')
    @yield('content')
</section>
@include('frontend/layouts/footer')
