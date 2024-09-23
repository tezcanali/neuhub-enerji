@aware(['page'])
<section class="banner banner--main window--inner-height">
    <div class="container-full">
        <div class="swiper"
             data-swiper="{ autoplay: { delay: 4000 }, speed: 1200, parallax: true, video: true }">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($sliders as $slide)
                        <div class="swiper-slide" data-swiper-bullet-name="{!! $slide['subtitle'] !!}"
                        >
                            <figure class="banner-image background--fixed loader--loaded"
                                    src="{{ asset('front/images/empty.png')}}"
                                    data-src="{{ \Illuminate\Support\Facades\Storage::url($slide['image']) }}"
                                    data-loader="{ bg: false, over: true }"
                                    data-swiper-parallax-opacity="0.4"
                                    style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($slide['image']) }});">
                            </figure>
                            <div class="banner-content">
                                <div
                                    class="container d-flex align-items-center justify-content-center text-center">
                                    <article class="content-body h-auto">
                                        <h1 class="content-title h1" data-swiper-parallax="-350"
                                            data-swiper-parallax-opacity="0">
                                            {!! $slide['title'] !!}</h1>
                                        <p class="content-description" data-swiper-parallax="-250"
                                           data-swiper-parallax-opacity="0">
                                            {!! $slide['description'] !!}</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div
                    class="swiper-pagination swiper-pagination-1725988989129-0 swiper-pagination-clickable swiper-pagination-bullets">
                    @foreach($sliders as $slide)
                        <div class="swiper-pagination-bullet {{ $loop->first ?? 'swiper-pagination-bullet-active' }}" tabindex="0" role="button"
                             aria-label="Go to slide 1">
                            <span>{!! $slide['subtitle'] !!}</span>
                        </div>
                    @endforeach
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
        <div class="copyright d-none d-sm-block">
            <p>©2019, Polat Enerji. Tüm hakları saklıdır.</p>
            <ul>
                <li><a href="/politikalar-ve-belgeler/" title="Politikalar ve Belgeler"
                       class="active">Politikalar ve Belgeler</a></li>
                <li><a href="/cerez-politikasi/" title="Çerez Politikası" class="active">Çerez
                        Politikası</a></li>
            </ul>
        </div>
        <div class="scroll-down js-scroll-down" title="Aşağıya Kaydır">
            <svg version="1.1" id="Layer_1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                 y="0px" viewBox="0 0 117 267" style="enable-background:new 0 0 117 267;"
                 xml:space="preserve" class="svg replaced-svg" height="26">
                            <g>
                                <polygon points="117,109 64,109 113,0 56,0 0,136 54,136 10,267  "></polygon>
                            </g>
                        </svg>
        </div>
        <div class="social-links">
            <ul>
                <li><a href="https://www.facebook.com/polatenerji" target="_blank" title="Facebook"
                       rel="me"><i class="icon-facebook-1"></i></a></li>
                <li><a href="https://www.instagram.com/polatenerji/" target="_blank" title="Instagram"
                       rel="me"><i class="icon-instagram-1"></i></a></li>
                <li><a href="https://www.linkedin.com/company/polat-enerji-san.-ve-tic.-a.s/about/"
                       target="_blank" title="Linked In" rel="me"><i class="icon-linkedin-1"></i></a></li>
                <li><a href="https://www.youtube.com/@polat.enerji" target="_blank" title="Youtube"
                       rel="me"><i class="icon-youtube-play"></i></a></li>
            </ul>
        </div>
    </div>
</section>

<div class="pb-4 pb-sm-6 pb-xl-8"></div>
