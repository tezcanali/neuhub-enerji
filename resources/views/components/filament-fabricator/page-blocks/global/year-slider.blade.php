@aware(['page'])
<section class="content pb-4 pb-lg-6 pb-xl-8 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.45s"
         data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.45s;">
    <div class="container">
        <div class="swiper swiper2" data-swiper="{ &quot;spaceBetween&quot;: 20, &quot;breakpoints&quot;: { &quot;1132&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;540&quot;: { &quot;slidesPerView&quot;: 2 }, &quot;0&quot;: { &quot;slidesPerView&quot;: 1 } } }">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper">
                    @foreach($sliders as $slider)
                        <div class="swiper-slide text-center" style="width: 263px; margin-right: 20px;">
                            <a class="routing-box routing-box-inferior" title="2000">
                                <div class="routing-box-image">
                                    <figure class="content-image background background--cover loader--loaded"
                                            src="./assets/images/empty.png"
                                            data-src="{{ \Illuminate\Support\Facades\Storage::url($slider['image']) }}"
                                            data-loader=""
                                            style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($slider['image']) }});">
                                    </figure>
                                </div>
                                <article class="routing-box-body content-body">
                                    <h2 class="content-title h2 ">{!! $slider['year'] !!}</h2>
                                    <div class="content-description ">{!! $slider['description'] !!}
                                    </div>
                                </article>
                            </a>
                        </div>
                    @endforeach
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div
                class="swiper-button-prev" aria-disabled="false"
                tabindex="0" role="button" aria-label="Previous slide"></div>
            <div class="swiper-button-next"
                 tabindex="0" role="button" aria-label="Next slide" ></div>
        </div>
    </div>
</section>
