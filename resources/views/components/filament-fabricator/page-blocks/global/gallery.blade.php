@aware(['page'])
<section class="content content--text pb-4 pb-sm-6 pb-xl-8">
    <div class="container">
        <div class="row row-spacing-2 row-spacing-xl-4">
            <div class="col-24">
                <div class="row row-spacing">
                    @foreach($galleries as $item)
                        <div class="col-12 col-sm-8 col-md-6 col-xl-4"><a
                                href="{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}" class="swipebox" rel="gallery-380">
                                <figure class="content-image">
                                    <img
                                        src="{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}"
                                        data-src="{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}"
                                        width="100%" data-loader="{ &quot;height&quot;: 168.66 }" class="loader--loaded">
                                </figure>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
