@extends('layouts.website.layout')
@section('content')


<!-- breadcrumb Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Chef Details</h1>
					<p></p>
				</div>	<!-- /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="{{ route('home') }}">Home</a></li>
					  	<li><a href="{{ route('chef') }}">Chef</a></li>
					  	<li class="active">Chef Profile</li>
					</ol>
				</div> <!-- /.col-md-8 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container-->
	</section><!-- /Section -->




	<section id="single-product">
		<div class="container">

			@if($chef)
			<div class="row">
				<div class="col-md-5">
					<div>
						<img src="{{url('')}}/website/images/chefs/{{$chef->image}}" />
					</div>

				</div> <!-- End of /.col-md-5 -->
				<div class="col-md-4">
					<div class="block">
						<div class="product-des">
							<h4>{{ $chef->name }}</h4>
							<p class="price">{{ $chef->budge }} tk. / Per hour</p>
							
							{!! $chef->description !!}
						</div>	<!-- End of /.product-des -->
					</div> <!-- End of /.block -->
				</div>	<!-- End of /.col-md-4 -->

			</div>	<!-- End of /.row -->

			<br/>
			<br/>

			<div class="row">
				<div class="col-12 col-md-6">
					<div class="card">
						<div class="card-body">
							<form action="" method="post">
								<div class="form-group mb-3">
									<input type="text" class="form-control rounded-0 shadow-none" placeholder="Your name" name="name" 
									value="{{ Auth()->User() ? Auth()->User()->name: null }}" required>
								</div>

								<div class="form-group mb-3">
									<input type="text" class="form-control rounded-0 shadow-none" placeholder="Your email" name="email"
									value="{{ Auth()->User() ? Auth()->User()->email: null }}" required>
								</div>

								<div class="form-group mb-3">
									<input type="text" class="form-control rounded-0 shadow-none" placeholder="Your phone" name="phone" required>
								</div>

								<div class="text-right">
									<button type="submit" class="btn btn-info shadow-none">Send Hire request</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			@endif


		</div>	<!-- End of /.Container -->
    </section> <!-- End of /.Single-product -->
    
    <br/>
    <br/>
    <br/>





@endsection