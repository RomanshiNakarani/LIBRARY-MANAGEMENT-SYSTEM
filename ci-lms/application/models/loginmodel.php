<?php
	class loginmodel extends CI_model
	{
		public function isvalidate($email,$password)
		{
			


			$q=$this-> db-> where(['email'=>$email,'password'=>$password])
				         ->get('regi'); //select * from regi where email=$email and password=$password;
				    		
				    		//echo "<pre>";
				    		//print_r($q);
				         
					if($q->num_rows())
				    {
				    	return $q->row()->enroll_no;
				    }
				    else
				    {
				    	return false;

				    }


		}
		public function loginvalidate($email,$password)
		{
			$q=$this-> db-> where(['email'=>$email,'password'=>$password])
				         ->get('admin'); //select * from regi where email=$email and password=$password;
				    		
				    		//echo "<pre>";
				    		//print_r($q);
				         
					if($q->num_rows())
				    {
				    	return $q->row()->admin_id;
				    }
				    else
				    {
				    	return false;

				    }
		}

		public function studentlist()
		{
			//$this-> load-> library('session');
			//$er=$this-> session-> userdata('enroll_no');
			//$q=$this-> db-> select('name')
				    //  ->from('regi')
				     // ->where(['enroll_no'=>$er])
				     // ->get();
				     // return $q->result();
			$query=$this->db->query("select * from regi");
			return $query->result();
		}

		public function booklist()
		{
			$query=$this->db->query("select * from book");
			return $query->result();
		}
		public function delbook($bid)
		{
			$this-> db-> delete('book',['book_id'=>$bid]);
		}

		public function delstudent($erno)
		{
			$this-> db-> delete('regi',['enroll_no'=>$erno]);
		}



	}




?>