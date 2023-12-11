<x-userHeader />

<section class="home-banner clearfix">

    <div class="container">

        <div class="row align-items-center text-center">

            <div class="col-md-12 order-md-1 order-sm-2" data-aos="zoom-in" data-aos-duration="2000">

                <h1>Our <span class="color">TerpLoc® </span>Technology</h1>

                <!--<p>Grove Bags TerpLoc® product line is the evolution in packaging the cannabis<br>-->

                <!--    industry has been waiting for. Designed around the plant’s physiological properties,<br>-->

                <!--    it utilizes a blend of several film elements to create the optimal cannabis climate<br>-->

                <!--    inside every package.</p>-->

                <div class="home-button"><button type="button" class="btn btn-secondary">Shop Now</button>

                    <span class="home-button2"><button type="button" class="btn btn-secondary">See

                            Now</button></span>

                </div>

            </div>

            <!-- <div class="col-md-5 col-12 order-md-2 order-sm-1 "  data-aos="zoom-in" data-aos-duration="2000">

                <div class="banner-image">

                <img src="{{ asset('assets/images/Header part.png') }}" class="img-fluid">

            </div>

            </div> -->

        </div>

    </div>

</section>



<section class="abouts">

    <div class="container">

        <div class="row align-items-center justify-content-around text-center">

            <div class="col-md-10">

                <h2 class="effectCenter">About Us</h2>

                <p>Grove Bags TerpLoc® product line is the evolution in packaging the cannabis

                industry has been waiting for. Designed around the plant’s physiological properties,

                it utilizes a blend of several film elements to create the optimal cannabis climate

                inside every package.</p>

                <iframe class="videobox" width="100%" height="450px" src="https://www.youtube.com/embed/5o5ulUVJX6E?si=gvN-WJXYu3bp4X1Q&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>

            

        </div>

    </div>

</section>

<section class="dealofday newproducts">

    <div class="container">

        <div class="row" data-aos="fade-up" data-aos-duration="2000">

            <div class="col-sm-8 col-md-6">

                <h2>New Products</h2>

            </div>

            <div class="col-sm-4 col-md-6">

                <div class="btnbox">

                    <a href="#">View All <i class="bi bi-arrow-right"></i></a>

                </div>

            </div>

        </div>

        <div class="row">





           @foreach($products as $product)

            <div class="col-6 col-sm-6 col-md-3 my-3" data-aos="fade-up" data-aos-duration="2500">

                <div class="deal-item">

                    <div class="img">

                        <a href=""><img src="{{ asset('admin/product/featured_img/'.$product->featured_img)}}" alt=""></a>

                        <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">

                            @if (Auth::user())

                                @php

                                    $wish = App\Models\WishList::where('user_id', Auth::user()->id)

                                        ->where('product_id', $product->id)

                                        ->first();

                                @endphp



                                <li class="overflow-hidden"><a href="javascript:void(0)"

                                        onclick="addWishList({{ $product->id }}, 1, 'category')"

                                        class="icon-heart d-block @if ($wish) active @endif"></a>

                                </li>

                            @else

                                <li class="overflow-hidden"><a href="javascript:void(0)"

                                        onclick="warningAlert('pc')" class="icon-heart d-block"></a>

                                </li>

                            @endif





                            {{-- <li class="overflow-hidden"><a href="javascript:void(0)" onclick="return addToCart({{ $product->id }}, 'single', 'pc')" class="icon-cart d-block @if ($cart_details) active @endif"></a></li> --}}

                            <li class="overflow-hidden"><a href="javascript:void(0)"

                                    onclick="return addToCart({{ $product->id }}, 'single', 'pc')"

                                    class="icon-cart d-block"></a></li>

                            <li class="overflow-hidden"><a

                                    href="{{ url('product/compare', $product->id) }}" target="_blank"

                                    class="d-block"><i class="bi bi-arrow-clockwise"></i></a></li>

                            <li class="overflow-hidden"><a href="javascript:void(0)"

                                    class="icon-search d-block"

                                    onclick="quickViewProduct({{ $product->id }})"></a></li>

                        </ul>

                        

                    </div>

                    <a href="">

                    <h5>{{ $product->name }}</h5>

                    <div class="stars">

                        <i class="bi bi-star-fill"></i>

                        <i class="bi bi-star-fill"></i>

                        <i class="bi bi-star-fill"></i>

                        <i class="bi bi-star-fill"></i>

                        <i class="bi bi-star-fill"></i>

                    </div>

                    <p class="price">${{ $product->price }}</p>

                    </a>

                </div>

            </div>

            @endforeach



        </div>

    </div>

</section>




<!-- Fratures SEC -->



<!-- -------------Features Section Start----------------- -->

<section class="featuressec">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="ftrhdng" data-aos="zoom-in" data-aos-duration="1500">

                    <h1 class="effectCenter">Special <span>Features</span></h1>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="maincircle forDesktop">

                    <div class="roundimg" data-aos="zoom-in" data-aos-duration="2000">

                        <div class="circleimg">

                            <img src="assets/images/Special fetures post.png" alt="">

                        </div>

                    </div>

                    <div class="roundcircle" data-aos="zoom-in" data-aos-duration="2000">

                        <div class="halfcirle">

                            <img src="assets/images/packet-design.png" alt="" class="w-100">

                        </div>

                    </div>



                    <div class="feacontent">
                        <div class="circlehdng it1" data-aos="fade-left">
                            <span><img src="assets/images/2.png" alt="" class="img-fluid"></span>
                            <h5>Durability</h5>

                            <p>An industrial strength element is added for maximum puncture resistance</p>

                        </div>

                        <div class="circlehdng it2" data-aos="fade-left">
                            <span><img src="assets/images/3.png" alt="" class="img-fluid"></span>
                            <h5>Odor</h5>

                            <p>An industrial strength element is added for maximum puncture resistance</p>

                        </div>

                        <div class="circlehdng it3" data-aos="fade-left">
                            <span><img src="assets/images/4.png" alt="" class="img-fluid"></span>
                            <h5>Humidity</h5>

                            <p>An industrial strength element is added for maximum puncture resistance</p>

                        </div>

                        <div class="circlehdng it4" data-aos="fade-left">
                            <span><img src="assets/images/5.png" alt="" class="img-fluid"></span>
                            <h5>UV</h5>

                            <p>An industrial strength element is added for maximum puncture resistance</p>

                        </div>

                        <div class="circlehdng it5" data-aos="fade-left">
                            <span><img src="assets/images/6.png" alt="" class="img-fluid"></span>
                            <h5>Oxygen</h5>
                            <p>An industrial strength element is added for maximum puncture resistance</p>

                        </div>

                    </div>

                </div>

                <div class="maincircle forMobile">

                    <div class="row justify-content-center">

                        <div class="col-7 col-sm-6">

                            <div class="circleimg" data-aos="zoom-in" data-aos-duration="2000">

                                <img src="assets/images/Special fetures post.png" alt="">

                            </div>

                        </div>

                    </div>    

                    <div class="clearfix"></div>

                    <div class="row feacontent justify-content-center">

                        <div class="col-md-6">

                            <div class="circlehdng it1 mt-5" data-aos="fade-up">

                                <h5>Durability</h5>

                                <p>An industrial strength element is added for maximum puncture resistance</p>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="circlehdng it2 mt-5" data-aos="fade-up">

                                <h5>Odor</h5>

                                <p>An industrial strength element is added for maximum puncture resistance</p>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="circlehdng it3 mt-5" data-aos="fade-up">

                                <h5>Humidity</h5>

                                <p>An industrial strength element is added for maximum puncture resistance</p>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="circlehdng it4 mt-5" data-aos="fade-up">

                                <h5>UV</h5>

                                <p>An industrial strength element is added for maximum puncture resistance</p>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="circlehdng it5 mt-5" data-aos="fade-up">

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

<!-- -------------Features Section End----------------- -->

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section class="dealofday">

    <div class="container">

        <div class="row" data-aos="fade-up" data-aos-duration="2000">

            <div class="col-sm-8 col-md-6">

                <h2 class="effectLeft">Shop By Categories</h2>

            </div>

            <div class="col-sm-4 col-md-6">

                <div class="btnbox">

                    <a href="#">View All <i class="bi bi-arrow-right"></i></a>

                </div>

            </div>

        </div>

        <div class="row justify-content-center">
        <div class="col-12 my-3">

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                @foreach($categories as $category)
                <div class="swiper-slide" data-aos="fade-up" data-aos-duration="3000">
                    <div class="deal-item">

                            <div class="img">

                                @if($category->category_img != null)

                                <a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}">

                                    <img src="{{ asset('category_img/'.$category->category_img) }}" alt="">

                                </a>

                                @else

                                <a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}">

                                    <img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" alt="">

                                </a>

                                @endif

                            </div>

                            <h5>{{ $category->name }}</h5>

                    </div>
                </div>
                @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
        </div>
    </div>

</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".dealofday .mySwiper", {
    slidesPerView:4,
    spaceBetween: 30,
    // autoplay: {
    // delay: 2500,
    // disableOnInteraction: false
    // },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      640: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 3
      },
      1024: {
        slidesPerView: 4
      },
    },
  });
</script>

<!-- Features SEC END -->
<section class="p-b-50">
  <div class="container">
    <div class="row">
        <div class="col-sm-6 mb-5">
            <div class="offersbox left">
                <div class="texts text-center">
                    <h3>5% To 60% OFF</h3>
                    <h4>Wholesale Discount On Bulk Orders</h4>
                    <span><a href="#" class="btn btn-dark">Order Now</a></span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-5">
            <div class="offersbox">
                <div class="texts text-center">
                    <h3>5% To 60% OFF</h3>
                    <h4>Wholesale Discount On Bulk Orders</h4>
                    <span><a href="#" class="btn btn-dark">Order Now</a></span>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>


<!-- explore -->

<section class="explore">

    <div class="container">

        <div class="sec-title" data-aos="zoom-in" data-aos-duration="1500">

            <h2 class="effectCenter">Explore <span> TerpLoc® </span>Technology</h2>

        </div>

    </div>

    <div class="expcontent">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-9  exfitm">

                    <div class="expitems" data-aos="fade-up" data-aos-duration="2500">

                        <div class="item-img">

                            <div class="img">

                                <img src="./assets/images/exp1.png" alt="">

                            </div>

                        </div>

                        <div class="item-text">

                            <div class="item-title">Terpene Preservation</div>

                            <h3>Terpenes are Essential for </br>

                                Preserving Cannabis Synergy.</h3>

                        </div>

                    </div>

                    <div class="expitems" data-aos="fade-up" data-aos-duration="2500">

                        <div class="item-text">

                            <div class="item-title">Mold Prevention</div>

                            <h3>Mold can occur early on </br>

                                in the curing process. </h3>

                        </div>

                        <div class="item-img">

                            <div class="img">

                                <img src="./assets/images/exp2.png" alt="">

                            </div>

                        </div>

                    </div>

                    <div class="expitems" data-aos="fade-up" data-aos-duration="2500">

                        <div class="item-img">

                            <div class="img">

                                <img src="./assets/images/exp3.png" alt="">

                            </div>

                        </div>

                        <div class="item-text">

                            <div class="item-title">Weight Retension</div>

                            <h3>Moisture loss is a consistent </br>

                                problem across legal markets.</h3>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- explore END -->

<!-- dealofday -->

<!-- <section class="dealofday">

    <div class="container">

        <div class="row" data-aos="fade-up" data-aos-duration="2000">

            <div class="col-sm-8 col-md-6">

                <h2>Deals of the Day</h2>

            </div>

            <div class="col-sm-4 col-md-6">

                <div class="btnbox">

                    <a href="#">View All <i class="bi bi-arrow-right"></i></a>

                </div>

            </div>

        </div>

        <div class="row py-3">

            <div class="col-md-3 my-3"  data-aos="fade-up" data-aos-duration="2500">

                <div class="deal-item">

                    <div class="img">

                        <img src="./assets/images/deal1.png" alt="">

                    </div>

                    <h5>Vaccum Seal Bags</h5>

                </div>

            </div>

            <div class="col-md-3 my-3"  data-aos="fade-up" data-aos-duration="2800">

                <div class="deal-item">

                    <div class="img">

                        <img src="./assets/images/deal2.png" alt="">

                    </div>

                    <h5>Vaccum Seal Rolls</h5>

                </div>

            </div>

            <div class="col-md-3 my-3"  data-aos="fade-up" data-aos-duration="3100">

                <div class="deal-item">

                    <div class="img">

                        <img src="./assets/images/deal3.jpg" alt="">

                    </div>

                    <h5>Clear/Black Bags</h5>

                </div>

            </div>

            <div class="col-md-3 my-3"  data-aos="fade-up" data-aos-duration="3400">

                <div class="deal-item">

                    <div class="img">

                        <img src="./assets/images/deal4.jpg" alt="">

                    </div>

                    <h5>All Black Bags</h5>

                </div>

            </div>

        </div>

    </div>

</section> -->

<section class="p-v-50 featuresSec">
  <div class="fetureHead"><h2>why choose us</h2></div>  
  <div class="container">
    <div class="row justify-content-around align-items-start">
        <div class="col-sm-4 d-flex fetureBoxes"> 
            <span><i class="fas fa-certificate"></i></span>
            <div>
                <h4>Quality</h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti </p>
            </div>
        </div>
        <div class="col-sm-4 d-flex fetureBoxes"> 
            <span><i class="fas fa-money-check-alt"></i></span>
            <div>
                <h4>Low Price</h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti </p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-4 d-flex fetureBoxes"> 
            <span><i class="far fa-clock"></i></span>
            <div>
                <h4>On Time</h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti </p>
            </div>
        </div>
        <div class="col-sm-4 d-flex fetureBoxes"> 
            <span><i class="fas fa-balance-scale-left"></i></span>
            <div>
                <h4>Compare</h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti </p>
            </div>
        </div>
    </div>
  </div>
</section>

<!-- dealofday END -->

<!-- FAQ -->

<section class="faq">

    <div class="container">

        <div class="sec-title" data-aos="zoom-in" data-aos-duration="1500">

            <h2 class="effectCenter">Frequently <span>Asked Questions</span> </h2>

        </div>

        <div class="row py-5">

            <div class="col-md-12">

                <div class="accordion" id="accordionExample">





                    @foreach($faqs as $key => $faq)

                    <div class="accordion-item"  data-aos="fade-up" data-aos-duration="">

                        <h2 class="accordion-header">

                            <button class="accordion-button" type="button" data-bs-toggle="collapse"

                                data-bs-target="#collapseOne_{{ $key }}" aria-expanded="true" aria-controls="collapseOne_{{ $key }}">

                                {!! $faq->question !!}

                            </button>

                        </h2>

                        <div id="collapseOne_{{ $key }}" class="accordion-collapse collapse @if($key == 0) show @endif"

                            data-bs-parent="#accordionExample">

                            <div class="accordion-body">

                                {!! $faq->answer !!}

                            </div>

                        </div>

                    </div>

                    @endforeach 



                </div>

                <center>
                    <div class="btnbox" data-aos="fade-up" data-aos-duration="">

                        <a href="#">View More <i class="bi bi-arrow-right"></i></a>

                    </div>
                </center>

            </div>

        </div>

    </div>

</section>

<!-- FAQ END -->



<section class="infogrsap d-none">

    <article data-icon="📊" style="--c: #ffffff; --slist: #ffffff,#ffffff,#ffffff,#ffffff"><span

            aria-hidden="true"></span>

        <h3>Terpene Preservation</h3>

        <p>Terpenes are Essential for

            Preserving Cannabis Synergy.</p>

    </article>

    <article data-icon="🙎" style="--c:  #ffffff; --slist: #ffffff,#ffffff,#ffffff,#ffffff"><span

            aria-hidden="true"></span>

        <h3>Mold Prevention</h3>

        <p>Mold can occur early on

            in the curing process.

        </p>

    </article>

    <article data-icon="📍" style="--c:  #ffffff; --slist: #ffffff,#ffffff,#ffffff,#ffffff"><span

            aria-hidden="true"></span>

        <h3>Weight Retension</h3>

        <p>Moisture loss is a consistent

            problem across legal markets.</p>

    </article>

    <!-- <article data-icon="💬" style="--c: #e35638; --slist: #b53292,#be3c68,#dc4f45,#e15822"><span

            aria-hidden="true"></span>

        <h3>lava cake</h3>

        <p>Cake cookie lemon drops muffin sugar plum. Liquorice pudding sugar plum topping macaroon pie chocolate.

        </p>

    </article>

    <article data-icon="⚙️" style="--c: #f8d602; --slist: #dc4f45,#e15822,#f48b15,#fad700"><span

            aria-hidden="true"></span>

        <h3>macaroon</h3>

        <p>Cake muffin donut chocolate cake jelly sesame snaps wafer tart pie sweet roll muffin chupa chups.</p>

    </article> -->

</section>



<!-- Tanmoy END -->



<!-- Sohail -->



<!-- ---------------Blog Section Start----------- -->



<section class="blog py-5">

    <div class="container">

        <div class="blogside">

            <div class="row">

                <div class="col-md-12">

                    <div class="hdng" data-aos="fade-up" data-aos-duration="2000">

                        <h1>Latest News Updates & Blogs</h1>

                    </div>

                </div>

            </div>

        </div>

        <div class="blogside" data-aos="zoom-in" data-aos-duration="2000">

            <div class="row mt-5">

                <div class="col-md-4">

                    <div class="blogbx">

                        <img src="assets/images/blog1.png" alt="">

                    </div>

                    <div class="content">

                        <p>December 27, 2021 - 2 Comments - By AP</p>

                        <h5>Make Listening To Music A New Dark Night Delightful Experience</h5>

                        <div class="blogbtn">

                            <a href="#">Read More</a>

                        </div>

                    </div>

                    

                </div>

                <div class="col-md-4">

                    <div class="main-blog">

                        <div class="blogbx">

                            <img src="assets/images/blog-2.png" alt="">

                        </div>

                        <div class="content">

                            <p>December 27, 2021 - 2 Comments - By AP</p>

                            <h5>Make Listening To Music A New Dark Night Delightful Experience</h5>

                            <div class="blogbtn">

                                <a href="#">Read More</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="blogbx">

                        <img src="assets/images/blog1.png" alt="">

                    </div>

                    <div class="content">

                        <p>December 27, 2021 - 2 Comments - By AP</p>

                        <h5>Make Listening To Music A New Dark Night Delightful Experience</h5>

                        <div class="blogbtn">

                            <a href="#">Read More</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<x-userFooter />