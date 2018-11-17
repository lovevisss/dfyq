@extends('layouts.partlist')


@section('outerclass')
    col-sm-6
@stop

@section('title_name')
    {{$notice_posts[0]->category->name}}
@endsection

@section('link')
    {{route('category', ['id' => 1])}}
@endsection

@section('list')
    @foreach($notice_posts as $new)

        <li class="">
            <span class="post-newday">26</span><span class="post-newmonth">2018/06</span>
            <span class="ftitle"><a href="post/{{$new->id}}" title="{{$new->title}}">
                <i class="glyphicon glyphicon-triangle-right"></i>
                <strong>{{App\Helper\StringHelper::substrtitle($new->title,10)}}
                    @if($new->created_at->diffInHours(\Carbon\Carbon::now()) < 72)
                        <span class="new_info">new</span>
                    @endif
                </strong>
            </a></span>
            <span class="fbody"><p>{{App\Helper\StringHelper::substrtitle($new->body,20)}}</p></span>
        </li>
        <li>

        </li>
        <div class="clearfix">	</div>
    @endforeach
@stop