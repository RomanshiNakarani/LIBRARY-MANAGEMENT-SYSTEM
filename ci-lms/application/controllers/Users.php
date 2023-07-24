 <?php  
/**
 * 
 */
class Users extends MY_controller
{
	
	public function index()
	{

		$this-> load-> view('Users/index');
	} 


	public function about()
	{
		$this-> load-> view('Users/about');
	} 


	public function login()
	{
		$this-> load-> view('Users/login');
	} 
	public function registration()
	{
		$this-> load-> view('Users/registration');
	} 
	

	public function regi()
	{
		$this-> load-> view('Users/registration');

		//$this-> load-> library('form_validation');
		$this-> form_validation-> set_rules('fname','Your name','required|alpha');
		$this-> form_validation-> set_rules('erno','Enroll No','required|alpha_numeric');
		$this-> form_validation-> set_rules('email','Email','required|valid_email|is_unique[regi.email]');
		$this-> form_validation-> set_rules('pass','Password','required|max_length[8]');
		$this-> form_validation-> set_rules('cpass','Confirm Password','required|matches[pass]');
		$this-> form_validation-> set_error_delimiters('<div class="text-danger">','</div>');

		if($this-> form_validation-> run())
			
		{
			
			

			$this-> load-> model('regimodel','rm');
			$this-> rm-> insert_data();
			$this-> load-> view('users/login');

		}
		else
		{
			$this-> load-> view('Users/registration');		
		}
		//echo "TESTINGGGGG";

	} 


	public function contact()
	{
		$this-> load-> view('Users/contact');
	} 
	public function adminlogin()
	{
		$this-> load-> view('Users/adminlogin');
	} 
	
	
	
}

 ?>