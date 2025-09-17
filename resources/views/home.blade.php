@extends('layout')

@section('content')



<!-- KODE BANNER WRAP START -->

<div class="kode_banner_wrap">
    <ul class="bxslider">

    <li>
        <figure class="them_overlay">
            <img style="height: 100vh; object-fit: cover;" src="{{ url('public/home-bg-01.png') }}" alt="">
            <div class="kode_banner_text">
                <div class="mediume_text wow">{!! $lc['Slider_1_header'][$lang] !!}</div>
                <div class="mediume_text wow">{!! $lc['Slider_1_subheader'][$lang] !!}</div>
                <div class="small_text wow">{!! $lc['Slider_1_subtitle'][$lang] !!}</div>
                <div class="koed_banner_btn wow">
                    <a class="medium_btn border margin-right-1 btn_hover" href="#">Read More</a>
                    <a class="medium_btn border btn_hover" href="#">Contact us</a>
                </div>
            </div>
        </figure>
    </li>

    <li>
        <figure class="them_overlay">
            <img style="height: 100vh; object-fit: cover;" src="{{ url('public/home-bg-02.png') }}" alt="">
            <div class="kode_banner_text">
                <div class="mediume_text wow">{!! $lc['Slider_2_header'][$lang] !!}</div>
                <div class="mediume_text wow">{!! $lc['Slider_2_subheader'][$lang] !!}</div>
                <div class="small_text wow">{!! $lc['Slider_2_subtitle'][$lang] !!}</div>
                <div class="koed_banner_btn wow">
                    <a class="medium_btn border margin-right-1 btn_hover" href="#">Read More</a>
                    <a class="medium_btn border btn_hover" href="#">Contact us</a>
                </div>
            </div>
        </figure>
    </li>

    <li>
        <figure class="them_overlay">
            <img style="height: 100vh; object-fit: cover;" src="{!! url('public/home-bg-03.png') !!}" alt="">
            <div class="kode_banner_text">
                <div class="mediume_text wow">{!! $lc['Slider_3_header'][$lang] !!}</div>
                <div class="mediume_text wow">{!! $lc['Slider_3_subheader'][$lang] !!}</div>
                <div class="small_text wow">{!! $lc['Slider_3_subtitle'][$lang] !!}</div>
                <div class="koed_banner_btn wow">
                    <a class="medium_btn border margin-right-1 btn_hover" href="#">Read More</a>
                    <a class="medium_btn border btn_hover" href="#">Contact us</a>
                </div>
            </div>
        </figure>
    </li>
</ul>


        <div id="bx-pager" class="pager_link">
            <a data-slide-index="0" href="#"><img src="{{ url('public/home-bg-01.png') }}" alt="" /></a>
            <a data-slide-index="1" href="#"><img src="{{ url('public/home-bg-02.png') }}" alt="" /></a>
            <a data-slide-index="2" href="#"><img src="{{ url('public/home-bg-03.png') }}" alt="" /></a>
        </div>
    </div>
    <!--KODE BANNER WRAP END-->

    <!--KODE MOSQUES WRAP STRAT-->
    <div class="kode_mosques_wrap">
        <!--CONTAINER STRAT-->
        <div class="container">
            <!--ROW STRAT-->
            <div class="row">
                <div class="col-md-6">
                    <div class="kode_mosque_row">
                        <div class="kode_mosque_des">
                            <div class="kode_mosque_fig">
                                <figure class="them_overlay">
                                    <img src="{{ url('public/islamic/extra-images/mosque003.jpg') }}" alt="" style="object-fit:cover; height:250;width:255;" />
                                    <figcaption>
                                        <!-- <h6><a href="#">Madrasa in Istanbul</a></h6> -->
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="kode_mosque_fig">
                                <figure class="them_overlay">
                                    <img src="{{ url('public/islamic/extra-images/mosque002.jpg') }}" alt=""  style="object-fit:contain;width:255;" />
                                    <figcaption>
                                        <!-- <h6><a href="#">Madrasa in Istanbul</a></h6> -->
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="kode_mosque_des">
                            <div class="kode_mosque_fig">
                                <figure class="them_overlay">
                                <!-- extra-images/mosque2.jpg -->
                                    <img src="{{ url('public/islamic/extra-images/mosque001.jpg') }}" style="object-fit:cover; height:452;width:265;" />
                                    <figcaption>
                                        <!-- <h6><a href="#">Madrasa in Istanbul</a></h6> -->
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" >
                    <div class="kode_mosque_text">
                        <div class="section_hdg">
                            <a href="#"><img src="{{ url('public/islamic/images/hdg-img.') }}png" alt=""></a>
                            <h3>{!! $lc['about_header'][$lang] !!}</h3>
                            <span><i class="fa icon-building"></i></span>
                        </div>
                        <div class="kode_mosque_item">
                            <!-- <p>{!! $lc['about_desc'][$lang] !!}</p> -->
                            <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">{!! $lc['about_desc'][$lang] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--ROW END-->
        </div>
        <!--CONTAINER END-->
    </div>
    <!--KODE MOSQUES WRAP END-->

    <!--KODE PILLARS WRAP START-->
    <div class="kode_pillars_wrap them_overlay" style="transition: all 0.3s ease-in-out; background-image: url({{ url('public/explore/03.jpg') }});">
        <!--CONTAINER START-->
        <div class="container">
            <!--SECTION HDG START-->
            <div class="section_hdg hdg_2" dir="rtl">
                <a href="#"><img src="{{ url('public/islamic/images/hdg-img-2.png') }}" alt=""></a>
                <h3>{!! $lc['site_heading'][$lang] !!}</h3>
                <span><i class="fa icon-building"></i></span>
            </div>
            <!--SECTION HDG END-->
            <div class="kode_pillars_row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs kode_pillars_item">
                            <li>
                                <a class="left_bottom hvr-ripple-out pillar-tabs"
                                    data-bg = "{{ url('public/explore/01.jpg') }}" href="#tab"
                                    data-toggle="tab"><span><i class="fa icon-building"></i></span>
                                    <h6>{!! $lc['site_subheading1'][$lang] !!}</h6>
                                </a>
                            </li>
                            <li><a style=" margin-left: -25px;" class="left_center hvr-ripple-out  pillar-tabs"
                                    data-bg = "{{ url('public/explore/02.jpg') }}" href="#tab1"
                                    data-toggle="tab"><span><i class="fa icon-building"></i></span>
                                    <h6>{!! $lc['site_subheading2'][$lang] !!}</h6>
                                </a>
                            </li>
                            <li class="active">
                                <a class="center hvr-ripple-out pillar-tabs"
                                    data-bg = "{{ url('public/explore/03.jpg') }}" href="#tab2"
                                    data-toggle="tab"><span><i class="fa icon-building"></i></span>
                                    <h6>{!! $lc['site_subheading3'][$lang] !!}</h6>
                                </a>
                            </li>
                            <li>
                                <a style="margin-right: -25px;" class="right_center hvr-ripple-out  pillar-tabs"
                                    data-bg = "{{ url('public/explore/04.jpg') }}" href="#tab3"
                                    data-toggle="tab"><span><i class="fa icon-building"></i></span>
                                    <h6>{!! $lc['site_subheading4'][$lang] !!}</h6>
                                </a>
                            </li>
                            <li>
                                <a class="right_bottom hvr-ripple-out  pillar-tabs"
                                    data-bg = "{{ url('public/explore/05.jpg') }}" href="#tab4"
                                    data-toggle="tab"><span><i class="fa icon-building"></i></span>
                                    <h6>{!! $lc['site_subheading5'][$lang] !!}</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in" id="tab">
                                <div class="kode_pillars_text">
                                    <span><i class="fa icon-building"></i></span>
                                    <h4>{!! $lc['site_subheading1'][$lang] !!}</h4>
                                    <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">{!! $lc['site_subheading1_desc'][$lang] !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="tab1">
                                <div class="kode_pillars_text">
                                    <span><i class="fa icon-building"></i></span>
                                    <h4>{!! $lc['site_subheading2'][$lang] !!}</h4>
                                    <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">{!! $lc['site_subheading2_desc'][$lang] !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade in active" id="tab2">
                                <div class="kode_pillars_text">
                                    <span><i class="fa icon-building"></i></span>
                                    <h4>{!! $lc['site_subheading3'][$lang] !!}</h4>
                                    <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">{!! $lc['site_subheading3_desc'][$lang] !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="tab3">
                                <div class="kode_pillars_text">
                                    <span><i class="fa icon-building"></i></span>
                                    <h4>{!! $lc['site_subheading4'][$lang] !!}</h4>
                                    <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">{!! $lc['site_subheading4_desc'][$lang] !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="tab4">
                                <div class="kode_pillars_text">
                                    <span><i class="fa icon-building"></i></span>
                                    <h4>{!! $lc['site_subheading5'][$lang] !!}</h4>
                                    <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">{!! $lc['site_subheading5_desc'][$lang] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--CONTAINER END-->
    </div>

    <script>
        $(".pillar-tabs").click(function(e) {

            $('.kode_pillars_wrap').css('background-image',`url(${$(this).attr('data-bg')})`);
        })
    </script>
    <!--KODE PILLARS WRAP END-->




    <!--KODE SERVICES WRAP START-->
    <div class="kode_services_wrap">
        <!--CONTAINER START-->
        <div class="container">
            <!--SECTION HDG START-->
            <div class="section_hdg hdg_2 hdg_3">
                <a href="#"><img src="{{ url('public/islamic/images/hdg-img.') }}png" alt=""></a>
                <h3>Our Services</h3>
                <span><i class="fa icon-building"></i></span>
            </div>
            <!--SECTION HDG END-->
            <div class="row">
    <div class="col-md-4 col-sm-6">
        <div class="kode_service_des">
            <figure>
                <img src="{{ url('public/islamic/extra-images/service.jpg') }}" alt="">
            </figure>
            <div class="kode_service_text">
               <span><i class="fa icon-monuments-1"></i></span>
                <h4><a href="#">Haj and UMRAH</a></h4>
                <p>Medical Security for Haj and Umrah</p>
                <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="kode_service_des">
            <figure>
                <img src="{{ url('public/islamic/extra-images/service1.jpg') }}" alt="">
            </figure>
            <div class="kode_service_text">
                <span><i class="fa fa-plane"></i></span>
                <h4><a href="#">Air tickets</a></h4>
                <p>Book Your Journey with Ease and Comfort</p>
                <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="kode_service_des">
            <figure>
                <img src="{{ url('public/islamic/extra-images/service2.jpg') }}" alt="">
            </figure>
            <div class="kode_service_text">
                <span><i class="fa fa-bed"></i></span>
                <h4><a href="#">Accommodations</a></h4>
                <p>Comfortable Stays for Every Budget in Makkah and Madinah</p>
                <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="kode_service_des">
            <figure>
                <img src="{{ url('public/islamic/extra-images/service3.jpg') }}" alt="">
            </figure>
            <div class="kode_service_text">
                <span><i class="fa fa-bus"></i></span>
                <h4><a href="#">Transportation</a></h4>
                <p>Easy City and Port Transportation Services</p>
                <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="kode_service_des">
            <figure>
                <img src="{{ url('public/islamic/extra-images/service4.jpg') }}" alt="">
            </figure>
            <div class="kode_service_text">
            <span><i class="fa fa-suitcase"></i></span>
                <h4><a href="#">Customized Package</a></h4>
                <p>Personalized Travel Packages Just for You</p>
                <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="kode_service_des">
            <figure>
                <img src="{{ url('public/islamic/extra-images/service5.jpg') }}" alt="">
            </figure>
            <div class="kode_service_text">
                <span><i class="fa fa-id-card"></i></span>
                <h4><a href="#">Visa Acquisition</a></h4>
                <p>Simplified Visa Acquisition for a Smooth Journey</p>
                <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="service_btn">
            <a class="medium_btn background-bg-dark btn_hover" href="#">View All Services</a>
        </div>
    </div>
</div>

        </div>
        <!--CONTAINER END-->
    </div>
    <!--KODE SERVICES WRAP END-->


    <!--KODE GALLERY3 WRAP START-->
    <div class="kode_gallery3_wrap wrap_2">
        <!--CONTAINER START-->
        <div class="container">
            <!--SECTION HDG START-->
            <div class="section_hdg hdg_2 hdg_3">
                <a href="#"><img src="{{ url('public/islamic/images/hdg-img.') }}png" alt=""></a>
                <h3>Gallery</h3>
                <span><i class="fa icon-building"></i></span>
            </div>
            <!--SECTION HDG END-->
            <div class="gallery-slide">
                <div>
                    <div class="kode_gallery3_row">
                        <div class="kode_gallery3_des">
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                <a href="{{ url('public/islamic/certifucates/2024.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ url('public/islamic/certifucates/2024.jpg') }}" alt="" style="height:247; width:374;">
                                </a>
                                </figure>
                            </div>
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                <a href="{{ url('public/islamic/certifucates/2022.jpg')}}" data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ url('public/islamic/certifucates/2022.jpg') }}" alt="" style="height:247; width:374;">
                                </a>
                                </figure>
                            </div>
                        </div>
                        <div class="kode_gallery3_fig fig_2">
                            <figure class="them_overlay">
                            <a href="{{ url('public/islamic/certifucates/2019.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
                                <img src="{{ url('public/islamic/certifucates/2019.jpg') }}" alt="" style="height:500; width:349;">
                            </a>
                            </figure>
                        </div>
                        <div class="kode_gallery3_des">
                            <div class="kode_gallery3_fig">
                            <figure class="them_overlay">
                                <a href="{{ url('public/islamic/certifucates/2018.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ url('public/islamic/certifucates/2018.jpg') }}" alt="" style="height:247; width:374;">
                                </a>
                            </figure>
                            </div>
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                <a href="{{ url('public/islamic/certifucates/2017.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ url('public/islamic/certifucates/2017.jpg') }}" alt="" style="height:247; width:374;">
                                </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="kode_gallery3_row">
                        <div class="kode_gallery3_des">
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                    <!-- <img src="{{ url('public/islamic/certifucates/2024.jpg') }}" alt=""> -->
                                    <img src="{{ url('public/islamic/certifucates/2016.jpg') }}" alt="" style="height:247; width:374;">                                </figure>
                            </div>
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                    <!-- <img src="{{ url('public/islamic/extra-images/member_g1.jpg') }}" alt=""> -->
                                    <img src="{{ url('public/islamic/certifucates/2015.jpg') }}" alt="" style="height:247; width:374;">                                </figure>
                            </div>
                        </div>
                        <div class="kode_gallery3_fig fig_2">
                            <figure class="them_overlay">
                                <!-- <img src="{{ url('public/islamic/extra-images/member_g2.jpg') }}" alt=""> -->
                                <img src="{{ url('public/islamic/certifucates/2014.jpg') }}" alt="" style="height:500; width:349;">
                            </figure>
                        </div>
                        <div class="kode_gallery3_des">
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                    <!-- <img src="{{ url('public/islamic/extra-images/member_g.jpg') }}" alt=""> -->
                                    <img src="{{ url('public/islamic/certifucates/2011.jpg') }}" alt="" style="height:247; width:374;"> <!-- <img src="{{ url('public/islamic/extra-images/member_g1.jpg') }}" alt=""> -->
                                </figure>
                            </div>
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                    <!-- <img src="{{ url('public/islamic/extra-images/member_g1.jpg') }}" alt=""> -->
                                    <img src="{{ url('public/islamic/certifucates/2010.jpg') }}" alt="" style="height:247; width:374;">                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="kode_gallery3_row">
                        <div class="kode_gallery3_des">
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                    <!-- <img src="{{ url('public/islamic/extra-images/member_g.jpg') }}" alt=""> -->
                                    <img src="{{ url('public/islamic/certifucates/2009.jpg') }}" alt="" style="height:247; width:374;">                                </figure>
                            </div>
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                    <!-- <img src="{{ url('public/islamic/extra-images/member_g1.jpg') }}" alt=""> -->
                                    <img src="{{ url('public/islamic/certifucates/2008.jpg') }}" alt="" style="height:247; width:374;">                                </figure>
                            </div>
                        </div>
                        <div class="kode_gallery3_fig fig_2">
                            <figure class="them_overlay">
                                <!-- <img src="{{ url('public/islamic/extra-images/member_g2.jpg') }}" alt=""> -->
                                <img src="{{ url('public/islamic/certifucates/2007.jpg') }}" alt="" style="height:500; width:349;">
                            </figure>
                        </div>
                        <div class="kode_gallery3_des">
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                    <!-- <img src="{{ url('public/islamic/extra-images/member_g.jpg') }}" alt=""> -->
                                    <img src="{{ url('public/islamic/certifucates/2006.jpg') }}" alt="" style="height:247; width:374;"> <!-- <img src="{{ url('public/islamic/extra-images/member_g1.jpg') }}" alt=""> -->
                                </figure>
                            </div>
                            <div class="kode_gallery3_fig">
                                <figure class="them_overlay">
                                    <!-- <img src="{{ url('public/islamic/extra-images/member_g1.jpg') }}" alt=""> -->
                                    <img src="{{ url('public/islamic/certifucates/2005.jpg') }}" alt="" style="height:247; width:374;">                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--CONTAINER END-->
    </div>
    <!--KODE GALLERY3 WRAP END-->

	<!--KODE BLOG MADIUM WRAP START-->

    <!--<div class="kode_team_wrap">
			<div class="container">
				<div class="kode_team_detail_row">
					<div class="row">
						<div class="col-md-3">
							<div class="kode_team_fig">
								<figure class="them_overlay">
									<img src="{{url('public/islamic/extra-images/team-detail.jpg')}}" alt="">
								</figure>
								<div class="siderbar_categories sidebar_bg">
									<h4 class="sidebar_title title_2">Contact US</h4>
									<div class="kode_side_contact_text">
										<p>We here to help in anything you need. Call us
										on below number.</p>
										<a href="#"><span><i class="fa fa-phone"></i></span>+92 - 334 - 2797084</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="kode_overview">
								<div class="kode_view_row">
									<div class="kode_view_des">
										<h3>Maryam Allie</h3>
										<span>Senior Manager</span>
									</div>
									<ul class="widget_social_icon">
										<li><a class="hvr-ripple-out" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="hvr-ripple-out" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="hvr-ripple-out" href="#"><i class="fa fa-tumblr"></i></a></li>
										<li><a class="hvr-ripple-out" href="#"><i class="fa fa-vimeo"></i></a></li>
									</ul>
								</div>
								<div class="kode_view_text">
									<h4 class="sidebar_title title_2">Over View</h4>
									<p>em ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua ut labore et dolore magna aliquyam era.</p>
								</div>
								<div class="kode_team_profile">
									<h4 class="sidebar_title title_2">Personal Profile</h4>

									<div class="kode_detail_date">
										<ul class="event_detail_list">
											<li>
												<a href="#">
													<span class="icon-symbol">
														<span class="path1"></span><span class="path2"></span>
													</span>
													<span>Nationality :</span>   United States
												</a>
											</li>
											<li>
												<a href="#">
													<span class="icon-arrows-3">
														<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span><span class="path31"></span><span class="path32"></span><span class="path33"></span><span class="path34"></span><span class="path35"></span><span class="path36"></span>
													</span>
													<span>SExperience :</span>    08 Year
												</a>
											</li>
											<li><a href="#"><i class="fa fa-envelope"></i><span>Email : </span>marri@islamic.com</a></li>
										</ul>
										<ul class="event_detail_list list_2">
											<li>
												<a href="#">
													<span class="icon-education">
														<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
													</span>
													<span>Degree : </span>  Masters In Islamiat
												</a>
											</li>
											<li><a href="#"><i class="fa fa-phone"></i><span>Phone :  </span>    +92 - 334 - 2797084</a></li>
											<li><a href="#"><i class="fa fa-map-signs"></i><span>Web :   </span>    www.domain.com</a></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

	<!--KODE BLOG MADIUM WRAP END-->


<!--KODE BLOG WRAP START-->
<div class="kode_blog_wrap">
    <!--CONTAINER START-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="kode_blog_row">
                    <!--SECTION HDG START-->
                    <div class="section_hdg">
                        <a href="#"><img src="images/hdg-img.png" alt=""></a>
                        <h3>Our Blog</h3>
                        <span><i class="fa icon-building"></i></span>
                    </div>
                    <!--SECTION HDG END-->

                    <!-- Dynamic Blog List START -->
                    <div class="kode_blog_list">
                        <ul>
                            @foreach ($blogs as $row)
                            <li>
                                <div class="kode_blog_fig">
                                    <figure class="them_overlay">
                                        <img src="{{ url('public/blog/' . $row->blog_image) }}" alt="{{ $row->blog_title }}" style="width: 200px; height: 142px; object-fit: cover;">
                                        <!-- <a class="plus_icon hvr-ripple-out" data-rel="prettyPhoto" href="{{ url('public/blog/' . $row->blog_image) }}"><i class="fa fa-plus"></i></a> -->
                                    </figure>
                                    <div class="kode_blog_text">
                                        <ul class="kode_meta">
                                            <li><a href="#"><i class="fa fa-calendar"></i>{{ date('d M , Y', strtotime($row->created_at)) }}</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By Rabitta Teams</a></li>
                                        </ul>
                                        <h5>{{ $row->blog_title }}</h5>
                                        <ul class="kode_meta meta_2">
                                            <li><a href="#"><i class="fa fa-eye"></i>{{ $row->views_count ?? '0' }} Views</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Dynamic Blog List END -->

                </div>
            </div>
            <div class="col-md-4">
							
							</div>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE BLOG WRAP END-->




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
                                <input placeholder="Enter Your Email" name="url" type="text" value=""
                                    data-default="Website" size="30" required>
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
