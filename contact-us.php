<?php
$title = "Contact Us";
require_once 'header.php';
?>
    <!-- End of Header Top Area -->
    <section>
        <!-- Start Bradcaump area -->
        <div class="ml-bradcaump-area bg-3 ptb-100 smpb-50 xspt-60" data-black-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump-wrap text-center">
                            <h2 class="bradcaump-title">Contact Us</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.php">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Contact Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <section>
            <div class="container mt-30">
                <div style="margin: auto;display: table;">
                    <h2 style="margin-left: 45px;margin-bottom: -27px;"> Contact<span class="theme-red"> Us </span></h2>
                    <ul class="ml-social-icon icon-about">
                        <li><a href="https://www.linkedin.com/feed/"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                        <li><a href="https://www.pinterest.ca/mbbsiecprince/_saved/"><i
                                        class="zmdi zmdi-pinterest"></i></a></li>
                        <li><a href="https://www.instagram.com/mbbs_iec_prince/"><i
                                        class="zmdi zmdi-instagram""></i></a></li>
                        <li><a href="https://twitter.com/home"><i class="zmdi zmdi-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/MBBS-IEC-Prince-108885087631533"><i
                                        class="zmdi zmdi-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="ml-contact-page-wrap ptb-100 smptb-60 xsptb-40 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="ml-contact-form-inner bg-4" data-black-overlay="7">
                            <form id="contact-form" action="" method="post">
                                <div class="input-box">
                                    <input type="text" name="name" placeholder="Your Name*">
                                    <input type="email" name="email" placeholder="Your Mail*">
                                </div>
                                <div class="input-sub">
                                    <input type="text" name="subject" placeholder="Subject*" style="margin-top:0px;">
                                </div>
                                <div class="input-messa">
                                    <textarea name="message" placeholder="Type Your Massage......."></textarea>
                                </div>
                                <div class="send-btn">
                                    <button type="submit" class="ml-btn btn-light btn-large btn-large-5"
                                            style="border-radius: 15px;">Send Massage
                                    </button>
                                </div>
                            </form>
                        </div>
                        <p class="form-messege"></p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="ml-contact-location">
                            <div class="ml-contact-location-wrap  mb-50">
                                <div class="single-contact-address">
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-pin"></i>
                                    </div>
                                    <div class="address-details">
                                        <p>SCO-47 Level-1 Sector 65 Phase 11 <br>
                                            Mohali</p>
                                    </div>
                                </div>
                                <div class="single-contact-address">
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-phone"></i>
                                    </div>
                                    <div class="address-details">
                                        <p><a href="tel:01724648799">0172-4648799</a></p>
                                        <p><a href="tel:+917626941234">+91 7626941234</a></p>
                                    </div>
                                </div>
                                <div class="single-contact-address">
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="address-details">
                                        <p><a href="mailto:info@iecprince.com">info@iecprince.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start of Google Map Area -->
                            <div class="map-contacts">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54903.70288649491!2d76.73136418729973!3d30.676727894972192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fec055de780a5%3A0xa26727c07a5dedb0!2sInternational+Education+Consultants!5e0!3m2!1sen!2sin!4v1482841941360"
                                        width="100%" height="282" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                            </div>
                            <!-- End of Google Map Area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
require_once 'footer.php';
?>
