<?php require 'components/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

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
   <!-- <div class="breadcumb-area height-700 bg-img bg-overlay" style="background-image: url(users/assets/img/bg-img/bg-1.jpg)">
   <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2 style="text-align: center;">ABOUT US</h2>
                        <h4></h4>
                    </div>
                   
                    <div class="hero-search-form">
                     
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>TENTANG BENGKEL</h2>
                       <p>Selamat datang di Pencarian Bengke kami, tempat terbaik untuk menemukan bengkel terdekat dan terpercaya. Dengan akses mudah dan ulasan dari pengguna, kami hadir untuk memudahkan perawatan kendaraan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    
    require 'components/footer.php';
    
    ?>

</body>

</html>