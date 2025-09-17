@extends('layout')

@section('content')
    <!--WRAPER START-->
    <div class="wraper">

        <!--KODE SAB BANNER WRAP START-->
        <div class="kode_sab_banner_wrap them_overlay">
            <!--CONTAINER START-->
            <div class="container">
                <div class="sab_banner_text">
                <h2>{!! $lc['about_header'][$lang] !!}</h2>
                    <ul class="breadcrumbs">
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li><strong>About Us</strong></li>
                    </ul>
                </div>
            </div>
            <!--CONTAINER END-->
        </div>
        <!--KODE SAB BANNER WRAP END-->

        <!--KODE MOSQUES WRAP STRAT-->
        <div class="kode_mosques_wrap">
            <!--CONTAINER STRAT-->
            <div class="container">
                <!--ROW STRAT-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="kode_mosque_row mosque">
                            <figure class="them_overlay">
                                <img src="{{ url('public/islamic/extra-images/mosque002.jpg') }}" alt="" />
                                <!-- <a data-rel="prettyPhoto" href="{{ url('public/islamic/extra-images/mosque002.jpg') }}"><i
                                        class="fa fa-clone"></i></a> -->
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="kode_mosque_text">
                            <div class="section_hdg">
                                <a href="#"><img src="{{ url('public/islamic/images/hdg-img.png') }}"
                                        alt=""></a>
                                        <h3>{!! $lc['about_header'][$lang] !!}</h3>
                                <span><i class="fa icon-building"></i></span>
                            </div>
                            <div class="kode_mosque_item">
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
