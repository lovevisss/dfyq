<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{Html::style('css/bootstrap.min.css')}}
    @yield('css')
    {{Html::style('css/normalize.css')}}
    {{Html::style('css/style.css')}}
</head>
<body>
@include('partials._head')
@include('partials._nav',['parent_menu' => $parent_menu, 'title' => $title])
@yield('slider')
<div class="container maincontent">
    @yield('body')
</div>
</body>

@include('partials._footer')

{{Html::script('js/jquery-1.11.1.min.js')}}
{{Html::script('js/navbar.js')}}
<!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.js"></script>
<![endif]-->
@yield('script')
</html>