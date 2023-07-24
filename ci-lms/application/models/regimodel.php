<?php
	/**
	 * 
	 */
	class regimodel extends CI_model
	{
		
		public function insert_data()
		{
			# code...
			$data = array('name' => $this-> input-> post('fname') ,
						  'enroll_no' => $this-> input-> post('erno'),
						  'email' => $this-> input-> post('email'),
						  'password' => $this-> input-> post('pass')
						    );
			$this-> db-> insert('regi',$data);
			
		}
	}



?>