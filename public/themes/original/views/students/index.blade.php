@extends('layouts.student_index')




@section('body')


    <ul id="accordion" class="accordion">
        <li>
            <div class="link"><i class="fa fa-paint-brush"></i>Diseño web<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Photoshop</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">Maquetacion web</a></li>
            </ul>
        </li>
        <li>
            <div class="link"><i class="fa fa-code"></i>Desarrollo front-end<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Javascript</a></li>
                <li><a href="#">jQuery</a></li>
                <li><a href="#">Frameworks javascript</a></li>
            </ul>
        </li>
        <li>
            <div class="link"><i class="fa fa-mobile"></i>Diseño responsive<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Tablets</a></li>
                <li><a href="#">Dispositivos mobiles</a></li>
                <li><a href="#">Medios de escritorio</a></li>
                <li><a href="#">Otros dispositivos</a></li>
            </ul>
        </li>
        <li><div class="link"><i class="fa fa-globe"></i>Posicionamiento web<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                <li><a href="#">Otros buscadores</a></li>
            </ul>
        </li>
    </ul>
    {{Auth::user()}}
    <div class="image-container">
        <img src="{{$student->student_card}}" alt="" style="width:300px; height:300px;">
    </div>
    <ul>
        <li><a href="{{route('student.info')}}">我的资料</a></li>
        <li></li>
        <li></li>
    </ul>

@endsection