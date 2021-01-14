@extends('layouts.website.layout')
@section('content')


<!-- Breadcrumbs Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>BLOG</h1>
					<p>Latest News and Musings</p>
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="{{ route('home') }}">Home</a></li>
					  	<li><a href="{{ route('blog') }}">Blog</a></li>
					  	<li class="active">Single Post</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->





	@if($blog)
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9 clearfix">
					<ul class="blog-zone">
					    <li>
					        <div class="blog-icon">
					        	<i class="fa  fa-pencil"></i>
					        </div>
					        <div class="blog-box">
								<img src="{{url('')}}/website/images/blog/{{$blog->image}}">
					            
					            <div class="blog-post-body clearfix">
						            <h2>{{$blog->title}}</h2>
                                    
						            <p>{{ $blog->short_details }}</p>
									<div style="color: #000;">
										{!! $blog->details !!}
									</div>
					            </div>
					        </div>
					    </li>
					</ul>	<!-- End of /.blog-zone -->

				</div>	<!-- End of /.col-md-9 -->

				
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of /.Section -->
	@else 
		<div class="col-12 col-lg-10 m-auto text-center no-data">
			<img src="{{asset('/website/images/static/no_data.png')}}" class="img-fluid">
			<h5>Opps ! Data not found !!</h5>
			<a href="{{url('/')}}" type="button" class="btn shadow-none">Back to Home</a>
		</div>
	@endif




@endsection