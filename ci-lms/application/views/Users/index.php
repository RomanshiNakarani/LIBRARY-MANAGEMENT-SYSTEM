<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Library | RK University</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
      
    <?php
      include("header.php");
    ?>
    
    <?php
      include("info.php");
    ?>

    <!-- END nav -->
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url('<?= base_url("assets/img/rku.jpeg")?>');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">WELCOME</h1>
            <h1 class="mb-4">RK UNIVERSITY LIBRARY</h1>
            <p>
A library is a collection of sources of information and similar resources, made accessible to a defined community for reference or borrowing</p>
            <p><a href="<?= site_url("users/login")?>" class="btn btn-primary px-4 py-3 mt-3">LOGIN HERE</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('<?= base_url("assets/img/rk.jpg")?>');" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">RK University</h2>
            <p>We believe that RKU is a place where “Change” happens. Our students are challenged and motivated to change their perspectives by our faculties. Our faculties constantly change their pedagogies and instructional approaches to match industry requirements and student needs. Our students go on to change the society with the knowledge they have acquired at RKU.

It is virtuous cycle of “change” that happens only in the beautiful and serene campus of RKU.

Join us if you want to change your thinking and your perspectives.

Join us if you want to change the world.</p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          </div>
        </div>	
    		
        </div>
    	</div>
    </section>


    <?php
      include("footer.php");
    ?>

		
	<script src="<?= base_url("assets/js/jquery.min.js")?>"></script>
  <script src="<?= base_url("assets/js/jquery-migrate-3.0.1.min.js")?>"></script>
  <script src="<?= base_url("assets/js/popper.min.js")?>"></script>
  <script src="<?= base_url("assets/js/bootstrap.min.js")?>"></script>
  <script src="<?= base_url("assets/js/jquery.easing.1.3.js")?>"></script>
  <script src="<?= base_url("assets/js/jquery.waypoints.min.js")?>"></script>
  <script src="<?= base_url("assets/js/jquery.stellar.min.js")?>"></script>
  <script src="<?= base_url("assets/js/owl.carousel.min.js")?>"></script>
  <script src="<?= base_url("assets/js/jquery.magnific-popup.min.js")?>"></script>
  <script src="<?= base_url("assets/js/aos.js")?>"></script>
  <script src="<?= base_url("assets/js/jquery.animateNumber.min.js")?>"></script>
  <script src="<?= base_url("assets/js/scrollax.min.js")?>"></script>
  <script src="<?= base_url("assets/js/main.js")?>"></script>

  </body>
</html>