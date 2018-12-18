<div class="top-zone">
    <div>
        <div class="">
            <a href="{{route('index')}}" title="{{env('APP_NAME')}}"></a>
            <div class="header_contact">
                @if(Auth::user()!=null && Auth::user()->role->id == 3)

                    <a href="{{route('student.index')}}" title="我的信息" class="current">我的信息</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{route('student.logout')}}" title="退出登录">退出登录</a>
                    @else

                <a href="{{route('student_login')}}" title="学生登录" class="current">学生登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{route('index')}}" title="主网站">东方主站</a>
            @endif
            </div>
        </div>
    </div>
</div>