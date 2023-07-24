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
       
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url("assets/img/log.jpg")?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">LOGIN HERE</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?= site_url("users/index")?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section" style="background-image:url('<?= base_url("assets/img/img.jp")?>'); background-size:cover;
                                              background-position:center;
                                              background-attachment: fixed;
                                              scroll-behavior: smooth;">
			<div class="container" >
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-" >
						 <H1>LOGIN</H1>
             
             <?php echo form_open('studentpanel/index');?>
						
              <div class="form-group">
              
                <?php echo form_input(['class'=>'form-control','placeholder'=>'User Id','name'=>'uname','value'=>set_value('uname')]); ?>
                
              </div>
              <div>
                <?php echo form_error('uname');?>
              </div>

              <div class="form-group">
                
                <?php echo form_password(['class'=>'form-control','placeholder'=>'Password','type'=>'password','name'=>'pass','value'=>set_value('pass')]); ?>

              </div>
              <div>
                <?php echo form_error('pass');?>
              </div>

              
              
              
              
              <div class="form-group">
                
                <?php echo form_submit(['class'=>'btn btn-primary py-3 px-5','type'=>'submit','value'=>'LOGIN']); ?>

              </div>
			  
			  

              
              <div class="form-group">
                <p>DON'T HAVE AN ACCOUNT?   <?php echo anchor('users/registration','Register Here','class="link-class"') ?></p>
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