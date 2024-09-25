@aware(['page'])
<section class="content content--text pb-4 pb-sm-6 pb-xl-8">
    <div class="container">
        <div class="row row-spacing">
            <div class="col-24">
                <article class="content-body">
                    <div class="content-description">
                        <div class="row row-spacing">
                            <div class="col-xl-24 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s"
                                 data-wow-offset="0"
                                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.35s;">
                                <ul style="font-size:24px">
                                    @foreach($documents as $item)
                                        <li>
                                            <a href="{{ \Illuminate\Support\Facades\Storage::url($item['file']) }}" target="_blank">{{ $item['title'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-24">
                <div class="row row-spacing"></div>
            </div>
        </div>
    </div>
</section>
