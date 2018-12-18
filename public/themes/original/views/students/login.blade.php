@extends('layouts.login')

@section('body')
    @include('partials._login_header')

    <div class="content_box clearfix">
        <h2>注册
            <i class="slash">|</i>
            <span>抢先预约夜市</span>
            {{-- <a href="{{route('student_entry')}}">学生登录<i class="glyphicon glyphicon-chevron-right"> </i></a> --}}
        </h2>
        <div class="left_area fl">
            {{Form::open(['url' => route('post_student_login')])}}

            <div class="form_body">
                {{Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control'])}}
                {!!$errors->first('email', '<span class="help-block">:message</span>')!!}
                {{Form::password('password', ['placeholder' => '密码', 'class' => 'form-control'])}}
                {!!$errors->first('password', '<span class="help-block">:message</span>')!!}
                @if(Session::has('message'))
                    <p class="red_alert">{{Session::get('message')}}</p>
                @endif
                {{Form::submit('登录', ['class' => 'btn btn-green btn-block'])}}

            </div>

            {{Form::close()}}
        </div>
        <div class="divider fl"></div>
        <div class="right_area fl">
            <h5>没有账号:</h5>
            <a href="{{route('student_register')}}" class="login_now">注册账号 <i class="glyphicon glyphicon-log-in"></i></a>

        </div>
    </div>
@endsection