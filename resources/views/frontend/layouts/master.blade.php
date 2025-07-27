@include('frontend.layouts.includes.header')
@include('frontend.layouts.includes.sidebar')
<div class="col-lg-9 offset-lg-3 content">
@yield('maincontent')
</div>

@include('frontend.layouts.includes.script')
@include('frontend.layouts.includes.footer')

