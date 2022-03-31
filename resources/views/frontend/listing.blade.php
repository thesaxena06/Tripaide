
@extends('frontend.layouts.main')
@section('main-container')
<section>

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(frontend/images/munnar.jpg);">
				<div class="desc animate-box">
					<h2>Explore the Places</h2>
					<span><a href="{{url('/login')}}" class="btn btn-primary btn-lg" href="#">Get Started</a></span>
				</div>
			</div>

		</div>


		<div class="fh5co-listing">
			<div class="container">
				<div class="row">
					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/jodhpur.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Jodhpur</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/delhi.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Delhi</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/jaipur.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Jaipur</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<!-- END 3 row -->

					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/jaisalmer.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Jaisalmer</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/shimla.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Shimla</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/kerela.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Kerela</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<!-- END 3 row -->

					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/madurai.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Madurai</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/hyderabad.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Hyderabad</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/chennai.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Chennai</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<!-- END 3 row -->

					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/varanasi.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Varanasi</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/west-bangal.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>West Bengal</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="{{url('frontend/images/mumbai.jpg')}}"  class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Mumbai</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<!-- END 3 row -->

				</div>
			</div>
		</div>



	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->


</section>
@endsection
