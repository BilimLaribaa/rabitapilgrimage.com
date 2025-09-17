@extends('layout')

@section('content')
    <div class="kode_contact_des">
        <div class="container">
            <div class="row">
                <div class="kode_contact_field">
                    <div class="section_hdg hdg_2 hdg_3">
                        <a href="#"><img src="{{ url('public/islamic/images/hdg-img.png') }}" alt=""></a>
                        <h3>Contact Us</h3>
                        <span><i class="fa icon-building"></i></span>
                    </div>
                    <form method="post" id="commentform" class="comment-form">

                        <div class="col-md-4">
                            <div class="kf_commet_field">
                                <input placeholder="Your Name" name="name" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="kf_commet_field">
                                <input placeholder="Your Email" name="email" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="kf_commet_field">
                                <input placeholder="Your Mobile" name="phone" type="number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="kode_textarea">
                                <textarea placeholder="Your Message" name="message"></textarea>
                            </div>
                            <p class="form-submit"><button type="button"
                                    class="medium_btn background-bg-dark btn_hover hvr-wobble-bottom"
                                    onclick="SaveContact()">
                                    Submit Now
                                </button>

                            </p>
                        </div>
                    </form>
                </div>
            </div>
            <!--KODE CONTACT SERVICE START-->
            <div class="kode_contact_service">
                <ul>
                    <li>
                        <div class="kode_contact_text">
                            <h5><a href="#">ADDRESS</a></h5>
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                            <p style="    height: 48px;">Rabita Tower, Shop No. 04,
                                Deodi Bazar, Lotakaranja Road,, Aurangabad, Maharashtra 431001
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="kode_contact_text">
                            <h5><a href="#">PHONE</a></h5>
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                            <p><span>+91 9420 576 888</span>
                                +91 9860 788 8777 688
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="kode_contact_text">
                            <h5><a href="#">EMAIL ADDRESS</a></h5>
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                            <p style=" height: 49px;" >rabitapilgrimage@gmail.com
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <!--KODE CONTACT SERVICE END-->
        </div>
        <!--CONTAINER END-->
    </div>
    <!--KODE CONTACT DES END-->
    </div>
    <!--KODE 404 WRAP END-->

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
                                <button class="medium_btn background-bg-dark" id="savebtn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--CONTAINER END-->
    </div>
    <!--KODE NEWSLETTER WRAP END-->


    <script>
        function SaveContact() {
            $("#submitbtn").prop('disabled', true);
            var formData = new FormData($('#commentform')[0]);
            console.log('hello');
            $.ajax({
                url: "{{ url('ContactCreates') }}",

                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.success) {
                        alert('Success: ' + res.message);
                        console.log('Success:', res.message);
                        $('#commentform')[0].reset();
                    } else {
                        alert('Error: ' + res.message);
                        console.log('Error:', res.message);
                    }
                },
                error: function() {
                    alert('An unexpected error occurred. Please try again later.');
                    console.log('An unexpected error occurred.');
                }
            });
        }
    </script>
@endsection
