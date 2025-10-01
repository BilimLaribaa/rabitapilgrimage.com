@extends('layout')

@section('content')
    <!-- WRAPER START -->
    <div class="wraper">

        <!-- KODE SAB BANNER WRAP START -->
        <div class="kode_sab_banner_wrap them_overlay">
            <!-- CONTAINER START -->
            <div class="container">
                <div class="sab_banner_text">
                    <h2>{!! $lc['about_header'][$lang] !!}</h2>
                    <ul class="breadcrumbs">
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li><strong>About Us</strong></li>
                    </ul>
                </div>
            </div>
            <!-- CONTAINER END -->
        </div>
        <!-- KODE SAB BANNER WRAP END -->

        <!-- KODE MOSQUES WRAP START -->
        <div class="kode_mosques_wrap">
            <!-- CONTAINER START -->
            <div class="container">

                <!-- ROW START -->
                <div class="row">
                    <!-- Image Column -->
                    <div class="col-md-6">
                        <div class="kode_mosque_row mosque">
                            <figure class="them_overlay">
                                <img src="{{ url('public/islamic/extra-images/mosque002.jpg') }}" alt="" />
                                <!-- <a data-rel="prettyPhoto" href="{{ url('public/islamic/extra-images/mosque002.jpg') }}"><i class="fa fa-clone"></i></a> -->
                            </figure>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="col-md-6">
                        <div class="kode_mosque_text">
                            <div class="section_hdg">
                                <a href="#"><img src="{{ url('public/islamic/images/hdg-img.png') }}" alt=""></a>
                                <h3>{!! $lc['about_header'][$lang] !!}</h3>
                                <span><i class="fa icon-building"></i></span>
                            </div>
                            <div class="kode_mosque_item">
                                <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                    {!! $lc['about_desc'][$lang] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW END -->

                <!-- MISSION & VISION SECTION START -->
                <div class="kode_mosques_wrap mt-4">
                    <div class="container">
                        <div class="row">
                            <!-- Mission Statement -->
                            <div class="col-md-6">
                                <div class="kode_mosque_text">
                                    <div class="section_hdg">
                                        <h3>{!! $lc['mission_header'][$lang] !!}</h3>
                                        <span><i class="fa icon-building"></i></span>
                                    </div>
                                    <div class="kode_mosque_item">
                                        <ul dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            @foreach ($lc['mission_statement'] as $point)
                                                <li>{{ $point[$lang == 'ur' ? 1 : 0] }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Vision Statement -->
                            <div class="col-md-6">
                                <div class="kode_mosque_text">
                                    <div class="section_hdg">
                                        <h3>{!! $lc['vision_header'][$lang] !!}</h3>
                                        <span><i class="fa icon-building"></i></span>
                                    </div>
                                    <div class="kode_mosque_item">
                                        <ul dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            @foreach ($lc['vision_statement'] as $point)
                                                <li>{{ $point[$lang == 'ur' ? 1 : 0] }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MISSION & VISION SECTION END -->

                <!-- FOUNDER SECTION START -->
                <div class="container">
                    <div class="row">

                        <!-- Founder Image -->
                        <div class="col-md-6">
                            <div class="kode_mosque_row mosque">
                             <div class="section_hdg">
                                    <h3>{!! $lc['founder_name_1'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <figure class="them_overlay">
                                    <img src="{{ url('public/islamic/extra-images/mosque002.jpg') }}" alt="Founder Image" />
                                </figure>
                            </div>
                        </div>

                        <!-- Founder Content -->
                        <div class="col-md-6">
                            <div class="kode_mosque_text">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_header_1'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <div class="kode_mosque_item">
                                    @foreach($lc['about_founder_1'] as $paragraph)
                                        <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            {{ $paragraph[$lang == 'ur' ? 1 : 0] }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- FOUNDER SECTION END -->

                <!-- FOUNDER 2 SECTION START -->
                <div class="container mt-5">
                    <div class="row">

                        <!-- Founder 2 Image -->
                        <div class="col-md-6">
                            <div class="kode_mosque_row mosque">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_name_2'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <figure class="them_overlay">
                                    <img src="{{ url('public/islamic/extra-images/mosque002.jpg') }}" alt="Founder Image" />
                                </figure>
                            </div>
                        </div>

                        <!-- Founder 2 Content -->
                        <div class="col-md-6">
                            <div class="kode_mosque_text">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_header_2'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <div class="kode_mosque_item">
                                    @foreach($lc['about_founder_2'] as $paragraph)
                                        <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            {{ $paragraph[$lang == 'ur' ? 1 : 0] }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- FOUNDER 2 SECTION END -->

                <!-- FOUNDER 3 SECTION START -->
                <div class="container mt-5">
                    <div class="row">

                        <!-- Founder 3 Image -->
                        <div class="col-md-6">
                            <div class="kode_mosque_row mosque">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_name_3'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <figure class="them_overlay">
                                    <img src="{{ url('public/islamic/extra-images/mosque002.jpg') }}" alt="Founder Image" />
                                </figure>
                            </div>
                        </div>

                        <!-- Founder 3 Content -->
                        <div class="col-md-6">
                            <div class="kode_mosque_text">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_header_3'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <div class="kode_mosque_item">
                                    @foreach($lc['about_founder_3'] as $paragraph)
                                        <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            {{ $paragraph[$lang == 'ur' ? 1 : 0] }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- FOUNDER 3 SECTION END -->

                <!-- FOUNDER SECTION START -->
                <div class="container">
                    <div class="row">

                        <!-- Founder Image -->
                        <div class="col-md-6">
                            <div class="kode_mosque_row mosque">
                             <div class="section_hdg">
                                    <h3>{!! $lc['founder_name_1'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <figure class="them_overlay">
                                    <img src="{{ url('public/islamic/extra-images/mosque002.jpg') }}" alt="Founder Image" />
                                </figure>
                            </div>
                        </div>

                        <!-- Founder Content -->
                        <div class="col-md-6">
                            <div class="kode_mosque_text">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_header_1'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <div class="kode_mosque_item">
                                    @foreach($lc['about_founder_1'] as $paragraph)
                                        <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            {{ $paragraph[$lang == 'ur' ? 1 : 0] }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- FOUNDER SECTION END -->

                <!-- FOUNDER 2 SECTION START -->
                <div class="container mt-5">
                    <div class="row">

                        <!-- Founder 2 Image -->
                        <div class="col-md-6">
                            <div class="kode_mosque_row mosque">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_name_2'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <figure class="them_overlay">
                                    <img src="{{ url('public/islamic/extra-images/mosque002.jpg') }}" alt="Founder Image" />
                                </figure>
                            </div>
                        </div>

                        <!-- Founder 2 Content -->
                        <div class="col-md-6">
                            <div class="kode_mosque_text">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_header_2'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <div class="kode_mosque_item">
                                    @foreach($lc['about_founder_2'] as $paragraph)
                                        <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            {{ $paragraph[$lang == 'ur' ? 1 : 0] }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- FOUNDER 2 SECTION END -->

                <!-- FOUNDER 3 SECTION START -->
                <div class="container mt-5">
                    <div class="row">

                        <!-- Founder 3 Image -->
                        <div class="col-md-6">
                            <div class="kode_mosque_row mosque">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_name_3'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <figure class="them_overlay">
                                    <img src="{{ url('public/islamic/extra-images/mosque002.jpg') }}" alt="Founder Image" />
                                </figure>
                            </div>
                        </div>

                        <!-- Founder 3 Content -->
                        <div class="col-md-6">
                            <div class="kode_mosque_text">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_header_3'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <div class="kode_mosque_item">
                                    @foreach($lc['about_founder_3'] as $paragraph)
                                        <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            {{ $paragraph[$lang == 'ur' ? 1 : 0] }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- FOUNDER 3 SECTION END -->

                <!-- IN LOVING MEMORY SECTION START -->
                <div class="container mt-5">
                    <div class="row">

                        <!-- Aziz Sahab Side -->
                        <div class="col-md-6">
                            <div class="kode_mosque_row mosque">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_name_4'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <!-- No image here -->
                                <div class="kode_mosque_item">
                                    <h4>{!! $lc['founder_header_4'][$lang] !!}</h4>
                                    @foreach($lc['about_founder_4'] as $paragraph)
                                        <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            {{ $paragraph[$lang == 'ur' ? 1 : 0] }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Zaheer Khan Sahab Side -->
                        <div class="col-md-6">
                            <div class="kode_mosque_text">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_name_5'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <div class="kode_mosque_item">
                                    <h4>{!! $lc['founder_header_5'][$lang] !!}</h4>
                                    @foreach($lc['about_founder_5'] as $paragraph)
                                        <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            {{ $paragraph[$lang == 'ur' ? 1 : 0] }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- IN LOVING MEMORY SECTION END -->
                
                <div class="container mt-5">
                    <div class="row">

                        <!-- Ilyas Qureshi Sahab -->
                        <div class="col-md-12">
                            <div class="kode_mosque_text">
                                <div class="section_hdg">
                                    <h3>{!! $lc['founder_name_6'][$lang] !!}</h3>
                                    <span><i class="fa icon-building"></i></span>
                                </div>
                                <div class="kode_mosque_item">
                                    <h4>{!! $lc['founder_header_6'][$lang] !!}</h4>
                                    @foreach($lc['about_founder_6'] as $paragraph)
                                        <p dir="{{ $lang == 'ur' ? 'rtl' : 'ltr' }}">
                                            {{ $paragraph[$lang == 'ur' ? 1 : 0] }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                

            </div>
            <!-- CONTAINER END -->
        </div>
        <!-- KODE MOSQUES WRAP END -->

        <!-- KODE NEWSLETTER WRAP START -->
        <div class="kode_newsletter_wrap">
            <!-- CONTAINER START -->
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
            <!-- CONTAINER END -->
        </div>
        <!-- KODE NEWSLETTER WRAP END -->

    </div>
    <!-- WRAPER END -->
@endsection
