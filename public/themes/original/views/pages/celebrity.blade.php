@extends('layouts.main')




@section('title')
    {{env('APP_NAME', '浙江财经大学东方学院|东方园区')}}
@endsection

@section('body')
    this is the body
    @foreach($celebrities as $celebrity)
        <li>{{$celebrity->name}}</li>
    @endforeach
@endsection

