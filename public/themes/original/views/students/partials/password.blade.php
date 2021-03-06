@extends('students.index')


@section('content')
    {!! Form::model($student, ['url' => route('student.updatePwd')])!!}
    @include('students.errors')

    <div class="form-group">
        {!! Form::label('password', '旧密码:') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('new_password','新密码:') !!}
        {!! Form::password('new_password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('new_password_confirm','确认新密码:') !!}
        {!! Form::password('new_password_confirm', ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('更新',['class' => 'btn btn-primary']) !!}
    {!! Form::close()!!}
@endsection