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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url("assets/img/about.jpg")?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">ABOUT US</h1>
            <p class="breadcrumbs">
              <span class="mr-2">
                <a href="<?= site_url("users/index")?>">Home <i class="ion-ios-arrow-forward"></i></a>
              </span> 
              <span>About us <i class="ion-ios-arrow-forward"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url('<?= base_url("assets/img/pic.jpg")?>'); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">RK UNIVERSITY</h2>
						<P>We believe that RKU is a place where “Change” happens. Our students are challenged and motivated to change their perspectives by our faculties. Our faculties constantly change their pedagogies and instructional approaches to match industry requirements and student needs. Our students go on to change the society with the knowledge they have acquired at RKU.

            <P>It is virtuous cycle of “change” that happens only in the beautiful and serene campus of RKU.</P>

            <P>Join us if you want to change your thinking and your perspectives.</P>

            <P>Join us if you want to change the world.</P>
					</div>
				</div>
			</div>
		</section>
		
    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="rk3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('<?= base_url("assets/img/rk3.jpg")?>');">
							
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="rku.jpeg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('<?= base_url("assets/img/rku.jpeg")?>');">
							
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="rk4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('<?= base_url("assets/img/rk4.jpg")?>');">
							
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('<?= base_url("assets/img/image_4.jpg")?>');">
							
						</a>
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