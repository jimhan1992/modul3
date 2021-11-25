@include('site.core.head')
<!-- HEADER -->
@include('site.core.header')
<!-- /HEADER -->

<!-- NAVIGATION -->
@include('site.core.nav')
<!-- /NAVIGATION -->


@yield('main')
@include('site.product')


@include('site.core.footer')



