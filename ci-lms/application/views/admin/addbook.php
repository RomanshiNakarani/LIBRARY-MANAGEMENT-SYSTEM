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
        
        	<h1 class="w3-xxxlarge w3-text-red"><b>Add Book</b></h1>
        	<hr style="border:5px solid red" class="w3-round">
      	</div>

      	<div class="w3-container">
        
        
          <div class="w3-card-4">
            <div class="w3-container w3-red">
              <h2>Add book</h2>
            </div>
            <div class="w3-container">
              <?php echo form_open('admin/addbook');?>
                

                <p>
                <label>Book Name</label>
                <?php echo form_input(['class'=>'w3-input','placeholder'=>'Book Name','name'=>'bname']); ?>
                </p>

                <p>     
                <label>Author Name</label>
                <?php echo form_input(['class'=>'w3-input','placeholder'=>'Author Name','name'=>'aname']); ?>
                </p>
                <p>
                <label>book Id</label>
                <?php echo form_input(['class'=>'w3-input','placeholder'=>'Book Id','name'=>'bid']); ?>
                </p>

                <p>
                  <label>Publishing Date</label>
                  <input type="date" class="w3-input" name="date_out" value="<?php echo isset($itemOutData->date_out) ? set_value('date_out', date('m/d/Y', strtotime($itemOutData->date_out))) : set_value('date_out'); ?>">

                </p>

                <div style="padding-bottom: 20px">
                   
                   <?php echo form_submit(['class'=>'w3-btn w3-red','type'=>'submit','value'=>'Add Book']); ?>
                </div>
              
            </div>
          </div>
        </div>

      		
		 



	</div>




</body>
</html>