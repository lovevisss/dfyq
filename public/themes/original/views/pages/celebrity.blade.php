@extends('layouts.main')




@section('title')
    {{env('APP_NAME', '浙江财经大学东方学院|东方园区')}}
@endsection

@section('css')
    {{Html::style('css/celebrity.css')}}
@endsection

@section('body')
    this is the body
    @foreach($celebrities as $index =>$celebrity)

        <div class="celebrity-item l" style="left: {{($index%3)*33}}%; top: {{floor(index/3)}}px; z-index: 0;">
            <a href="#" target="_blank" class="celebrity-header-img" style="background-image:url({{'storage/'.$celebrity->image}});"></a>
            <a href="//www.imooc.com/t/5027812" target="_blank" class="teacher-nickname">{{$celebrity->name}}</a>
            <!-- tag -->
            <div class="tag-box clearfix">
                <span class="tag-item l">HTML/CSS</span>
                <span class="tag-item l">JavaScript</span>
                <span class="tag-item l">Node.js</span>
                <span class="tag-item l">Vue.js</span>
            </div>
            <div class="teacher-desc">{{$celebrity->desc}}</div>
            {{--<!--新增-->--}}
            {{--<div class="teacher-course js-course-toggle" style="display: none;">--}}
                {{--<!--<h6 class="teacher-course-title">讲师力荐课程</h6>-->--}}
                {{--<h6 class="teacher-course-title">讲师力荐课程</h6><a href="//coding.imooc.com/class/280.html" class="course-list" target="_blank"><div class="course-img"><img src="//img3.mukewang.com/szimg/5baf3f0a000180df06000338-228-128.jpg" width="100%" height="100%"></div><div class="course-intr"><h5 class="intr-title">Vue全家桶+SSR+Koa2全栈开发美团网</h5><div class="intr-info"><div class="info-item">实战</div><div class="info-item">中级</div><div class="info-item"><i class="imv2-set-sns"></i>816</div></div></div></a><a href="//coding.imooc.com/class/129.html" class="course-list" target="_blank"><div class="course-img"><img src="//img2.mukewang.com/szimg/59897b1600011ec805400300-228-128.jpg" width="100%" height="100%"></div><div class="course-intr"><h5 class="intr-title">前端跳槽面试必备技巧</h5><div class="intr-info"><div class="info-item">实战</div><div class="info-item">中级</div><div class="info-item"><i class="imv2-set-sns"></i>2979</div></div></div></a></div>--}}
            {{--<!--新增结束-->--}}

            <a href="//www.imooc.com/t/5027812" target="_blank" class="go-more js-show-course" style="display: none;">查看更多</a>
        </div>
    @endforeach
@endsection

