<div class="home_slider_area">
    <div class="home_slider">
        <div class="home-page-top-slider">
            @foreach($sliders as $slider)
            <div>
            <div class="container">
                <a href="javascript:void(0)">
                    <img src="{{ $slider['image_url'] }}"
                        data-thumb="{{ $slider['image_url'] }}"
                        data-transition="slideInLeft" alt="" title="" />
                </a>
            </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
