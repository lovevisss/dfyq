@extends('layouts.main')

@section('css')
    {{Html::style('css/swiper/swiper.min.css')}}
@endsection


@section('title')
    {{env('APP_NAME', '浙江财经大学东方学院|东方园区')}}
@endsection

@section('slider')
    @include('partials._slider')
@endsection
@section('body')
         @include('blocks._notice')
@endsection

@section('cubeswiper')
    @include('partials._cubeswiper')
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
        var cubeswiper = new Swiper('.cubeswiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows : true,
            },

            autoplay:{
                delay: 3000,
            },
        });


    </script>

@endsection