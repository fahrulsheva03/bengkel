<?php 
require 'koneksi.php';
require 'components/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<body>

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

    <?php require 'components/navbar.php'; ?>

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay"
        style="background-image: url(users/assets/img/bg-img/bg-img.jpg);">
        <div class="container h-100 welcome-text">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>APLIKASI PENCARIAN BENGKEL BERBASIS WEB</h2>
                        <h4>Powered by innovative technology for seamless user experience.</h4>
                    </div>
                    <!-- <div class="hero-search-form">
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s"
                                    style="background-color: rgb(13,17,23);">
                                    <div class="catagory-content">
                                        <img src="users/assets/img/core-img/map.png" alt="">
                                        <a href="#">
                                            <h6>Pencarian Lokasi</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s"
                                    style="background-color: rgb(13,17,23);">
                                    <div class="catagory-content">
                                        <img src="users/assets/img/core-img/map.png" alt="">
                                        <a href="#">
                                            <h6>Filter Layanan</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s"
                                    style="background-color: rgb(13,17,23);">
                                    <div class="catagory-content">
                                        <img src="users/assets/img/core-img/map.png" alt="">
                                        <a href="#">
                                            <h6>Ulasan dan Rating</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s"
                                    style="background-color: rgb(13,17,23);">
                                    <div class="catagory-content">
                                        <img src="users/assets/img/core-img/map.png" alt="">
                                        <a href="#">
                                            <h6>Pemetaan Lokasi</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s"
                                    style="background-color: rgb(13,17,23);">
                                    <div class="catagory-content">
                                        <img src="users/assets/img/core-img/map.png" alt="">
                                        <a href="contact.php">
                                            <h6>Costumer Support</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->

    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>GARAGE LOCATOR</h2>
                        <p>Selamat datang di GARAGE LOCATOR, tempat di mana perawatan kendaraan Anda menjadi prioritas
                            utama. Kami adalah sebuah tim profesional yang berkomitmen untuk memberikan layanan terbaik
                            dalam industri otomotif. Dengan pengalaman yang luas dan dedikasi terhadap kualitas, kami
                            hadir untuk memastikan setiap perjalanan Anda tetap lancar dan aman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100"
        style="background-image: url(users/assets/img/bg-img/bg-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>BENGKEL YANG WAJIB ANDA LIHAT</h4>
                        <p>Garage Locator</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.2s">
                        <img src="users/assets/img/gambar/gambar8.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <!-- <a href="#">Makassar</a>
                                <a href="#">1643 Kunjungan</a> -->
                            </div>
                            <div class="add-more">
                                <!-- <a href=""><img src="users/assets/img/core-img/map.png" alt=""></a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="users/assets/img/gambar/gambar6.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <!-- <a href="#">Makassar</a>
                                <a href="#">943 Kunjungan</a> -->
                            </div>
                            <div class="add-more">
                                <!-- <a href=""><img src="users/assets/img/core-img/map.png" alt=""></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="users/assets/img/gambar/gambar7.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <!-- <a href="#">Makassar</a>
                                <a href="#">243 Kunjungan</a> -->
                            </div>
                            <div class="add-more">
                                <!-- <a href=""><img src="users/assets/img/core-img/map.png" alt=""></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Editor Pick Area End ***** -->

    <section class="dorne-features-restaurant-area" style="background-color:  rgb(19,20,23);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Bengkel Unggulan</h4>
                        <p>Garage Locator</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        <div class="single-features-area2">
                            <img src="users/assets/img/gambar/gambar9.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                <a href="" id="showMap1"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Bengkel Prestige</h5>
                                    <p>Makassar</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area2">
                            <img src="users/assets/img/bg-img/bg-2.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">9.5</a>
                                <a href="" id="showMap2"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Mobilink Workshop</h5>
                                    <p>Makassar</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area2">
                            <img src="users/assets/img/bg-img/bg-3.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.2</a>
                                <a href="" id="showMap3"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Eksklusif Auto Care</h5>
                                    <p>Makassar</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area2">
                            <img src="users/assets/img/bg-img/bg-4.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.7</a>
                                <a href="" id="showMap4"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Mekanika Profesional</h5>
                                    <p>Makassar</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area2">
                            <img src="users/assets/img/bg-img/bg-5.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">9.8</a>
                                <a href="" id="showMap5"><img src="users/assets/img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Sentra Mobilindo</h5>
                                    <p>Makassar</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'components/footer.php'; ?>

</body>

</html>