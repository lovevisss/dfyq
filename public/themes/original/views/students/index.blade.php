@extends('layouts.main')


@section('body')


    index
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