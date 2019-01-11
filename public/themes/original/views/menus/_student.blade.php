<ul id="accordion" class="accordion">

    @foreach($items as $key => $menu_item)
        {{dd($menu_item)}}
        {{--<li class="@if($menu_item->title == $options->active_menu->title)  //option 是从menu中传入的参数--}}
                        {{--current--}}
            {{--@endif"><a class="navName" href={{$menu_item->link()}} >{{ $menu_item->title }}</a>--}}
            {{--@if($menu_item->children)--}}
                {{--<ul>--}}
                    {{--@foreach($menu_item->children as $child)--}}
                        {{--<li><a href={{$child->link()}}>{{$child->title}}</a>	</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}

            {{--@endif--}}
        {{--</li>--}}

        <li>
            <div class="link"><i class="fa fa-paint-brush"></i>{{$menu_item->title}}<i class="fa fa-chevron-down"></i></div>

                {{--<li><a href="#" class="active">基本信息</a></li>--}}
                {{--<li><a href="#">密码更新</a></li>--}}
                {{--<li><a href="#">资格认证</a></li>--}}
                {{--<li><a href="#">Maquetacion web</a></li>--}}

            @if($menu_item->children)
                <ul class="submenu" style="@if($active_menu_parent == $menu_item->id)
                        display: block
                        @endif">
                    @foreach($menu_item->children as $child)
                        <li><a href="{{$child->link()}}" class="@if($active_menu->id == $child->id)
                                    active
@endif">{{$child->title}}</a></li>
                    @endforeach
                </ul>

            @endif
        </li>
    @endforeach

</ul>