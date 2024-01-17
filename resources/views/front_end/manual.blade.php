<x-userHeader />
<section class="blog py-5">

    <div class="container">

        <div class="blogside">
            <div class="row">
                <div class="col-md-12">
                    <div class="hdng" data-aos="fade-up" data-aos-duration="2000">
                        <h1>All Manuals</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="blogside" data-aos="zoom-in" data-aos-duration="2000">

            <div class="row mt-5">

                @foreach ($details as $blog)
                    <div class="col-md-3">
                        
                            <a href="{{ asset('uploads/pdfs/'.$blog->pdf) }}" target="_blank"><div class="blogbx"><img src="{{ asset('pdf.png') }}" alt=""></div></a>
                        

                        <div class="content">
                            <p>{{ $blog->created_at->format('F j, Y') }}</p>
                            <h5>{{ $blog->title }}</h5>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</section>
<x-userFooter/>