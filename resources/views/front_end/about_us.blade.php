<x-userHeader />

<main>

	<!-- introBannerHolder -->

	{{-- <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/innerBanner.png') }});">

		<div class="container">

			<div class="row">

				<div class="col-12 pt-sm-10 text-center">

					<h1 class="headingIV fwEbold playfair mb-4">About-Us</h1>

					<ul class="list-unstyled breadCrumbs d-flex justify-content-center">

						<li class="mr-2"><a href="{{ url('/') }}">Home</a></li>

						<li class="mr-2">/</li>

						<li class="active">About Us</li>

					</ul>

				</div>

			</div>

		</div>

	</section> --}}





	<section class="blocksec">

		<div class="container">

			<div class="row">
				<div class="col-md-4">

					<div class="blockbx">

						<div class="cinbx">

							<i class="fa fa-pagelines" aria-hidden="true"></i>

						</div>

						<h3>Lorem Ipsum is simply dummy text</h3>

						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

					</div>

				</div>
				<div class="col-md-4">

					<div class="blockbx">

						<div class="cinbx">

							<i aria-hidden="true" class="fas fa-star"></i>

						</div>

						<h3>Lorem Ipsum is simply dummy text</h3>

						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

					</div>

				</div>
				<div class="col-md-4">

					<div class="blockbx">

						<div class="cinbx">

							<i class="fa fa-trophy" aria-hidden="true"></i>

						</div>

						<h3>Lorem Ipsum is simply dummy text</h3>

						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

					</div>

				</div>
			</div>

		</div>

	</section>



	<section class="servdetsec py-5">

		<div class="container">

			<div class="row">

				<div class="col-md-6">

					<div class="servcnt mb-5">
						<h3>Lorem Ipsum is simply dummy text</h3>
						<p>{!! $details->description !!}</p>

						<!-- <p>One of the primary benefits of rooftop gardening is the ability to grow your food. This is particularly important for urban areas with limited access to fresh produce. With a rooftop garden, you can grow fresh fruits, vegetables, and herbs that are fresh and free from pesticides and chemicals. This not only improves your diet’s nutritional value but also helps reduce your carbon footprint.</p> -->
					</div>
				</div>

				<div class="col-md-6">
					<div class="servdetimg mb-5">
						<img src="{{asset('pages/featured_img/'.$details->featured_img)}}" alt="">
					</div>
				</div>

				<div class="col-md-6">

					<div class="servdetimg mb-5">

						<img src="{{asset('pages/img2/'.$details->img2)}}" alt="">

					</div>

				</div>

				<div class="col-md-6">

					<div class="servcnt mb-5">

						<p>{!! $details->description2 !!}</p>

					</div>

				</div>

			</div>

		</div>

	</section>



	<section class="blocksec py-5">

		<div class="container">

			<header class="col-12 mainHeader mb-7 text-center">

				<h1 class="headingIV playfair fwEblod mb-4">How it Works?</h1>

				<span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('front_end/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>

			</header>

			<div class="row">

				<div class="col-md-3">

					<div class="blockbx">

						<div class="cinbx">

							<i class="fa fa-phone-square" aria-hidden="true"></i>

						</div>

						<h4>Lorem Ipsum is simply dummy text
</h4>

<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

					</div>

				</div>

				<div class="col-md-3">

					<div class="blockbx">

						<div class="cinbx">

						   <i aria-hidden="true" class="fas fa-fill"></i>

						</div>

						<h4>Lorem Ipsum is simply dummy text
</h4>

<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

					</div>

				</div>

				<div class="col-md-3">

					<div class="blockbx">

						<div class="cinbx">

							<i class="fa fa-globe" aria-hidden="true"></i>

						</div>

						<h4>Lorem Ipsum is simply dummy text
</h4>

<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

					</div>

				</div>

				<div class="col-md-3">

					<div class="blockbx">

						<div class="cinbx">

							<i aria-hidden="true" class="fas fa-hand-holding-heart"></i>

						</div>

						<h4>Lorem Ipsum is simply dummy text
</h4>

						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

					</div>

				</div>

			</div>

		</div>

	</section>



	<section class="videosec">

		<div class="container">

			<div class="row">

				<div class="col-md-6">

					<div class="vidby" style="width:100%;height:100%;">

						<iframe width="100%" height="350" src="{{ $details->youtube_link1 }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

					</div>

				</div>

				<div class="col-md-6">

					<div class="vidby" style="width:100%;height:100%;">

						<iframe width="100%" height="350" src="{{ $details->youtube_link2 }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

					</div>

				</div>

			</div>

		</div>

	</section>

	<!--<section class="landscp">-->

	<!--	<div class="container">-->

	<!--		<div class="row">-->

	<!--			<div class="col-md-12">-->

	<!--				<div class="landscp-head">-->

	<!--					<h1 Stretches for Your Benefit</h1>-->

	<!--				</div>-->

	<!--			</div>-->

	<!--		</div>-->

	<!--		<div class="row">-->

	<!--			<div class="col-md-6">-->

	<!--				<div class="landscp-content mt-5 mb-5">-->

	<!--				    <p> {!! $details->description3 !!} </p>-->

					    

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> We have added 15000 Sqft of covered showroom space to store and display various categories of Non-plant items required for horticulture, gardening, and landscaping.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> We have added 10000 Sqft of covered greenhouses to display exotic indoor plants.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> A large range of indoor plants has been added to our collection, suitable for vertical gardens.-->

						<!--<p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> A large range of succulents and cacti have been added to our collection for the first time.</p>-->

	<!--				</div>-->

	<!--			</div>-->

	<!--			<div class="col-md-6">-->

	<!--				<div class="landscp-img mt-2 mb-5">-->

	<!--					<img src="{{asset('pages/img3/'.$details->img3)}}" alt="">-->

	<!--				</div>-->

	<!--			</div>-->

	<!--		</div>-->

	<!--		<div class="row">-->

	<!--			<div class="col-md-6">-->

	<!--				<div class="landscp-img mt-2 mb-5">-->

	<!--					<img src="{{asset('pages/img4/'.$details->img4)}}" alt="">-->

	<!--				</div>-->

	<!--			</div>-->

	<!--			<div class="col-md-6">-->

	<!--				<div class="landscp-content mt-5 mb-5">-->

	<!--				    <p> {!! $details->description4 !!} </p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Over 700 types of imported and Indian ceramic pots have been added, and a new section of 2000 Sq ft of the showroom is dedicated to their display.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> We have introduced new-concept Miniature Trees, which are ideal for rooftop gardens.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Over 50 varieties of exotic tropical grafted fruit plants have been added to our earlier fruit plant range.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> 25 varieties of new boulders, gravels, and pebbles have been added to our existing collection.-->

						<!--</p>-->

	<!--				</div>-->

	<!--			</div>-->

	<!--		</div>-->

	<!--	</div>-->

	<!--	</div>-->

	<!--</section>-->

	<!--<section class="know-more">-->

	<!--	<div class="container">-->

	<!--		<div class="row text-center">-->

	<!--			<div class="col-md-12">-->

	<!--				<div class="know-more-head">-->

	<!--					<h1>Know More</h1>-->

	<!--				</div>-->

	<!--			</div>-->

	<!--		</div>-->

	<!--		<div class="row">-->

	<!--			<div class="col-md-6">-->

	<!--				<div class="know-more-content mt-5 mb-5">-->

					    

	<!--				    <p>{!! $details->description5 !!}</p>-->

					    

					    

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> is a garden center and day trip destination for plant lovers in Kolkata, India. It is located in Shamukpota near Bakrahat, about 11km away from Kolkata by road. was established in 2007 by gardening expert Dinesh Chandra Rawat, and claims to be India’s first garden center.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> has a wide variety of plants, including trees, shrubs, flowers, and herbs. They also have a store for all your essential and quirky gardening equipment and accessories. In addition, offers a variety of gardening services, such as landscaping, plant care, and pest control.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> is a great place to spend a leisurely day. You can wander through the gardens, admire the plants, and learn more about gardening. You can also purchase plants, gardening supplies, and landscaping services. is a great place to find everything you need to create a beautiful garden.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Here are some of the things you can do at:</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Browse the wide variety of plants, including trees, shrubs, flowers, and herbs.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Purchase gardening supplies, such as pots, soil, fertilizer, and tools.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Get advice from the gardening experts on how to care for your plants.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Take a gardening class to learn more about gardening.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Hire a professional landscaper to design and create a beautiful garden for you.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> Enjoy a delicious meal at the on-site restaurant.</p>-->

						<!--<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> is a great place to learn about gardening, purchase plants and supplies, and get advice from the experts. It is also a great place to relax and enjoy the beauty of nature.</p>-->

	<!--				</div>-->

	<!--			</div>-->

	<!--			<div class="col-md-6">-->

	<!--				<div class="green-tree">-->

	<!--					<img src="{{asset('pages/img5/'.$details->img5)}}" alt="">-->

	<!--				</div>-->

	<!--			</div>-->

	<!--		</div>-->

	<!--	</div>-->

	<!--</section>-->

	

	</main>

<x-userFooter />