
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url("assets/img/contact.jpg")?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?= site_url("users/index")?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Address</h3>
	            <p><a href="https://www.google.co.in/maps/place/RK+University+Main+Campus/@22.2403032,70.8986659,17z/data=!3m1!4b1!4m5!3m4!1s0x3959b4a660019ee9:0x3d6254f36ed0e794!8m2!3d22.2403032!4d70.9008546">RK University, Bhavnagar Highway, Kasturbadham, Rajkot - 360020, Gujarat, India.</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://9712489122">+919712489122</a></p>
              
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="https://mail.google.com/mail/u/0/#inbox?compose=new">rkulibrary@rku.ac.in</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Website</h3>
	            <p><a href="https://www.rku.ac.in">www.rku.ac.in</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section" style="background-image:url(img/contact.jpg);
      background-size:cover;
  background-position:center;
  background-attachment: fixed;
  scroll-behavior: smooth;">
			<div class="container" >
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-">
            <H1>CONTACT US</H1>
                <?php echo form_open('Users/index');?>              
                <div class="form-group" >
                
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Your name','name'=>'fname','value'=>set_value('fname')]); ?>
              </div>

              <div class="form-group">
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Your Email','name'=>'email','value'=>set_value('email')]); ?>              
              </div>

              <div class="form-group">
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Phone number','name'=>'phone','value'=>set_value('phone')]); ?>
              </div>


              <div class="form-group">
                 <?php echo form_textarea(['class'=>'form-control','placeholder'=>'Message','name'=>'tx','value'=>set_value('tx'),'cols'=>'30','rows'=>'7']); ?>

              </div>

              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" name="submit">
              </div>
            </form>
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