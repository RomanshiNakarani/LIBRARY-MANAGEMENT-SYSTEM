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
        
        	<h1 class="w3-xxxlarge w3-text-red"><b>Welcome Admin</b></h1>
        	<hr style="border:5px solid red" class="w3-round">
      	</div>

      	 

			<div class="w3-row-padding w3-margin-bottom">
			    <div class="w3-quarter">
			      <div class="w3-container w3-red w3-padding-16">
			        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
			        <div class="w3-right">
			          <h3>52</h3>
			        </div>
			        <div class="w3-clear"></div>
			        <a href="<?= site_url('admin/student')?>"><h2>STUDENTS</h2></a>
			      </div>
			    </div>

			     <div class="w3-quarter">
			      <div class="w3-container w3-orange w3-text-white w3-padding-16">
			        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
			        <div class="w3-right">
			          <h3>50</h3>
			        </div>
			        <div class="w3-clear"></div>
			        <a href="<?= site_url('admin/book')?>"><h2>BOOKS</h2></a>
			      </div>
				  </div>
				  </div>

	    
  			</div>

		 



	</div>




</body>
</html>