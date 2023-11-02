<x-userHeader />

<main>
			<!-- introBannerHolder -->
			<section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/innerBanner.png') }});">
				<div class="container">
					<div class="row">
						<div class="col-12 pt-sm-10 text-center">
							<h1 class="headingIV fwEbold playfair mb-4">Service-Details</h1>
							<ul class="list-unstyled breadCrumbs d-flex justify-content-center">
								<li class="mr-2"><a href="#">Home</a></li>
								<li class="mr-2">/</li>
								<li class="active">Service-Details</li>
							</ul>
						</div>
					</div>
				</div>
			</section>


<section class="blocksec">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="blockbx">
					<div class="cinbx">
						<i class="fa fa-pagelines" aria-hidden="true"></i>
					</div>
					<h3>Utilize Vertical Space</h3>
					<p>Since rooftop gardens are often limited in space, using vertical planters and trellises can help maximize the area. This allows for more plants to be grown in a smaller space.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blockbx">
					<div class="cinbx">
						<i class="fa fa-pagelines" aria-hidden="true"></i>
					</div>
					<h3>Utilize Vertical Space</h3>
					<p>Since rooftop gardens are often limited in space, using vertical planters and trellises can help maximize the area. This allows for more plants to be grown in a smaller space.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blockbx">
					<div class="cinbx">
						<i class="fa fa-pagelines" aria-hidden="true"></i>
					</div>
					<h3>Utilize Vertical Space</h3>
					<p>Since rooftop gardens are often limited in space, using vertical planters and trellises can help maximize the area. This allows for more plants to be grown in a smaller space.</p>
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
					<h3>{{ $service->title }}</h3>

					<p>{!! $service->description !!}</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="servdetimg mb-5">
					<img src="{{ asset('admin/service/'.$service->img)}}" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="servdetimg mb-5">
					<img src="{{ asset('admin/service2/'.$service->img2)}}" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="servcnt mb-5">
					<h3>{{ $service->title2 }}</h3>
					<p>{!! $service->description2 !!}</p>
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
						<i class="fa fa-pagelines" aria-hidden="true"></i>
					</div>
					<h4>Make a Call</h4>
					<p>Since rooftop gardens are often limited in space, using vertical planters and trellises can help maximize the area. This allows for more plants to be grown in a smaller space.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="blockbx">
					<div class="cinbx">
						<i class="fa fa-pagelines" aria-hidden="true"></i>
					</div>
					<h4>Cost Estimate</h4>
					<p>Since rooftop gardens are often limited in space, using vertical planters and trellises can help maximize the area. This allows for more plants to be grown in a smaller space.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="blockbx">
					<div class="cinbx">
						<i class="fa fa-pagelines" aria-hidden="true"></i>
					</div>
					<h4>Site Visit</h4>
					<p>Since rooftop gardens are often limited in space, using vertical planters and trellises can help maximize the area. This allows for more plants to be grown in a smaller space.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="blockbx">
					<div class="cinbx">
						<i class="fa fa-pagelines" aria-hidden="true"></i>
					</div>
					<h4>Consider Irrigation</h4>
					<p>Since rooftop gardens are often limited in space, using vertical planters and trellises can help maximize the area. This allows for more plants to be grown in a smaller space.</p>
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
                            <iframe width="100%" height="350" src="{{ $service->y_video_link1 }}" title="Plants for Rooftop Garden |FREE ONLINE GARDENING COURSES | In Bengali" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                 </div>
			</div>
			<div class="col-md-6">
				<div class="vidby" style="width:100%;height:100%;">
                             <iframe width="100%" height="350" src="{{ $service->y_video_link2 }}" title="&quot;Transform Your Open Space: Best Plants for Garden, Terrace, and Balcony&quot;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                 </div>
			</div>
		</div>
	</div>
</section>

<x-userFooter />