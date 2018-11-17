@extends('layouts.partlist')


@section('outerclass')
    col-sm-6  small_list
@stop

@section('title')
    {{$notice_posts[0]->category->name}}
@endsection

@section('link')
    {{route('category', ['id' => 1])}}
@endsection

@section('list')
    @foreach($notice_posts as $new)
        <li>
            <a href="post/{{$new->id}}" title="{{$new->title}}">
                <i class="glyphicon glyphicon-triangle-right"></i>
                <strong>{{App\Helper\StringHelper::substrtitle($new->title,10)}}
                    @if($new->created_at->diffInHours(\Carbon\Carbon::now()) < 72)
                        <span class="new_info">new</span>
                    @endif
                </strong>
                <span>{{date_format($new->created_at,"m-d")}}</span>
            </a>
        </li>
        <div class="clearfix">	</div>
    @endforeach
@stop