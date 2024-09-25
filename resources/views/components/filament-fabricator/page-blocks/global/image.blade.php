@aware(['page'])
<section class="content content--text content--single-image pb-4 pb-lg-6 pb-xl-8 wow fadeInUp" data-wow-duration="1s"
         data-wow-delay="0.45s" data-wow-offset="0"
         style="visibility: visible; animation-duration: 1s; animation-delay: 0.45s;">
    <div class="container"><img src="{{ \Illuminate\Support\Facades\Storage::url($image) }}"></div>
</section>
