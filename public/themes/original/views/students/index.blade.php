@extends('layouts.student_index')




@section('body')

    <div class="col-sm-3">
        @include('partials._studentsidebar', ['active_menu' => $active_menu, 'active_menu_parent'])
    </div>
    <div class="col-sm-7">
        @yield('content')
        {{--<div class="image-container">--}}
            {{--<img src="{{$student->student_card}}" alt="" style="width:300px; height:300px;">--}}
        {{--</div>--}}
        {{--<ul>--}}
            {{--<li><a href="{{route('student.info')}}">我的资料</a></li>--}}
            {{--<li></li>--}}
            {{--<li></li>--}}
        {{--</ul>--}}
    </div>


@endsection