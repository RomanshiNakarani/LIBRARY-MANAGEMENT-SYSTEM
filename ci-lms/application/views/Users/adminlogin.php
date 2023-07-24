
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

   

    
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section" style="background-image:url('<?= base_url("assets/img/img.jpg")?>'); background-size:cover;
                                              background-position:center;
                                              background-attachment: fixed;
                                              scroll-behavior: smooth;">
			<div class="container" >
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-" >
						 <H1>ADMIN LOGIN</H1>
             
             <?php echo form_open('admin/index');?>
						
              <div class="form-group">
              
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Admin Id','name'=>'uname','value'=>set_value('uname')]); ?>
                
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