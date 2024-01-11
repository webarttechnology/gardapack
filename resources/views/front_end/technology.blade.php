<x-userHeader />
<link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
<script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>

<main>
<section class="blocksec technology" style="background: radial-gradient(ellipse at center,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%);
color:var(color-light)">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center" style="color: var(--color-primary);">{{ $detail->graph_title }}</h2>
                <h3 class="text-center" style="color: var(--color-primary);">{{ $detail->graph_sub_title }}</h3>
                <h6 class="text-center">{{ $detail->graph_sub_sub_title }}</h6>

                {{-- <div id="chart-container" style="height: 500px; overflow-y: auto;"> --}}
                <div id="chart"></div>
                {{-- </div> --}}

                <center>
                    <h4>{{ $detail->graph_footer_title }}</h4>
                    <h6>{{ $detail->graph_footer_sub_title }}</h6>
                </center>
            </div>
        </div>
    </div>
</section>

<section class="technology_effect">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 technology_effect_left">
                <h3>{{ $detail->technology_effect_title }}</h3>
            </div>
            <div class="col-md-5 technology_effect_right">
                <div class="row align-items-center">
                    <span class="col-sm-6" style="display:inline-block"><img src="{{ asset('uploads/technology/'.$detail->technology_effect_img_1) }}" alt="" class="img-fluid"></span>
                    <span class="col-sm-6" style="display:inline-block"><img src="{{ asset('uploads/technology/'.$detail->technology_effect_img_2) }}" alt="" class="img-fluid"></span>
                </center>
            </div>
        </div>
    </div>
</section>

<section class="tech_product">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-lg-4 p0 featureCol">
                <a href="#" style="color:">
                <span class="floatPart badge bg-warning">{{ $detail->prod_1_sku }}</span>
                    <center><img src="{{ asset('uploads/technology/'.$detail->prod_1_img) }}" alt="" class="img-fluid"></center>
                    <div class="tech_product_content">
                        <span class="title d-block mb-2">{{ $detail->prod_1_title }}</span>
                        <h6>{{ $detail->prod_1_short_desc }}</h6>
                        <strong>{{ $detail->prod_1_spec }}</strong>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 p0 featureCol">
                <a href="#" style="color:">
                <span class="floatPart badge bg-warning">{{ $detail->prod_2_sku }}</span>
                    <center><img src="{{ asset('uploads/technology/'.$detail->prod_2_img) }}" alt="" class="img-fluid"></center>
                    <div class="tech_product_content">
                        <span class="title d-block mb-2">{{ $detail->prod_2_title }}</span>
                        <h6>{{ $detail->prod_2_short_desc }}</h6>
                        <strong>{{ $detail->prod_2_spec }}</strong>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 p0 featureCol">
                <a href="#" style="color:">
                <span class="floatPart badge bg-warning">{{ $detail->prod_3_sku }}</span>
                    <center><img src="{{ asset('uploads/technology/'.$detail->prod_3_img) }}" alt="" class="img-fluid"></center>
                    <div class="tech_product_content">
                        <span class="title d-block mb-2">{{ $detail->prod_3_title }}</span>
                        <h6>{{ $detail->prod_3_short_desc }}</h6>
                        <strong>{{ $detail->prod_3_spec }}</strong>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="technology_effect">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 technology_effect_left">
            <h3>{{ $detail->technology_effect2_title }}</h3>
            </div>
            <div class="col-md-5 technology_effect_right">
                <div class="row align-items-center justify-content-center">
                    <span class="col-sm-3" style="display:inline-block"><img src="{{ asset('uploads/technology/'.$detail->technology_effect2_img_1) }}" alt="" class="img-fluid"></span>
                    <span class="col-sm-5" style="display:inline-block"><img src="{{ asset('uploads/technology/'.$detail->technology_effect2_img_2) }}" alt="" class="img-fluid"></span>
                </center>
            </div>
        </div>
    </div>
</section>


<section class="featuressec technology">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="maincircle forDesktop">
                    <div class="roundimg">
                    <div class="circleimg text-center">
                            <h3>{{ $detail->feature_title }}</h3>
                        </div>
                    </div>
                    <div class="roundcircle">
                        <div class="halfcirle">
                            <img src="{{ asset('assets/images/packet-design.png') }}" alt="" class="w-100">
                        </div>
                    </div>

                    <div class="feacontent">
                        <div class="circlehdng it1" >
                            <span><i class="bi bi-arrow-up-right-circle-fill"></i></span>
                            <p>{{ $detail->feature1 }}</p>

                        </div>

                        <div class="circlehdng it2">
                            <span><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <p>{{ $detail->feature2 }}</p>

                        </div>

                        <div class="circlehdng it3">
                            <span><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <p>{{ $detail->feature3 }}</p>

                        </div>

                        <div class="circlehdng it4" >
                            <span><i class="bi bi-arrow-down-right-circle-fill"></i></span>
                            <p>{{ $detail->feature4 }}</p>
                        </div>

                        <div class="circlehdng it5">
                        <span><i class="bi bi-arrow-down-right-circle-fill"></i></span>
                           <p>{{ $detail->feature5 }}</p>
                        </div>
                    </div>
                </div>

                <div class="maincircle forMobile">
                    <div class="row justify-content-center">
                        <div class="col-7 col-sm-6">
                            <center>
                            <div class="circleimg">
                               
                                <h3>WHY DOES A LOW˨PERMEABLE<br>
                            VACUUM SEAL BAG<br>
                            MATTER?</h3>
                               
                            </div>
                            </center>
                        </div>
                    </div>    
                    <div class="clearfix"></div>
                    <div class="row feacontent justify-content-center">
                        <div class="col-md-6">
                            <div class="circlehdng it1 mt-5">
                                <h5>Durability</h5>
                                <p>An industrial strength element is added for maximum puncture resistance</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="circlehdng it2 mt-5">
                                <h5>Odor</h5>
                                <p>An industrial strength element is added for maximum puncture resistance</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="circlehdng it3 mt-5">
                                <h5>Humidity</h5>
                                <p>An industrial strength element is added for maximum puncture resistance</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="circlehdng it4 mt-5">
                                <h5>UV</h5>
                                <p>An industrial strength element is added for maximum puncture resistance</p>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="circlehdng it5 mt-5">
                                <h5>Oxygen</h5>
                                <p>An industrial strength element is added for maximum puncture resistance</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="factors text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>{{ $detail->factor_title }}</h2>
            </div>
            <div class="col-sm-6 col-md-3">
                <center>
                <img src="{{ asset('uploads/technology/'.$detail->factor_1_img) }}" alt="" class="img-fluid">
                <h3>{{ $detail->factor_1_title }}</h3>
                <p>{{ $detail->factor_1_short_desc }}</p>
                </center>
            </div>
            <div class="col-sm-6 col-md-3">
                <center>
                <img src="{{ asset('uploads/technology/'.$detail->factor_2_img) }}" alt="" class="img-fluid">
                <h3>{{ $detail->factor_2_title }}</h3>
                <p>{{ $detail->factor_2_short_desc }}</p>
                </center>
            </div>
            <div class="col-sm-6 col-md-3">
                <center>
                <img src="{{ asset('uploads/technology/'.$detail->factor_3_img) }}" alt="" class="img-fluid">
                <h3>{{ $detail->factor_3_title }}</h3>
                <p>{{ $detail->factor_3_short_desc }}</p>
                </center>
            </div>
            <div class="col-sm-6 col-md-3">
                <center>
                <img src="{{ asset('uploads/technology/'.$detail->factor_4_img) }}" alt="" class="img-fluid">
                <h3>{{ $detail->factor_4_title }}</h3>
                <p>{{ $detail->factor_4_short_desc }}</p>
                </center>
            </div>
        </div>
    </div>
</section>

<section class="approach greenBg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2>{{ $detail->approach_title }}</h2>
            </div>
            <div class="col-sm-6 col-md-3 text-center">
                <span><img src="{{ asset('uploads/technology/'.$detail->approach_1_img) }}" alt="" class="img-fluid"></span>
                <p>{{ $detail->approach_1 }}</p>
            </div>  
            <div class="col-sm-6 col-md-3 text-center">
                <span><img src="{{ asset('uploads/technology/'.$detail->approach_2_img) }}" alt="" class="img-fluid"></span>
                <p>{{ $detail->approach_2 }}</p>
            </div>  
            <div class="col-sm-6 col-md-3 text-center">
                <span><img src="{{ asset('uploads/technology/'.$detail->approach_3_img) }}" alt="" class="img-fluid"></span>
                <p>{{ $detail->approach_3 }}</p>
            </div>    
        </div>
    </div>
</section>
</main>

<x-userFooter />