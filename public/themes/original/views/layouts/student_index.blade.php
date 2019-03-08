@extends('layouts.main')

@section('css')


    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    {{Html::style('css/accordian.css')}}
    {{Html::style('css/dropzone/dropzone.min.css')}}
    @stop



@section('script')


    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
    {{Html::script('js/accordian.js')}}
    {{Html::script('js/dropzone/dropzone.min.js')}}
    @stop

