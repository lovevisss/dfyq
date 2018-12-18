@extends('layouts.main')


@section('body')


    index
    {{Auth::user()}}
    <ul>
        <li><a href="{{route('student.info')}}">我的资料</a></li>
        <li></li>
        <li></li>
    </ul>

@endsection