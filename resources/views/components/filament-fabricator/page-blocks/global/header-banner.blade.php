@aware(['page'])
<section class="banner banner--inside">
    <div class="container-full">
        <div class="swiper"
             data-swiper="{ autoplay: { delay: 12000 }, speed: 1200, parallax: true }">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-active" style="width: 1201px;">
                        <figure class="banner-image background--fixed loader--loaded"
                                src="./assets/images/empty.png"
                                data-src="{{ \Illuminate\Support\Facades\Storage::url($image) }}"
                                data-loader="{ bg: false, over: true }"
                                data-swiper-parallax-opacity="0.4"
                                style="opacity: 1; transform: translate3d(0px, 0px, 0px); background-image: url({{ \Illuminate\Support\Facades\Storage::url($image) }});">
                        </figure>
                        <div class="banner-content">
                            <div class="container-full d-flex align-items-end">
                                <article class="content-body h-auto">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.05s" data-wow-offset="0"
                                                style="visibility: hidden; animation-duration: 1s; animation-delay: 0.05s; animation-name: none;">
                                                <a href="./" target="_self" title="Anasayfa">ANASAYFA</a>
                                            </li>
                                            <li class="breadcrumb-item active wow fadeInUp"
                                                data-wow-duration="1s" data-wow-delay="0.15s"
                                                data-wow-offset="0"
                                                style="visibility: hidden; animation-duration: 1s; animation-delay: 0.15s; animation-name: none; text-transform: uppercase">
                                                {{ $page->title }}</li>
                                        </ol>
                                    </nav>
                                    <h1 class="content-title h1 wow fadeInUp" data-wow-duration="1s"
                                        data-wow-delay="0.25s" data-wow-offset="0"
                                        style="visibility: hidden; animation-duration: 1s; animation-delay: 0.25s; animation-name: none;">
                                        {{ $subtitle }}</h1>
                                </article>
                            </div>
                        </div>
                    </div>
                </div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
</section>

<div class="pb-4 pb-sm-6 pb-xl-8"></div>
