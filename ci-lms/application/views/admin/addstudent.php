<!DOCTYPE html>
<html>
<head>
	<title>Library | RK University</title>
</head>
<body>
<?php
		include ('header.php');
?>

	<div class="w3-main" style="margin-left:340px;margin-right:40px;">

     	<div class="w3-container" style="margin-top:80px" id="showcase">
        
        	<h1 class="w3-xxxlarge w3-text-red"><b>Add Students</b></h1>
        	<hr style="border:5px solid red" class="w3-round">
      	</div>

      	<div class="w3-container">
      		
          <div class="w3-card-4">
            <div class="w3-container w3-red">
              <h2>Add Student</h2>
            </div>
            <div class="w3-container">
              <?php echo form_open('admin/addstudent');?>
                <p>
                <label>Student name</label>
                
                <?php echo form_input(['class'=>'w3-input','placeholder'=>'Student name','name'=>'fname']); ?>
                </p>
                <div>
                   <?php echo form_error('fname');?>
                </div>

                <p>
                <label>Enroll No</label>
                
                <?php echo form_input(['class'=>'w3-input','placeholder'=>'Enroll No','name'=>'erno']); ?>

                </p>
                <div>
                   <?php echo form_error('erno');?>
                </div>

                <p>
                <label>Email</label>
                
                <?php echo form_input(['class'=>'w3-input','placeholder'=>'Email id','name'=>'email']); ?>
                 
                </p>
                <div>
                   <?php echo form_error('email');?>
                </div>

                <p>
                <label>Password</label>
                 <?php echo form_password(['class'=>'w3-input','placeholder'=>'Password','type'=>'password','name'=>'pass']); ?>
                </p>
                <div>
                   <?php echo form_error('pass');?>
                </div>

                <p>
                <label>Confirm Password</label>
                 <?php echo form_password(['class'=>'w3-input','placeholder'=>'Confirm Password','type'=>'password','name'=>'cpass']); ?>
                </p>
                <div>
                   <?php echo form_error('cpass');?>
                </div>

                

                <div style="padding-bottom: 20px">
                   
                   <?php echo form_submit(['class'=>'w3-btn w3-red','type'=>'submit','value'=>'Add Student']); ?>
                </div>
              
            </div>
          </div>
        </div>

      	</div>

      		
		 



	</div>




</body>
</html>