@extends('layouts.main')

@section('css')
    {{Html::style('css/swiper/swiper.min.css')}}
@endsection


@section('title')
    {{env('APP_NAME', '浙江财经大学东方学院|东方园区')}}
@endsection

@include('partials._slider')
@section('body')
    this is the body
@endsection

@section('script')
    {{Html::script('js/swiper/swiper.min.js')}}
    <script type="text/javascript">
        var mySwiper = new Swiper('.swiper-container', {
            direction: 'horizontal',
            loop: true,

            pagination:{
                el:'.swiper-pagination',
            },

            navigation:{
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay:{
                delay: 3000,
            },
        })


    </script>

@endsection