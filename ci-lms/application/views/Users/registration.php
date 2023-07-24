
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Library | RK University</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  </head>
  <body>
    
    <?PHP
      include("header.php");
    ?>

    <?php
      include("info.php");
    ?>
	  
	  
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url("assets/img/rk2.jpg")?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">REGISTER HERE</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?= site_url("users/index")?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Register <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
     

    
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section" style="background-image: url(<?= base_url("assets/img/rk7.jp")?>);
     background-size:cover;
  background-position:center;
  background-attachment: fixed;
  scroll-behavior: smooth;
    ">
			<div class="container" >
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-">
            <H1>REGISTRATION</H1>
						  <?php echo form_open('Users/regi');?>

              <div class="form-group">
               
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Your name','name'=>'fname','value'=>set_value('fname')]); ?>
                
              </div>
              <div>
                <?php echo form_error('fname');?>
              </div>

              
              <div class="form-group">
                
                 <?php echo form_input(['class'=>'form-control','placeholder'=>'Enroll No','name'=>'erno','value'=>set_value('erno')]); ?>

              </div>
              <div>
                <?php echo form_error('erno');?>
              </div>

              <div class="form-group">
                
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Your Email','name'=>'email','value'=>set_value('email')]); ?>
                
              </div>
              <div>
                <?php echo form_error('email');?>
              </div>

              <div class="form-group">
               
                <?php echo form_password(['class'=>'form-control','placeholder'=>'Password','type'=>'password','name'=>'pass','value'=>set_value('pass')]); ?>
                 
              </div>
              <div>
                <?php echo form_error('pass');?>
              </div>

              <div class="form-group">
                <?php echo form_password(['class'=>'form-control','placeholder'=>'Confirm Password','type'=>'password','name'=>'cpass','value'=>set_value('cpass')]); ?>
                 
              </div>
              <div>
                <?php echo form_error('cpass');?>
              </div>
              
              <div class="form-group">
                
                 <?php echo form_submit(['class'=>'btn btn-primary py-3 px-5','type'=>'submit','value'=>'REGISTER HERE']); ?>
              </div>

              <div class="form-group">
                <p>ALREADY HAVE AN ACCOUNT?   <?php echo anchor('users/login','Login Here','class="link-class"') ?></p>
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