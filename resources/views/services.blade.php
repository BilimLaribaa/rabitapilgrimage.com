@extends('layout')

@section('content')

				<!--KODE SAB BANNER WRAP START-->
				<div class="kode_sab_banner_wrap them_overlay">
					<!--CONTAINER START-->
					<div class="container">
						<div class="sab_banner_text">
							<h2>Our Services</h2>
							<ul class="breadcrumbs">
								<li><a href="#"><i class="fa fa-home"></i></a></li>
								<li><strong>Services</strong></li>
							</ul>
						</div>
					</div>
					<!--CONTAINER END-->
				</div>
				<!--KODE SAB BANNER WRAP END-->

				<!--KODE BLOG MADIUM WRAP START-->
				<div class="kode_blog_madium_wrap detail">
					<!--CONTAINER START-->
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="kode_service_des">
									<figure>
										<img src="{{url('public/islamic/extra-images/service01.jpg')}}" alt="">
									</figure>
									<div class="kode_service_text">
									<span><i class="fa icon-monuments-1"></i></span>
									<h4><a href="#">Haj and UMRAH</a></h4>
									<p>Medical Security for Haj and Umrah</p>
										<a class="right_arrow btn" href="#">Read More<i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="kode_service_des">
									<figure>
										<img src="{{url('public/islamic/extra-images/service02.jpg')}}" alt="">
									</figure>
									<div class="kode_service_text">
									<span><i class="fa fa-plane"></i></span>
									<h4><a href="#">Air tickets</a></h4>
									<p>Book Your Journey with Ease and Comfort</p>
										<a class="right_arrow btn" href="#">Read More<i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="kode_service_des">
									<figure>
										<img src="{{url('public/islamic/extra-images/service03.jpg')}}" alt="">
									</figure>
									<div class="kode_service_text">
									<span><i class="fa fa-bed"></i></span>
									<h4><a href="#">Accommodations</a></h4>
									<p>Comfortable Stays for Every Budget in Makkah and Madinah</p>
										<a class="right_arrow btn" href="#">Read More<i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="kode_service_des">
									<figure>
										<img src="{{url('public/islamic/extra-images/service04.jpg')}}" alt="">
									</figure>
									<div class="kode_service_text">
									<span><i class="fa fa-bus"></i></span>
									<h4><a href="#">Transportation</a></h4>
									<p>Easy City and Port Transportation Services</p>
										<a class="right_arrow btn" href="#">Read More<i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="kode_service_des">
									<figure>
										<img src="{{url('public/islamic/extra-images/service05.jpg')}}" alt="">
									</figure>
									<div class="kode_service_text">
									<span><i class="fa fa-suitcase"></i></span>
									<h4><a href="#">Customized Package</a></h4>
									<p>Personalized Travel Packages Just for You</p>

										<a class="right_arrow btn" href="#">Read More<i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="kode_service_des">
									<figure>
										<img src="{{url('public/islamic/extra-images/service06.jpg')}}" alt="">
									</figure>
									<div class="kode_service_text">
									<span><i class="fa fa-id-card"></i></span>
									<h4><a href="#">Visa Acquisition</a></h4>
									<p>Simplified Visa Acquisition for a Smooth Journey</p>
										<a class="right_arrow btn" href="#">Read More<i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--KODE BLOG MADIUM WRAP END-->

				<!--KODE NEWSLETTER WRAP START-->
				<div class="kode_newsletter_wrap">
					<!--CONTAINER START-->
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="kode_newsletter_des">
									<span><i class="fa fa-envelope"></i></span>
									<div class="kode_newsletter_text">
										<h5><a href="#">Newsletter Sign Up</a></h5>
										<p>For Latest Updates & For Majalis</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="kode_newsletter_form">
									<form>
										<div class="kf_commet_field">
											<input placeholder="Enter Your Email" name="url" type="text" value="" data-default="Website" size="30" required>
											<button class="medium_btn background-bg-dark">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!--CONTAINER END-->
				</div>
				<!--KODE NEWSLETTER WRAP END-->
@endsection
