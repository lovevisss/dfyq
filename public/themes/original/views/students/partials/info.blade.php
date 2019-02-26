@extends('students.index')


@section('content')
{!! Form::model($student, ['url' => route('student.update'), 'files' => true])!!}

<div class="form-group">
    {!! Form::label('name', '名字:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email','Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('student_num','学号:') !!}
    {!! Form::text('student_num', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone','手机:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('student_card','学生证:') !!}
        <img src="{{$student->student_card ? $student->card : "暂无照片"}}" alt="" style="width:100px; height:100px;">

    {!! Form::file('student_card', null, ['class' => 'form-control']) !!}
</div>

{{--<div class="form-group">--}}
    {{--{!! Form::label('role_id','角色:') !!}--}}
    {{--{!! Form::file('role_id', $roles , null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{!! Form::submit('更新',['class' => 'btn btn-primary']) !!}
{!! Form::close()!!}
    @endsection