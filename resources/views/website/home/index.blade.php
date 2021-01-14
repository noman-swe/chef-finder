@extends('layouts.website.layout')
@section('content')


	<!-- SLIDER Start
    ================================================== -->


	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="nivoSlider">
						@foreach ($banners as $banner)
						<img src="{{url('')}}/website/images/banners/{{$banner->banner_image}}" alt="" />
						@endforeach
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->


	
	<!-- FEATURES Start
    ================================================== -->

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class="fa fa-ambulance"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Free Shipping</h4>
						    	<p>Lorem ipsum dolor sit amet, consectetur.</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
								<i class=" fa fa-foursquare"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Media heading</h4>
						    	<p>Lorem ipsum dolor sit amet, consectetur.</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class=" fa fa-phone"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Call Us</h4>
						    	<p>Lorem ipsum dolor sit amet, consectetur.</p>
						  </div>	<!-- End of /.media-body -->
						</div>	<!-- End of /.media -->
					</div>	<!-- End of /.block -->
				</div> <!-- End of /.col-md-4 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of section -->



	<!-- CATAGORIE Start
    ================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>OUR CHEF'S</h2>
						</div>	
					</div>	<!-- End of /.block --> 
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->


	{{-- Chef start --}}
	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="product-grid">
						<ul>
							@foreach ($chefs as $chef)
							<li>
								<div class="products">
									<a href="{{ route('chef.show', $chef->id) }}">
										<img src="{{url('')}}/website/images/chefs/{{$chef->image}}" style="max-height: 400px;">
									</a>
									<a href="{{ route('chef.show', 1) }}">
										<h4>{{ $chef->name }}</h4>
									</a>
									<p class="price">{{ $chef->budge }} tk. / Per hour</p>
									<div >
										<a class="view-link shutter" href="{{ route('chef.show', $chef->id) }}">
										<i class="fa fa-plus-circle"></i>Book Now</a>
									</div>
								</div>	<!-- End of /.products -->
							</li>
							@endforeach
							
						</ul>
					</div>	<!-- End of /.products-grid -->
	
				</div>	<!-- End of /.col-md-9 -->
			
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
	{{-- Chef end --}}

	
		<!-- CALL TO ACTION Start
    ================================================== -->

	<section id="call-to-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>Our Partners</h2>
						</div>
					</div>	<!-- End of /.block -->
					<div id="owl-example" class="owl-carousel">
						<div> <img src="{{ asset('website/images/website/images/company-1.png') }}" alt=""></div>
						<div> <img src="{{ asset('website/images/website/images/company-2.png') }}" alt=""></div>
						<div> <img src="{{ asset('website/images/website/images/company-3.png') }}" alt=""></div>
						<div> <img src="{{ asset('website/images/website/images/company-4.png') }}" alt=""></div>
						<div> <img src="{{ asset('website/images/website/images/company-5.png') }}" alt=""></div>
						<div> <img src="{{ asset('website/images/website/images/company-6.png') }}" alt=""></div>
						<div> <img src="{{ asset('website/images/website/images/company-8.png') }}" alt=""></div>
						<div> <img src="{{ asset('website/images/website/images/company-9.png') }}" alt=""></div>
					</div>	<!-- End of /.Owl-Slider -->
				</div>	<!-- End of /.col-md-12 -->
			</div> <!-- End Of /.Row -->
		</div> <!-- End Of /.Container -->
	</section>	<!-- End of Section -->
	
	


@endsection