<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF Token -->
<title>@yield('title') | {{env('APP_NAME')}}</title>
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
<link rel="icon" href="{{asset('/theme/site/images/favicon.ico')}}" type="image/x-icon" />
<link media="screen" href="{{asset('/css/style.css?v='.time())}}" type="text/css" rel="stylesheet" />
<link media="screen" href="{{asset('/css/responsive.css?v='.time())}}" type="text/css" rel="stylesheet" />

@yield('css')
<script type="text/javascript" src="{{asset('/js/jquery.js?v='.time())}}"></script>
</head>