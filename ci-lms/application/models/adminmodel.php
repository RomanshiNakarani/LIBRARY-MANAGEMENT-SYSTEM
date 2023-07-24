<?php
/**
 * 
 */
class adminmodel extends CI_model
{
	
	/*public function insert_book()
	{
		# code...
		$book = array(
						'bookname' => $this-> input-> post('bname') ,
						  'author' => $this-> input-> post('aname'),
						  'book_id' => $this-> input-> post('bid'),
						  'publishing_date' => $this-> input-> post('date_out')
						  
						    );
			
	}*/
	public function insert_student()
	{
		$stu = array('name' => $this-> input-> post('fname') ,
						  'enroll_no' => $this-> input-> post('erno'),
						  'email' => $this-> input-> post('email'),
						  'password' => $this-> input-> post('pass')
						    );
			$this-> db-> insert('regi',$stu);

	}

	public function add_book()
	{
		$book  = array('bookname' => $this-> input-> post('bname'),
						  'author' => $this-> input-> post('aname'),
						  'book_id' => $this-> input-> post('bid'),
						  'publishing_date' => $this-> input-> post('date_out'));
		$this-> db-> insert('book',$book);
	}
	public function adminlist()
		{
			$query=$this->db->query("select * from admin");
			return $query->result();
		}
}

?>zd  