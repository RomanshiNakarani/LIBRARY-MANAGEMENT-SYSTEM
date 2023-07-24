 <?php 
 
class admin extends MY_controller
{   
	public function index()
	{
		//$this-> load-> view('admin/index');




		//$this-> load-> library('form_validation');
	
		$this-> form_validation-> set_rules('uname','User Name','required|valid_email');
		$this-> form_validation-> set_rules('pass','Password','required|max_length[8]');
		$this-> form_validation-> set_error_delimiters('<div class="text-danger">','</div>');

		if($this-> form_validation-> run())
			
		{
			$uname=$this-> input-> post('uname');
			$pass=$this-> input-> post('pass');

			//from login model...
			$this-> load-> model('loginmodel');
			$ai=$this-> loginmodel-> loginvalidate($uname,$pass);
			if($ai)
			{
				//logic correct...
				$this-> load-> library('session');
				$this-> session-> set_userdata('admin_id',$ai);
				//$this-> load-> view('admin/index');
				return redirect('admin/welcome');

			}
			else
			{
				////logic failed...
				echo "details not matched";
			}



		}
		else
		{
			$this-> load-> view('Users/adminlogin');		
		}
		//echo "TESTINGGGGG";

		
	} 

	public function welcome()
	{
		$this-> load-> view('admin/index');
		
			
	}

					public function __construct()
					{
					/*call CodeIgniter's default Constructor*/
					parent::__construct();
					
					/*load database libray manually*/
					$this->load->database();
					
					/*load Model*/
					$this->load->model('loginmodel');
					}


	public function student()
	{
		$this-> load-> model('loginmodel','stu');
		//$student=$this-> stu-> studentlist(); 
		//$this-> load-> view('admin/student',['student'=>$student]);
		$result['data']=$this-> stu->studentlist();
		$this-> load-> view('admin/student',$result);
		//$this->load->view('display_records',$result);
	} 

	public function addstudent()
	{
		$this-> load-> view('admin/addstudent');
		$this-> form_validation-> set_rules('fname','Student name','required|alpha_numeric');
		$this-> form_validation-> set_rules('erno','Enroll No','required|alpha_numeric');
		$this-> form_validation-> set_rules('email','Email','required|valid_email|is_unique[regi.email]');
		$this-> form_validation-> set_rules('pass','Password','required|max_length[8]');
		$this-> form_validation-> set_rules('cpass','Confirm Password','required|matches[pass]');
		$this-> form_validation-> set_error_delimiters('<div class="text-danger">','</div>');
		if($this-> form_validation-> run())
		{
			//$this-> load-> view('admin/addstudent');
			$this-> load-> model('adminmodel','am');
			$this-> am-> insert_student();
		}

	} 
	public function deletestudent()
	{
		$erno=$this-> input->post('enroll_no');
		$this-> load-> model('loginmodel','deletestudent');
		$var=$this-> deletestudent->delstudent($erno);
		if($var)
		{
			$this-> session->set_flashdata('msg','book record deleted successfully');
			$this-> session->set_flashdata('msg_class','w3-panel w3-pale-green w3-border');
		}
		else
		{
			$this-> session->set_flashdata('msg','please try again...not delete');
			$this-> session->set_flashdata('msg_class','w3-panel w3-pale-red w3-border');
		}
		return redirect('admin/student');
	}

	public function book()
	{
		$this-> load-> model('loginmodel','bk');
		$result['data']=$this-> bk->booklist();
		$this-> load-> view('admin/book' ,$result);
	} 

	public function deletebook()
	{
		$bid=$this-> input->post('book_id');
		$this-> load-> model('loginmodel','deletebook');
		if($this-> deletebook->delbook($bid))
		{
			$this-> session->set_flashdata('msg','student record deleted successfully');
			$this-> session->set_flashdata('msg_class','alert-success');
		}
		else
		{
			//$this-> session->set_flashdata('msg','please try again...not delete');
			//$this-> session->set_flashdata('msg_class','alert-danger');
		}
		return redirect('admin/book');
	}


	public function addbook()
	{
		$this-> load-> view('admin/addbook');

		$this-> form_validation-> set_rules('bname','Book Name','required|alpha_numeric');
		$this-> form_validation-> set_rules('aname','Author Name','required|alpha_numeric');
		$this-> form_validation-> set_rules('bid','Book Id','required|alpha_numeric|is_unique[book.book_id]');
		$this-> form_validation-> set_rules('date_out','date','required');
		$this-> form_validation-> set_error_delimiters('<p class="text-danger">','</p>');
			if($this-> form_validation-> run())
			{
				$this-> load-> model('adminmodel','am');
				$this-> am-> add_book();
				//return redirect('admin/insertbook');
			}	
	} 
	

}


?>
