
<?php 

require 'components/header.php';

?>

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
    <div class="breadcumb-area bg-img bg-overlay">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex" id="contact">
        <!-- Contact Form Area -->
        <div class="contact-form-area equal-height">
            <div class="contact-text">
                <h4>Welcome, Hubungi Kami!</h4>
                <p>Kami bangga menjadi mitra perawatan kendaraan Anda! Halaman Kontak Kami adalah pintu terbuka bagi Anda untuk terhubung langsung dengan tim kami yang ramah dan profesional. Apakah ada pertanyaan, saran, atau kebutuhan bantuan lainnya? Kami siap membantu!</p>
                <div class="contact-info d-lg-flex">
                    <div class="single-contact-info">
                        <h6><i class="fa fa-map-signs" aria-hidden="true"></i> Makassar Sulawesi Selatan, IND</h6>
                        <h6><i class="fa fa-map-signs" aria-hidden="true"></i> No. 25-33</h6>
                    </div>
                    <div class="single-contact-info">
                        <h6><i class="fa fa-envelope-o" aria-hidden="true"></i> contact@bengkel.com</h6>
                        <h6><i class="fa fa-phone" aria-hidden="true"></i> +62 567 22478 49567</h6>
                    </div>
                </div>
            </div>
           
        </div>
        <!-- Map Area -->
        <div class="dorne-map-area equal-height">
            <div id="googleMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.772089240551!2d119.48050597423538!3d-5.140356651982801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee33495a4f597%3A0xa374c458c000bb06!2sDipa%20Makassar%20University!5e0!3m2!1sen!2sid!4v1699980987278!5m2!1sen!2sid" width="631.667px" height="586px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End *****    -->

    <?php 
    
    require 'components/footer.php';
    
    ?>

</body>

</html>