@extends('layouts.website.layout')
@section('content')

<section id="topic-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Shop</h1>
                <p>A Bunch Of Products</p>
            </div>	<!-- End of /.col-md-4 -->
            <div class="col-md-8 hidden-xs">
                <ol class="breadcrumb pull-right">
                      <li><a href="{{ route('home') }}">Home</a></li>
                      <li class="active">Chef</li>
                </ol>
            </div>	<!-- End of /.col-md-8 -->
        </div>	<!-- End of /.row -->
    </div>	<!-- End of /.container -->
</section>	<!-- End of /#Topic-header -->



<!-- PRODUCTS Start
================================================== -->

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
                                <a href="{{ route('chef.show', $chef->id) }}">
                                    <h4>{{ $chef->name }}</h4>
                                </a>
                                <p class="price">{{ $chef->budge }} tk. / Per hour</p>
                                <div >
                                    <p>Rating 5 / {{ $chef->id / 10 }}</p>
                                    <a class="view-link shutter" href="{{ route('chef.show', $chef->id) }}">
                                    <i class="fa fa-plus-circle"></i>Book Now</a>
                                </div>
                            </div>	<!-- End of /.products -->
                        </li>
                        @endforeach
                        <!--  ... -->
                    </ul>
                </div>	<!-- End of /.products-grid -->

            </div>	<!-- End of /.col-md-9 -->
        
        </div>	<!-- End of /.row -->
    </div>	<!-- End of /.container -->
</section>	<!-- End of Section -->





@endsection