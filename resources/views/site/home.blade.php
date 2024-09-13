<!DOCTYPE html>
<html>

@include('site.parts.head')
<body>
<div class="x-site">
@include('site.parts.header')
<div class="container">
@yield('content')
</div>
@include('site.parts.footer')
</div>

@yield('js')

<script type="text/javascript" src="{{asset('/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/xate.js?v='.time())}}"></script>
</body>


