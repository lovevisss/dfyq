@extends('layouts.main')


@section('body')


    {!! Form::model($student, ['url' => route('student.update'), 'files' => true])!!}
     
        <div class="form-group">
            {!! Form::label('name', '名字:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    {!! Form::close()!!}

@endsection