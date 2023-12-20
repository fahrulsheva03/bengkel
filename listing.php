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
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(users/assets/img/bg-img/hero-1.jpg)"></div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Listing Destinations Area Start ***** -->
    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading light text-center">
                        <span style="color: #fff;"></span>
                        <h4 style="color: #fff;">Jelajahi Layanan Bengkel</h4>
                        <p>Garage Locator</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="users/assets/img/gambar/gambar9.jpg" alt="">
                        <!-- Price -->
                        <!-- <div class="price-start">
                            <p>FROM $59/night</p>
                        </div> -->
                        <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                <a href="" id="maps1"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Autotech Service Center</h5>
                                <p>Party</p>
                            </div>
                            <div class="feature-favourite">
                                <!-- <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="users/assets/img/bg-img/bg-5.jpg" alt="">
                        <!-- Price -->
                        <!-- <div class="price-start">
                            <p>FROM $59/night</p>
                        </div> -->
                        <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                <a href="" id="maps2"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Velocity Motors Garage</h5>
                                <p>Luxury</p>
                            </div>
                            <div class="feature-favourite">
                                <!-- <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="users/assets/img/bg-img/bg-2.jpg" alt="">
                        <!-- Price -->
                        <!-- <div class="price-start">
                            <p>FROM $59/night</p>
                        </div> -->
                        <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                <a href="" id="maps3"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>WheelMaster Workshop</h5>
                                <p>Spectacular</p>
                            </div>
                            <div class="feature-favourite">
                                <!-- <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="users/assets/img/bg-img/bg-9.jpg" alt="">
                        <!-- Price -->
                        <!-- <div class="price-start">
                            <p>FROM $59/night</p>
                        </div> -->
                        <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                <a href="" id="maps4"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Precision Auto Care Hub</h5>
                                <p>Sunny</p>
                            </div>
                            <div class="feature-favourite">
                                <!-- <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="users/assets/img/bg-img/bg-3.jpg" alt="">
                        <!-- Price -->
                        <!-- <div class="price-start">
                            <p>FROM $59/night</p>
                        </div> -->
                        <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                <a href="" id="maps5"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Apex Automotive Solutions</h5>
                                <p>All Year round</p>
                            </div>
                            <div class="feature-favourite">
                                <!-- <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="users/assets/img/bg-img/bg-4.jpg" alt="">
                        <!-- Price -->
                        <!-- <div class="price-start">
                            <p>FROM $59/night</p>
                        </div> -->
                        <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                <a href="" id="maps5"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Automotive Workshop</h5>
                                <p>Party</p>
                            </div>
                            <div class="feature-favourite">
                                <!-- <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Features Area -->
                <!-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="users/assets/img/bg-img/feature-2.jpg" alt="">
                        
                        <div class="price-start">
                            <p>FROM $59/night</p>
                        </div> -->
                        <!-- <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>RoadRunner Service Station</h5>
                                <p>Luxury</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- Single Features Area -->
                <!-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="users/assets/img/bg-img/feature-3.jpg" alt="">
                        
                        <div class="price-start">
                            <p>FROM $59/night</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Lake Como</h5>
                                <p>Spectacular</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Single Features Area -->
                <!-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="users/assets/img/bg-img/feature-4.jpg" alt="">
                       
                        <div class="price-start">
                            <p>FROM $59/night</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Greece</h5>
                                <p>Sunny</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>

    <?php 
    
    require 'components/footer.php';
    
    ?>

 
</body>

</html>