@extends('students.index')


@section('content')
    {!! Form::model($student, ['url' => route('student.update')])!!}

    <div class="form-group">
        {!! Form::label('password', '旧密码:') !!}
        {!! Form::password('password', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('new_password','新密码:') !!}
        {!! Form::password('new_password', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('new_password_confirm','确认新密码:') !!}
        {!! Form::password('new_password_confirm', null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('更新',['class' => 'btn btn-primary']) !!}
    {!! Form::close()!!}
@endsection