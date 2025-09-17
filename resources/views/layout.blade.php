@php
    // Get language from request, cookie, or default to English
    $lang = request('lang');
    if (!$lang && isset($_COOKIE['site_language'])) {
        $lang = $_COOKIE['site_language'];
    }
    $lang = $lang ?: 'en';
    
    // Set cookie for language preference
    setcookie('site_language', $lang, time() + (365 * 24 * 60 * 60), '/');
    
    function getLanguageQuery() {
        $lang = request('lang');
        if (!$lang && isset($_COOKIE['site_language'])) {
            $lang = $_COOKIE['site_language'];
        }
        $lang = $lang ?: 'en';
        return '?lang=' . $lang;
    }
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rabita Hajj Umrah</title>
    <!--BOOTSTRAP CSS-->
    <link href="{{ url('public/islamic/css/bootstrap.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/font-awesome.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/slick.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/jquery.bxslider.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/audio.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/prettyphoto.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/demo-page.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/component.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/hover.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/jQuery-plugin-progressbar.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/chosen.min.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/animate.css') }}" rel="stylesheet">
    <!--fontawseme CSS-->
    <link href="{{ url('public/islamic/css/slick-theme.css') }}" rel="stylesheet">
    <!--THEME TYPO CSS-->
    <link href="{{ url('public/islamic/css/typography.css') }}" rel="stylesheet">
    <!--THEME TYPO CSS-->
    <link href="{{ url('public/islamic/css/shotcode.css') }}" rel="stylesheet">
    <!--THEME TYPO CSS-->
    <link rel="stylesheet" href="{{ url('public/islamic/style.css') }}">
    <!--svg-icon CSS-->
    <link rel="stylesheet" href="{{ url('public/islamic/svg-icon.css') }}">
    <!--COLOR CSS-->
    <link rel="stylesheet" href="{{ url('public/islamic/css/color.css') }}">
    <!--COLOR CSS-->
    <link rel="stylesheet" href="{{ url('public/islamic/css/responsive.css') }}">
    <script src="{{ url('public/islamic/js/jquery.js') }}"></script>
</head>

<body>
<div class="kode_top_wrap">
    <!--CONTAINER START-->
    <div class="container">
        <!--ROW START-->
        <div class="row">
            <div class="col-md-11">
                <!--KODE TOP INFO START-->
                <div class="kode_top_info">
                    <ul>
                        <li><a href="mailto:rabitapilgrimage@gmail.com"><i class="fa fa-envelope"></i>rabitapilgrimage@gmail.com</a></li>
                        <li><a href="#"><i class="fa icon-technology"></i>+91 9420 576 888 &nbsp;|&nbsp; +91 9860 788 877</a></li>
                    </ul>
                </div>
                <!--KODE TOP INFO END-->
            </div>
            <div class="col-md-1">
                <div class="dropdown">
                    <button class="btn btn-md" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border: none;">
                        <img src="{{url('public/islamic/images/drop-img.png')}}" alt="">
                        {{ $lang == 'ur' ? 'اردو' : 'Eng' }}
                        <span class="fa fa-angle-down"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dLabel" style="margin-left:-30px;width: 37%;">
                        <li><a href="#" onclick="setLanguage('en')"><img src="{{url('public/islamic/images/drop-img.png')}}" alt="">Eng</a></li>
                        <li><a href="#" onclick="setLanguage('ur')"><img src="{{url('public/islamic/images/drop-img.png')}}" alt="">اردو</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--ROW END-->
    </div>
    <!--CONTAINER END-->
</div>

<div class="wraper">
    <header class="header">
        <!--KODE NAVIGATION WRAP START-->
        <div class="kode_navigation_wrap">
            <!--CONTAINER START-->
            <div class="container d-flex justify-content-between align-items-center">
                <div class="top_logo">
                    <h1>
                        <a href="{{ url('/') . getLanguageQuery() }}"><img src="{{ url('public/islamic/images/top-logo2.png') }}" width="70%" alt="img"></a>
                    </h1>
                </div>
                <div class="navigation" style="width:30%; margin-left:150px;">
                    <ul class="d-flex list-unstyled mb-0">
                        <li class="me-3"><a href="{{ url('/') . getLanguageQuery() }}">Home</a></li>
                        <li class="me-3"><a href="{{ url('/about') . getLanguageQuery() }}">About Us</a></li>
                        <li class="me-3"><a href="{{ url('/services') . getLanguageQuery() }}">Services</a></li>
                        <li><a href="{{ url('contact') . getLanguageQuery() }}">Contact</a></li>
                    </ul>
                </div>
                <div class="donate_btn">
                    <div class="medium_btn theme_color_bg btn_hover2">
                        Contact Us
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <!--WIDGET WRAP START-->
        <div class="widget_wrap them_overlay">
            <!--CONTAINER START-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget_logo" style="color: white;">
                            <a href="#"><img src="{{ url('public/islamic/images/footer-logo.png') }}" alt=""></a>
                            <p>Established in 1999 by Mohammed Abdul Majid Siddiqui, Rabita Haj Umrah Tours is a
                                trusted leader in pilgrimage services. With over 25 years of dedication, we guide
                                Hajj and Umrah pilgrims with integrity and expertise. Our mission is to offer
                                exceptional, reverent service, rooted in faith and transparency.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget_event">
                            <h4 class="widget_title" style="color: white;">Quick Links</h4>
                            <ul class="d-flex list-unstyled mb-0">
                                <li class="me-3"><a href="{{ url('/') . getLanguageQuery() }}" style="color: white;">Home</a></li>
                                <li class="me-3"><a href="{{ url('/about') . getLanguageQuery() }}" style="color: white;">About Us</a></li>
                                <li class="me-3"><a href="{{ url('/services') . getLanguageQuery() }}" style="color: white;">Services</a></li>
                                <li><a href="{{ url('contact') . getLanguageQuery() }}" style="color: white;">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget_event" style="color: white;">
                            <h4 class="widget_title" style="color: white;">Get In Touch</h4>
                            <ul class="widget_call_info">
                                <li><a href="#" style="color: white;"><i class="fa fa-map-marker"></i>
                                        Rabita Tower, Shop No. 04, Deodi Bazar, Lotakaranja Road, Aurangabad,
                                        Maharashtra 431001</a></li>
                                <li><a href="#" style="color: white;"><i class="fa fa-phone"></i>+91 9420 576 888 | +91 9860 788 877</a></li>
                                <li><a href="mailto:mailto:someone@example.com" style="color: white;"><i
                                            class="fa fa-envelope"></i>rabitapilgrimage@gmail.com</a></li>
                            </ul>
                            <ul class="widget_social_icon">
                                <li><a class="hvr-ripple-out"
                                        href="https://www.facebook.com/profile.php?id=61559617796301"
                                        style="color: white;"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="hvr-ripple-out" href="https://twitter.com/rabitapilgrime"
                                        style="color: white;"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="hvr-ripple-out"
                                        href="https://www.instagram.com/rabita_pilgrimage?igsh=MXJmNGlvenVwZGd2bw=="
                                        style="color: white;"><i class="fa fa-camera-retro"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--CONTAINER END-->
        </div>
        <!--WIDGET WRAP END-->

        <!--WIDGET COPYRIGHT START-->
        <div class="widget_copyright">
            <!--CONTAINER START-->
            <div class="container">
                <div class="copyright_text">
                    <p>Website by:<a href="https://graphicon.in/">Graphicon Design Studio</a></p>
                    <a id="child-topbtn" class="top_btn hvr-bob" href="#"><i class="fa fa-long-arrow-up"
                            aria-hidden="true"></i></a>
                </div>
            </div>
            <!--CONTAINER END-->
        </div>
        <!--WIDGET COPYRIGHT END-->
    </footer>
</div>

<script>
// Function to set language and remember preference
function setLanguage(language) {
    // Set cookie to remember language preference
    document.cookie = "site_language=" + language + "; path=/; max-age=" + (365 * 24 * 60 * 60);
    
    // Get current URL without query parameters
    const currentUrl = window.location.href.split('?')[0];
    
    // Get all existing query parameters except 'lang'
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.delete('lang');
    
    // Add the new language parameter
    urlParams.set('lang', language);
    
    // Construct the new URL
    const newUrl = currentUrl + '?' + urlParams.toString();
    
    // Redirect to the new URL
    window.location.href = newUrl;
}
</script>

<script src="{{ url('public/islamic/js/bootstrap.js') }}"></script>
<script src="{{ url('public/islamic/js/slick.min.js') }}"></script>
<script src="{{ url('public/islamic/js/wow.min.js') }}"></script>
<script src="{{ url('public/islamic/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ url('public/islamic/js/jQuery-plugin-progressbar.js') }}"></script>
<script src="{{ url('public/islamic/js/chosen.jquery.min.js') }}"></script>
<script src="{{ url('public/islamic/js/modernizr.custom.js') }}"></script>
<script src="{{ url('public/islamic/js/jquery.dlmenu.js') }}"></script>
<script src="{{ url('public/islamic/js/musicplayer.js') }}"></script>
<script src="{{ url('public/islamic/js/jquery.prettyphoto.js') }}"></script>
<script src="{{ url('public/islamic/js/jquery.downCount.js') }}"></script>
<script src="{{ url('public/islamic/js/waypoints-min.js') }}"></script>
<script src="{{ url('public/islamic/js/custom.js') }}"></script>
<script src="{{ url('public/admin/js/sweetalert.min.js') }}"></script>

</body>
</html>