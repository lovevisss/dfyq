<div class="cubeswiper-container">
    <h3>园区风采</h3>
    <div class="swiper-wrapper">

        @foreach($sceneries as $scenery)

        <div class="swiper-slide cube" style="background-image:url({{'storage/'.$scenery->images}})">
            <div class="scene-name">{{$scenery->name}}</div>
        </div>

        @endforeach

    </div>
    <!-- Add Pagination -->
</div>
