<x-userHeader />
<section class="faq-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div id="accordion">

                    
                    @foreach ($faqs as $key => $faq)
                    <div class="card">
                        <div class="card-header" id="heading{{ $key }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $key }}"
                                    aria-expanded="true" aria-controls="collapse{{ $key }}">
                                    {!! $faq->question !!}
                                </button>
                            </h5>
                        </div>

                        <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}"
                            data-parent="#accordion">
                            <div class="card-body">
                                {!! $faq->answer !!}

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</section>
<x-userFooter />