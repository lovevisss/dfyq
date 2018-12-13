@extends('layouts.main')


@section('body')


    在线留言
    {{Form::open(['url' => route('post_student_message')])}}
    <div class="form_body">
        {{Form::text('name', null, ['placeholder' => '您的姓名', 'class' => 'form-control'])}}
        {!!$errors->first('name', '<span class="help-block">:message</span>')!!}


        {{Form::submit('注册', ['class' => 'btn btn-green btn-block'])}}
        <div class="agree_text">
            注册代表你已同意<a href="{{route('terms')}}">「用户协议」</a>
        </div>
    </div>
    {{Form::close()}}

@endsection