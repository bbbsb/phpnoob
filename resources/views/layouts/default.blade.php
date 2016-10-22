<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=Edge">
    <meta name="_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('css')
    <style>
        body {
            background: #f2f2f2;
        }
    </style>
    <title>Document</title>
</head>
<body class="body">
<div class="container">
@yield('body')
</div>
</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('after-body')
</html>