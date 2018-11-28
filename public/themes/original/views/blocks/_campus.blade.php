

<div class="col-sm-6 rolling_list">
    <h3 class="in_noticeTitle">{{$campus_posts[0]->category->name}}</h3>
    <div class="in_noticeList">
        <ul>
            @foreach($campus_posts as $post)
                <li>
                    <a href="post/{{$post->id}}" title="{{$post->title}}"><i class="glyphicon glyphicon-triangle-right"></i>
                        <strong>{{App\Helper\StringHelper::substrtitle($post->title,10)}}
                            @if($post->created_at->diffInHours(\Carbon\Carbon::now()) < 72)
                                <span class="new_info">new</span>
                            @endif
                        </strong>
                        <span class="float-right">{{date_format($post->created_at,"m-d")}}</span>
                    </a>
                </li>
                <div class="clearfix"></div>
            @endforeach
        </ul>
    </div>
    <div class="in_noticeMore">
        <a href="{{route('category',['id' => 6])}}" title="{{$campus_posts[0]->category->name}}">查看更多</a>
    </div>
</div>