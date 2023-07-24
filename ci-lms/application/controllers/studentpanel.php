<?php

class studentpanel extends MY_controller
{
	public function index()
	{
		//$this-> load-> view('admin/studentindex');
		$this-> form_validation-> set_rules('uname','User Name','required|valid_email');
		$this-> form_validation-> set_rules('pass','Password','required|max_length[8]');
		$this-> form_validation-> set_error_delimiters('<div class="text-danger">','</div>');

		if($this-> form_validation-> run())
			
		{
			$uname=$this-> input-> post('uname');
			$pass=$this-> input-> post('pass');

			//from login model...
			$this-> load-> model('loginmodel');
			$er=$this-> loginmodel-> isvalidate($uname,$pass);
			if($er)
			{
				//logic correct...
				$this-> load-> library('session');
				$this-> session-> set_userdata('enroll_no',$er);
				//$this-> load-> view('admin/index');
				return redirect('studentpanel/welcome');

			}
			else
			{
				////logic failed...
				echo "details not matched";
			}



		}
		else
		{
			$this-> load-> view('Users/login');		
		}
	}
	public function welcome()
	{
		$this-> load-> view('studentpanel/index');
	}
 


 //book..............................................................................
	public function book()
	{
		$this-> load-> model('loginmodel','bk');
		$result['data']=$this-> bk->booklist();
		$this-> load-> view('studentpanel/book' ,$result);
	} 
	public function issuebook()
	{

	}


}


?>