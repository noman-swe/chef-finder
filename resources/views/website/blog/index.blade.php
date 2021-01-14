@extends('layouts.website.layout')
@section('content')


	<!-- Breadcrumbs Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>BLOG</h1>
					<p>Latest News</p>
				</div>	<!-- End of /.col-md-4 -->	
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="{{ route('home') }}">Home</a></li>
					  	<li class="active">Blog</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->


	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 m-auto clearfix">
					<ul class="blog-zone">

						@foreach ($blogs as $blog)
					    <li>
					        <div class="blog-icon">
					        	<i class="fa fa-pencil"></i>
					        </div>
					        <div class="blog-box">
					        	<img src="{{url('')}}/website/images/blog/{{$blog->image}}" alt="">
					            
					            <div class="blog-post-body clearfix">
						            <a href="{{ route('blog.show', $blog->id) }}">
					            		<h2>{{$blog->title}}</h2>
						            </a>
									<p>{{ Illuminate\Support\Str::limit($blog->short_details, 120) }}</p>
						            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-default btn-transparent pull-right" role="button">
								        <span>Read More</span>
								    </a>
					            </div>
					        </div>	<!-- End of /.blog-box -->
                        </li>
                        @endforeach

                        
					  </ul>	<!-- End of /.blog-zone -->


				</div>	<!-- End of /.col-12 -->

			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Blog -->

@endsection