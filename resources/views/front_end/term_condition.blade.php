<x-userHeader />
<main>

    <section class="storysec py-5">
        <div class="container">
    <section class="blog_details py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="pb-3 mb-0 text-center">{{ $details->title }}</h1>
                    <div class="iconspb py-3">
                        {{-- <span class="text-new me-2"><i class="fas fa-user mr-2"></i>By </span> --}}
                        {{-- <span><i class="fas fa-calendar-alt mr-2"></i> {{ $details->created_at->format('d-m-Y') }}</span> --}}
                    </div>
                    <div class="blog_main">
                        <div class="blog_left">
                            <img src="{{ asset('uploads/imgs/'.$details->img) }}" alt="">
                        </div>
                        <div class="blog_right">
                           <p class="mb-4">{!! $details->description !!}</p>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </section>

</main>
<x-userFooter />