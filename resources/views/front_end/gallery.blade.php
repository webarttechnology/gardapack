<x-userHeader />
<main>
<section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-sm-10 text-center">
                <h1 class="headingIV fwEbold playfair mb-4">Gallery</h1>
                <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                    <li class="mr-2"><a href="#">Home</a></li>
                    <li class="mr-2">/</li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="gallery-sec">
    <div class="container">
        <div class="row">
            @foreach ($galleries as $gallery)
            <div class="col-md-4">
                <div class="gallery-img">
                    <a href="{{ asset('admin/gallery/'.$gallery->img) }}" data-fancybox="gallery"><img alt="Gallery picture #1"
                            src="{{ asset('admin/gallery/'.$gallery->img) }}"></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

</main>
<x-userFooter />