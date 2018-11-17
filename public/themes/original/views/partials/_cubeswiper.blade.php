<div class="cubeswiper-container">
    <div class="swiper-wrapper">

        @foreach($sceneries as $scenery)

        <div class="swiper-slide cube" style="background-image:url({{'storage/'.$scenery->images}})">
            <div class="celebrity-desc">{{$scenery->name}}</div>
        </div>

        @endforeach

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
