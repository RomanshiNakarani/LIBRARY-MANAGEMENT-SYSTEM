<!DOCTYPE html>
<html lang="en">
<head>
	<title>Library | RK University</title>
	
</head>

<?php
		include ('header.php');
?>
<body>

	
	<div class="w3-main" style="margin-left:340px;margin-right:40px;padding-bottom: 20px;">
     	<div class="w3-container" style="margin-top:80px" id="showcase">
        	
        	<h1 class="w3-xxxlarge w3-text-red"><b>Students</b></h1>
        	<hr style="border:5px solid red" class="w3-round">
      	</div>

      	<div class="w3-container" style="margin-top: 20px; ">
      		<?php if($msg=$this-> session-> flashdata('msg'))
      		{
      		$msg_class= $this-> session->flashdata('msg_class')
      	
      		?>

      	<div class="row">
      		<div class="col-lg-6">
      			<div class="alert <?= $msg_class?>">
      				<?=$msg;?>
      			</div>
      		</div>
      		
      	</div>
      <?php } ?>


      	<div class="w3-container" style="overflow-x:auto;">

      		<table class="w3-table-all w3-card-4">
      			<thead>
			    	<tr class="w3-red">
				      <th>Name</th>
				      <th>Enroll No</th>
				      <th>Email</th>
				      <th>Password</th>
				      <th>Edit</th>
				      <th>Delete</th>
			    	</tr>
			    </thead>
			    <tbody>
		    	<?php
					  $i=1;
					  foreach($data as $row)
					  {
						  	echo "<tr>";
						  	echo "<td>".$row->name."</td>";
						  	echo "<td>".$row->enroll_no."</td>";
						  	echo "<td>".$row->email."</td>";
						  	echo "<td>".$row->password."</td>";
							echo "<td><a href='' class='w3-btn w3-green'>Edit</a></td>";
						  	echo "<td>".
						  		
						  			form_open('admin/deletestudent'),
						  			form_hidden('enroll_no',$row->enroll_no),
						  			form_submit(['name'=>'submit','value'=>'Delete','class'=>'w3-btn w3-red']),
						  			form_close();"</td>";
						  	echo "</tr>";
					  $i++;
					  }
					   ?>



			    </tbody>
			    
  			</table>
  		</div>

		 



	</div>



</body>


</html>