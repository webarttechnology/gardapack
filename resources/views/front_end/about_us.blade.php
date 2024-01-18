<x-userHeader />
<main>
    <section class="blocksec py-5">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-6">
                    <img src="{{ asset('pages/featured_img/' . $details->featured_img) }}" alt="" class="w-100"
                        style="border-radius:0 15% 0 15%;; border:10px #f1f1f1 solid; box-shadow: 1px 0px 26px 0px rgba(0,0,0,0.27);
-webkit-box-shadow: 1px 0px 26px 0px rgba(0,0,0,0.27);
-moz-box-shadow: 1px 0px 26px 0px rgba(0,0,0,0.27);">
                </div>
                <div class="col-sm-5 mt-3">
                    <h2>{{ $details->feature_heading }}</h2>
                    <p>{!! $details->description !!}</p>
                    <a href="{{ $details->contact_btn_link }}" class="btn btnTheme btnShop md-round fwEbold text py-3 text-white">{{ $details->contact_btn_title }}</a>

                </div>
            </div>
        </div>
    </section>
    <section class="blocksec py-5" style="background:#000; color:#333">
        <div class="container">
            <div class="row align-items-center flex-row-reverse row justify-content-center">
                <div class="col-sm-12">
                    <div class="d-flex flex-wrap justify-content-around">
                        <div class="block">
                            <div class="box">
                                <p class="number">
                                    <span class="num">{{ $details->circle1_percent }}</span>
                                    <span class="sub">%</span>
                                </p>
                                <p class="title">{{ $details->circle1_text }}</p>
                            </div>
                            <span class="dots"></span>
                            <svg class="svg">
                                <defs>
                                    <linearGradient id="gradientStyle">
                                        <stop offset="0%" stop-color="#565656" />
                                        <stop offset="100%" stop-color="#b7b5b5" />
                                    </linearGradient>
                                </defs>
                                <circle class="circle" cx="90" cy="90" r="80" />
                            </svg>
                        </div>
                        <div class="block">
                            <div class="box">
                                <p class="number">
                                    <span class="num">{{ $details->circle2_percent }}</span>
                                    <span class="sub">%</span>
                                </p>
                                <p class="title">{{ $details->circle2_text }}</p>
                            </div>
                            <span class="dots"></span>
                            <svg class="svg">
                                <defs>
                                    <linearGradient id="gradientStyle">
                                        <stop offset="0%" stop-color="#565656" />
                                        <stop offset="100%" stop-color="#b7b5b5" />
                                    </linearGradient>
                                </defs>
                                <circle class="circle" cx="90" cy="90" r="80" />
                            </svg>
                        </div>
                        <div class="block">
                            <div class="box">
                                <p class="number">
                                    <span class="num">{{ $details->circle3_percent }}</span>
                                    <span class="sub">%</span>
                                </p>
                                <p class="title">{{ $details->circle3_text }}
                                </p>
                            </div>
                            <span class="dots"></span>
                            <svg class="svg">
                                <defs>
                                    <linearGradient id="gradientStyle">
                                        <stop offset="0%" stop-color="#565656" />
                                        <stop offset="100%" stop-color="#b7b5b5" />
                                    </linearGradient>
                                </defs>
                                <circle class="circle" cx="90" cy="90" r="80" />
                            </svg>
                        </div>
                        <div class="block">
                            <div class="box">
                                <p class="number">
                                    <span class="num">{{ $details->circle4_percent }}</span>
                                    <span class="sub">%</span>
                                </p>
                                <p class="title">{{ $details->circle4_text }}
                                </p>
                            </div>
                            <span class="dots"></span>
                            <svg class="svg">
                                <defs>
                                    <linearGradient id="gradientStyle">
                                        <stop offset="0%" stop-color="#565656" />
                                        <stop offset="100%" stop-color="#b7b5b5" />
                                    </linearGradient>
                                </defs>
                                <circle class="circle" cx="90" cy="90" r="80" />
                            </svg>
                        </div>
                        <div class="block">
                            <div class="box">
                                <p class="number">
                                    <span class="num">{{ $details->circle5_percent }}</span>
                                    <span class="sub">%</span>
                                </p>
                                <p class="title">{{ $details->circle5_text }}</p>
                            </div>
                            <span class="dots"></span>
                            <svg class="svg">
                                <defs>
                                    <linearGradient id="gradientStyle">
                                        <stop offset="0%" stop-color="#565656" />
                                        <stop offset="100%" stop-color="#b7b5b5" />
                                    </linearGradient>
                                </defs>
                                <circle class="circle" cx="90" cy="90" r="80" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blocksec py-5" style="color:#333">
        <div class="container-fluid">
            <div class="row align-items-center flex-row-reverse row justify-content-center">
               
                <div class="col-sm-6">
                    <img src="{{ asset('pages/img2/' . $details->img2) }}" alt="" class="w-100"
                        style="border-radius:15% 0 15% 0; border:10px #f1f1f1 solid; box-shadow: 1px 0px 26px 0px rgba(0,0,0,0.27);
-webkit-box-shadow: 1px 0px 26px 0px rgba(0,0,0,0.27);
-moz-box-shadow: 1px 0px 26px 0px rgba(0,0,0,0.27);">
                </div>
                <div class="col-sm-5 mt-3">
                    <h2>{{ $details->how_work_text1 }}</h2>
                    {!! $details->how_work_desc1 !!}

                </div>
                <div class="col-sm-11 mt-3" >
					{!! $details->extra_desc !!}
				</div>
            </div>
        </div>
    </section>

</main>
<x-userFooter />
