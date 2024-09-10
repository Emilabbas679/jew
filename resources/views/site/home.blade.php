<!DOCTYPE html>
<html>
@include('site.parts.head')
<body>
<div class="xsayt">
@include('site.parts.header')
<div class="container">
@yield('content')
</div>

</div>

@yield('js')
@include('site.parts.footer')
<script type="text/javascript" src="{{asset('/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/xate.js?v='.time())}}"></script>
</body>


