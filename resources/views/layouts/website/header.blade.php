<!-- TOP HEADER Start
    ================================================== -->
	
	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i><strong>+565 975 658</strong></p>
				</div>
				<div class="col-md-5 clearfix">
					<ul class="login-cart">
						@if (Auth::User() && Auth::User()->user_type == 'user')
							<li><a href="{{ route('user.profile') }}">Profile</a></li>
						@elseif(Auth::User() && Auth::User()->user_type == 'admin')
							<li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
						@else
							<li>
								<a data-toggle="modal" data-target="#myModal" href="#">
									<i class="fa fa-user"></i>
										Login
								</a>
							</li>
						@endif
					</ul>
				</div>
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->

	
	<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Introduce Yourself</h4>
		      		</div>
			      	<div class="modal-body clearfix">

						<form action="{{ route('auth.register') }}" method="POST" id="login_form" class="std">
							@csrf 

							<fieldset>
								<h3>Create your account</h3>
								<div class="form_content clearfix">
									<p class="text">
										<label for="email">Name</label>
											<span><input placeholder="Your name" type="text" id="email" name="name" value="" class="account_input"></span>
									</p>
									<p class="text">
										<label for="email">E-mail address</label>
											<span><input placeholder="E-mail address" type="text" id="email" name="email" value="" class="account_input"></span>
									</p>
									<p class="text">
										<label for="passwd">Password</label>
											<span><input placeholder="Password" type="password" id="passwd" name="password" value="" class="account_input"></span>
									</p>
									<p class="submit">
										<button type="submit" class="btn btn-primary">Create Your Account</button>
									</p>
								</div>
							</fieldset>
						</form>
						  <form action="{{ route('auth.login') }}" method="POST" id="login_form" class="std">
							@csrf 
							<fieldset>
								<h3>Already registered?</h3>
								<div class="form_content clearfix">
									<p class="text">
									<label for="email">E-mail address</label>
										<span><input placeholder="E-mail address" type="text" id="email" name="email" class="account_input"></span>
									</p>
									<p class="text">
									<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="password" class="account_input"></span>
									</p>
									<p class="submit">
										<button type="submit" class="btn btn-success">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>	
	</section>  <!-- End of /Section -->
	


	<!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="{{ route('home') }}">
						<img src="{{ asset('website/images/website/images/logo.png') }}" alt="logo">
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->

	


	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li class="active"><a href="{{ route('home') }}">HOME</a></li>
					<li><a href="{{ route('chef') }}">CHEF</a></li>
					<li><a href="{{ route('blog') }}">BLOG</a></li>
					<li><a href="{{ route('chef.reg') }}">Are you chef ? Register</a></li>
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->