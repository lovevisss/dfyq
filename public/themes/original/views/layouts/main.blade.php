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
@include('partials._nav',['parent_menu' => $parent_menu])
<div class="container miancontent">
    @yield('body')
</div>
</body>
</html>