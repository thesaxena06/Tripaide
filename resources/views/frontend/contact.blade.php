
@extends('frontend.layouts.main')
@section('main-container')
<section>

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(frontend/images/aurangabad.jpg);">
				<div class="desc animate-box">
					<h2>Contact Us.</h2>
					<span><a href="{{url('/login')}}" class="btn btn-primary btn-lg" href="#">Get Started</a></span>
				</div>
			</div>

		</div>


		<div id="fh5co-contact" class="fh5co-section animate-box">
			<div class="container">
				<form action="#">
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis placeat aut dicta, delectus laboriosam optio</p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus eum nulla nam beatae ea </li>
								<li><i class="icon-phone2"></i>+ 1235 2355 98</li>
								<li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END fh5co-contact -->
		<!-- <div id="map" class="fh5co-map"></div> -->
		<!-- END map -->


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->



</section>
@endsection

