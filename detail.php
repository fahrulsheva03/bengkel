<?php

require 'components/header.php';

?>

<!DOCTYPE html>
<html lang="en">

<body style="background-color: rgb(19,20,23);">
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center" style="background-color:  rgb(13,17,23);">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Temukan bengkel terdekat">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php

    require 'components/navbar.php';

    ?>

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area height-700 bg-img bg-overlay" style="background-image: url(users/assets/img/bg-img/bg-img.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <div class="map-ratings-review-area d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            <a href="#">8.7</a>
                            <a href="#">Write a review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->


    <!-- ***** Single Listing Area Start ***** -->
    <section class="dorne-single-listing-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Listing Content -->
                <div class="col-12 col-lg-8">
                    <div class="single-listing-content">

                        <div class="listing-title">
                            <h4>Halaman Details</h4>
                            <h6>Ulasan & Reviews</h6>
                        </div>

                        <div class="single-listing-nav">
                            <nav>
                                <ul id="listingNav">
                                    <li class="active"><a href="#overview">Overview</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="#review">Reviews</a></li>
                                    <li><a href="#lomap">Location on map</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="overview-content mt-50" id="overview">
                            <p>Dalam pencarian bengkel yang tepat, kami paham akan betapa pentingnya mengetahui pengalaman sesungguhnya dari para pengguna sebelum Anda mempercayakan kendaraan Anda. Di halaman Ulasan & Reviews kami, kami menghadirkan cerminan langsung dari setiap cerita pengguna yang telah memercayakan kendaraan mereka pada layanan bengkel dalam platform kami.</p>

                        </div>

                        <div class="listing-menu-area mt-100" id="menu">
                            <h4>Menu Layanan Bengkel</h4>
                            <!-- Single Listing Menu -->
                            <div class="single-listing-menu d-flex justify-content-between">
                                <!-- Listing Menu Title -->
                                <div class="listing-menu-title">
                                    <h6>Classic Burger</h6>
                                    <p>Beef, salad, mustard, bacon, mayonnaise, spicey relish, cheese</p>
                                </div>
                                <!-- Listing Menu Price -->
                                <div class="listing-menu-price">
                                    <h6>$9,90</h6>
                                </div>
                            </div>
                            <!-- Single Listing Menu -->
                            <div class="single-listing-menu d-flex justify-content-between">
                                <!-- Listing Menu Title -->
                                <div class="listing-menu-title">
                                    <h6>House Special Burger</h6>
                                    <p>Beef, salad, mustard, bacon, mayonnaise, spicey relish, cheese</p>
                                </div>
                                <!-- Listing Menu Price -->
                                <div class="listing-menu-price">
                                    <h6>$9,90</h6>
                                </div>
                            </div>
                            <!-- Single Listing Menu -->
                            <div class="single-listing-menu d-flex justify-content-between">
                                <!-- Listing Menu Title -->
                                <div class="listing-menu-title">
                                    <h6>Classic Burger</h6>
                                    <p>Beef, salad, mustard, bacon, mayonnaise, spicey relish, cheese</p>
                                </div>
                                <!-- Listing Menu Price -->
                                <div class="listing-menu-price">
                                    <h6>$9,90</h6>
                                </div>
                            </div>
                            <!-- Single Listing Menu -->
                            <div class="single-listing-menu d-flex justify-content-between">
                                <!-- Listing Menu Title -->
                                <div class="listing-menu-title">
                                    <h6>House Special Burger</h6>
                                    <p>Beef, salad, mustard, bacon, mayonnaise, spicey relish, cheese</p>
                                </div>
                                <!-- Listing Menu Price -->
                                <div class="listing-menu-price">
                                    <h6>$9,90</h6>
                                </div>
                            </div>
                            <a href="#" class="btn dorne-btn mt-50">+ See The Menu</a>
                        </div>

                        <div class="listing-reviews-area mt-100" id="review">
                            <h4>reviews</h4>
                            <div class="single-review-area">
                                <div class="reviewer-meta d-flex align-items-center">
                                    <img src="users/assets/img/clients-img/1.jpg" alt="">
                                    <div class="reviewer-content">
                                        <div class="review-title-ratings d-flex justify-content-between">
                                            <h5>“The best Burger in town”</h5>
                                            <div class="ratings">
                                                <img src="users/assets/img/clients-img/star-fill.png" alt="">
                                                <img src="users/assets/img/clients-img/star-fill.png" alt="">
                                                <img src="users/assets/img/clients-img/star-fill.png" alt="">
                                                <img src="users/assets/img/clients-img/star-fill.png" alt="">
                                                <img src="users/assets/img/clients-img/star-fill.png" alt="">
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat ligula non volutpat.</p>
                                    </div>
                                </div>
                                <div class="reviewer-name">
                                    <h6>Christinne Smith</h6>
                                    <p>12 November 2017</p>
                                </div>
                            </div>
                            <div class="single-review-area">
                                <div class="reviewer-meta d-flex align-items-center">
                                    <img src="users/assets/img/clients-img/1.jpg" alt="">
                                    <div class="reviewer-content">
                                        <div class="review-title-ratings d-flex justify-content-between">
                                            <h5>“Quality ingredients”</h5>
                                            <div class="ratings">
                                                <img src="users/assets/img/clients-img/star-fill.png" alt="">
                                                <img src="users/assets/img/clients-img/star-fill.png" alt="">
                                                <img src="users/assets/img/clients-img/star-fill.png" alt="">
                                                <img src="users/assets/img/clients-img/star-fill.png" alt="">
                                                <img src="users/assets/img/clients-img/star-unfill.png" alt="">
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat ligula non volutpat.</p>
                                    </div>
                                </div>
                                <div class="reviewer-name">
                                    <h6>Michael Brown</h6>
                                    <p>12 November 2017</p>
                                </div>
                            </div>
                        </div>

                        <div class="location-on-map mt-50" id="lomap">
                            <h4>Location on map</h4>
                            <div class="location-map">
                                <div id="locationMap">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.772089240551!2d119.48050597423538!3d-5.140356651982801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee33495a4f597%3A0xa374c458c000bb06!2sDipa%20Makassar%20University!5e0!3m2!1sen!2sid!4v1699980987278!5m2!1sen!2sid" width="729.99px" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Listing Sidebar -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="listing-sidebar">

                        <!-- Listing Verify -->
                        <!-- <div class="listing-verify">
                            <a href="#" class="btn dorne-btn w-100"><i class="fa fa-check pr-3"></i> Verified Listing</a>
                        </div> -->


                        <!-- Opening Hours Widget -->
                        <div class="opening-hours-widget mt-50">
                            <h6>Opening Hours</h6>
                            <ul class="opening-hours">
                                <li>
                                    <p>Monday</p>
                                    <p>Closed</p>
                                </li>
                                <li>
                                    <p>Tuesday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                                <li>
                                    <p>Wednesday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                                <li>
                                    <p>Thursday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                                <li>
                                    <p>Friday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                                <li>
                                    <p>Saturday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                                <li>
                                    <p>Sunday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form contact-form-widget mt-50">
                            <h6>Contact Business</h6>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn dorne-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Single Listing Area End ***** -->

    <?php

    require 'components/footer.php';

    ?>

</body>

</html>