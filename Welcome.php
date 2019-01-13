<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()

{

parent::__construct();

$this->load->helper('url');

}

	public function index()
	{
		$this->load->view('index');
	}
	public function common_login()
	{

		$this->load->view('common_login');
	}

	public function director_registration()
	{
		$this->load->view('director_registration');	
	}
//artist
    public function applied_jobs()
    {
        $this->load->view('artist/appliedjobs');
    }

	public function director_login()
	{

		$this->load->view('director_login');
	}

	public function director_register()
	{
		$this->load->view('director_register');	
	}

	
	public function director_reg_old()
	{
       $this->load->model('Director_Model');
       $data['result'] = $this->Director_Model->insert_director_regi();



       	$name="snehal";
       	$email="snehal.shinde@techwonderkinds.com";
       	$phone="9860097305";
       	//$description="my description";
		$to ="snehalshinde054@gmail.com";
		$subject = 'test subject';
		$message = "
		<html>
		<head>
		<title></title>
		</head>
		<body>
		<h3>Contact details :</h3>
		<h4>Name Of User: ".$name."</h4>
		<h4>Email ID: ".$phone." </h4>
		</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
		$headers .= 'From: ' .$email. "\r\n";

		mail($to,$subject,$message,$headers);


    // echo $this -> email -> print_debugger();
	
	
//send email
 //$password = rand(1000,5000);

      


//        $name='snehal';


//        $receiver='snehalshinde054@gmail.com';

// // $to      = $email; // Send email to our user
// $subject = 'Signup | Verification'; // Give the email a subject 
// $message = '
 
// Thanks for signing up!
// Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
// ------------------------
// Username: '.$name.'
// Password: '.$password.'
// ------------------------
 
// Please click this link to activate your account:
// http://www.yourwebsite.com/verify.php?email='.$receiver.'&hash='.$password.'
 
// '; // Our message above including the link
                     
// $headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
// mail($receiver, $subject, $message, $headers); // Send our email




//         $this->email->from($from);
//         $this->email->to($receiver);
//         $this->email->subject($subject);
//         $this->email->message($message);
        
//         $this->email->send();
  
  
 
      



 //print_r($password);exit();




      // echo json_encode($data);
        $message = '<div class="alert alert-success">You are registered successfully! Make Login To Access Dashboard.</div>';
    				$this->session->set_flashdata('message',$message);
    				redirect(base_url('welcome'));

	}
	
	
	public function director_reg()
	{
       // $this->load->model('Director_Model');
       // $data['result'] = $this->Director_Model->insert_director_regi();
	
	   $email_id =$this->input->post('dir_email');
	   $this->session->set_userdata('directorEmail_id',$email_id);

       	$password = rand(1000,5000);
       	 $this->session->set_userdata('otpdata',$password);

 		// print_r($password);exit();

	$name="snehal";
       	$email="chetan.khairnar@techwonderkinds.com";
       	$phone="9860097305";
       	$description="my description";
		$to =$email_id;
		$subject = 'Director Registration OTP';
		$message = "
		<html>
		<head>
		<title></title>
		</head>
		<body>
		<p>This email is for Verification</p>
		<h4>OTP Code: ".$password."</h4>
		
		</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
		$headers .= 'From: ' .$email. "\r\n";

		mail($to,$subject,$message,$headers);

		 // $data['password']=$password;

		

		  $official_name =$this->input->post('companyName');
		  $this->session->set_userdata('directorOfficial_name',$official_name);

		  $contact_no =$this->input->post('contact_no');
		  $this->session->set_userdata('directorContact_no',$contact_no);

		 //  $email_id =$this->input->post('dir_email');
		  //$this->session->set_userdata('email_id',$email_id);

		   $city =$this->input->post('city');
		  $this->session->set_userdata('directorCity',$city);

		   $pin_code =$this->input->post('pin_code');
		  $this->session->set_userdata('directorPin_code',$pin_code);


		   $address =$this->input->post('off_add');
		  $this->session->set_userdata('directorAddress',$address);


		   $password =sha1($this->input->post('pass3'));
		  $this->session->set_userdata('directorPassword',$password);

		  if(!empty($_FILES['profile_pic']['name'])){

 				$this->session->set_userdata('profile_pic',$_FILES['profile_pic']['name']);

                // $path = "assets/images/profile_pic/";

                // $ename = $_FILES['profile_pic']['name'];
                // $tmp = $_FILES['profile_pic']['tmp_name'];
                // $img_path = $path.$ename;
                // if(move_uploaded_file($tmp, $img_path))
                // {

                // }
                // $data['profile_pic'] = $ename;



                }
                if(!empty($_FILES['script_name']['name'])){

                	$this->session->set_userdata('script_file',$_FILES['script_name']['name']);

                // $path = "assets/scripts/";

                // $sname = $_FILES['script_name']['name'];
                // $tmp = $_FILES['script_name']['tmp_name'];
                // $script_path = $path.$sname;
                // if(move_uploaded_file($tmp, $script_path))
                // {

                // }
                // $data['script_file'] = $sname;



                }

       // echo json_encode($data);

     	  //  $message = '<div class="alert alert-success">You are registered successfully! Make Login To Access Dashboard.</div>';
    				// $this->session->set_flashdata('message',$message);
    				redirect(base_url('welcome/otpVerification'));

	}

 public function otpVerification()
 	{
		$this->load->view('otpVerification');
	}

public function verifyOtp()
 	{
 		  $otp=$_POST["otp"];
 		 
 		  $otp_session = $this->session->userdata('otpdata');

			// print_r($this->session->userdata('otpdata'));exit;
 			// print_r($otp_session);exit;
 		  if($otp==$otp_session){

				// print_r($this->session->userdata());exit;

 		  	if(count($this->session->userdata())>6)
				{
                     $this->load->model('Director_Model');
                     $data['result'] = $this->Director_Model->insert_director_regi_new();
                     
                      if($data['result']=='')
                     {
                     	 // print_r($this->session->userdata());exit;

                       $this->session->unset_userdata('directorOfficial_name');
                       $this->session->unset_userdata('directorContact_no');
                       $this->session->unset_userdata('directorEmail_id');
                       $this->session->unset_userdata('directorCity');
                       $this->session->unset_userdata('directorPin_code');
                       $this->session->unset_userdata('directorAddress');
                       $this->session->unset_userdata('directorPassword');
                     }
				}
				else
				{
					  $this->load->model('Artist_Model');
                     $data['result'] = $this->Artist_Model->insert_register();
                     
                     if($data['result']=='')
                     {
                     	 // print_r($this->session->userdata());exit;

                       $this->session->unset_userdata('artistEmail_id');
                       $this->session->unset_userdata('artistName');
                        $this->session->unset_userdata('artist_contact_no');
                         $this->session->unset_userdata('artistPassword');
                     }
				}


         	 $message = '<div class="alert alert-success">You are registered successfully! Make Login To Access Dashboard.</div>';
    				$this->session->set_flashdata('regMessage',$message);
    				redirect(base_url('welcome/common_login'));
 		  }
 		  else
 		  {
 		  	 $message = '<div class="alert alert-success">Wrong OTP. </div>';
    				$this->session->set_flashdata('message',$message);
    				redirect(base_url('welcome/otpVerification'));
		 		  	// print_r('fails');exit;
 		  }
		
	}
	
	
	
	 public function signupArtist()
 	{
		$this->load->view('signupArtist');
	}
public function director_verifyotp()
{
        $otp=$_POST["otp"];
		$arr = array();
		if($otp==$_SESSION['directorVerify']['otp']){
			$data = array("emailId" => $_SESSION['directorVerify']['email']);
			$result= postReqWithParams(DIRECTOR_VERIFY_EMAIL,$data);	
			unset($_SESSION["directorVerify"]);
			$arr['status']='success';	
		}
		else{
			$arr['status']='fail';
			$arr['reason']='Please check OTP again.';
		}
		echo json_encode($result);
}
public function director_otpResend()
	{
		$url_director_otp_resend = DIRECTOR_OTP_RESEND;
		$data = array(
			"userType" => "Director",
			"email" => $_POST["email"],
		);
		$result = postReqWithParams($url_director_otp_resend,$data);
		$result["otp"]=$_SESSION['directorVerify']['otp'];
    	echo json_encode($result);
	}

	public function admin_login()
	{
		$this->load->view('admin_login');
	}
	public function admin_register()
	{
		$this->load->view('admin_register');
	}
	public function admin_reg()
	{
       $this->load->model('admin_model');
       
       $data['result'] = $this->admin_model->insert_admin_reg();

       echo json_encode($data);

	}
	public function check_admin_login()
	{
		$data['email_id'] = $this->input->post('email_id');
	    $data['password'] = sha1($this->input->post('password'));
	    $sql = $this->db->select('*')->from('admin')->where($data)->get()->result_array();

		if(!empty($sql))
		{
			$admin['data'] = $this->db->select('*')->from('admin')->where($data)->get()->row();
			$sessionset = $this->SetDataInSession_admin($admin['data']);
			if($sessionset == true){
				$this->session->set_flashdata('request','fromlogin');
				redirect(base_url('admin'));	
			}
		}
		else
		{
			$message = '<div class="alert alert-danger">Invalid Email Id and Password </div>';
			$this->session->set_flashdata('message',$message);
			redirect(base_url('welcome/admin_login'));	
		}
		
	}
	public function check_director_login()
	{
		
		$data['user_email'] = $this->input->post('d_email');
		$data['user_pass'] = sha1($this->input->post('d_password'));

		//$data1['email_id'] = $this->input->post('d_email');
		//$data1['password'] = sha1($this->input->post('d_password'));

        //$data2['email_id'] = $this->input->post('d_email');
		//$data2['password'] = sha1($this->input->post('d_password'));


		$data_e['user_email'] = $this->input->post('d_email');
		$data_p['user_pass'] = sha1($this->input->post('d_password'));
		//return $data;
		
		//$data_u['user_email'] = $data_e['email_id'];
		//$data_u['user_pass'] = $data_p['password'];

		//$sql1 = $this->db->select('*')->from('user')->where($data_u)->get()->result_array();


		
		 $sql_email = $this->db->select('*')->from('user')->where($data_e)->join('user_type', 'user_type.type_id = user.type_id', 'inner')->get()->result_array();
		 // $sql="select * from 'user' where $data_e join('user_type', 'user_type.type_id = user.type_id','inner')";
		 // echo $sql;exit;

		// print_r($sql_email);exit;
		if(!empty($sql_email))
		{
			$user_type=$sql_email[0]['type_name'];
    		$sql = $this->db->select('*')->from('user')->where($data)->join($user_type, $user_type.'.email_id = user.user_email', 'inner')->get()->result_array();
    	
 			/*echo $this->db->last_query();//exit;   
 			echo '<pre>';	
    		print_r($sql);exit;*/
    		if(!empty($sql))
    		{ 
    			/*
    			$this->db->select('*');
    			$this->db->from('user_type');
    			$this->db->join('user','user.type_id=user_type.type_id');
    			$query = $this->db->get();
    			if($query=='director')
    			{
    				$sql2 = $this->db->select('*')->from('directors')->where($data2)->get()->result_array();
    			}

    			else
    			{
    				$sql3 = $this->db->select('*')->from('artists')->where($data1)->get()->result_array();
    			}
    			*/
    			//get()->result_array();
    			if($sql[0]['status'] == 0)
    			{
    				$message = '<div class="alert alert-success">Your Account Is Still Pending Approval. Please Wait for Verification of your account.</div>';
    				$this->session->set_flashdata('message',$message);
    				redirect(base_url('welcome/common_login'));
    			}
    			if($sql[0]['status'] == 1)
    			{
    				//$empType['data'] = $this->db->select('*')->from('user_type')->where($sql)->get()->row();
    				//$emp['data'] = $this->db->select('*')->from('directors')->where($data)->get()->row();

    				$sessionset = $this->SetDataInSession_director($sql);
    			// print_r($sessionset);exit;
    			//print_r()
    				if($sessionset == true){
					
    					$this->session->set_flashdata('request','fromlogin');
    					redirect(base_url('dashboard'));	
    				}
    			}
    			if($sql[0]['status'] == 2)
    			{
    				$message = '<div class="alert alert-success">Your Account Is Rejected. Please Contact For More Info.</div>';
    				$this->session->set_flashdata('message',$message);
    				redirect(base_url('welcome/common_login'));	
    			}	
    		}
    		else
    		{
    			$message = '<div class="alert alert-success">InValid Password .</div>';
    			$this->session->set_flashdata('message',$message);
    			redirect(base_url('welcome/common_login'));	
    		}
		}
	
	
/*
	else
	{
			$message = '<div class="alert alert-success">InValid Login .</div>';
    			$this->session->set_flashdata('message',$message);
    			redirect(base_url('welcome/signup'));		
	}
}*/

		else
		{
    			$message = '<div class="alert alert-success">InValid Email Id .</div>';
    			$this->session->set_flashdata('message',$message);
    			redirect(base_url('welcome/common_login'));	
		}
		


	}

	public function director_otp()
	{
		$this->load->view('director_otp');
	}

	public function artistLogin()
	{
		$this->load->view('artistLogin');
	}
   public function signup()
 	{
		$this->load->view('signup');
	}
	
	public function check_artist_login()
	{
		$data['email_id'] = $this->input->post('email_id');
		$data['password'] = sha1($this->input->post('password'));

		$data_e['email_id'] = $this->input->post('email_id');
		$data_p['password'] = sha1($this->input->post('password'));
		
		$sql_email = $this->db->select('*')->from('artists')->where($data_e)->get()->result_array();
		if(!empty($sql_email))
		{
    		$sql = $this->db->select('*')->from('artists')->where($data)->get()->result_array();
    		if(!empty($sql))
    		{
    			if($sql[0]['status'] == 0)
    			{
    				$message = '<div class="alert alert-success">Your Account Is Still Pending Approval. Please Wait for Verification of your account.</div>';
    				$this->session->set_flashdata('message',$message);
    				redirect(base_url('welcome/artistLogin'));
    			}
    			if($sql[0]['status'] == 1)
    			{
    				$emp['data'] = $this->db->select('*')->from('artists')->where($data)->get()->row();
    				$sessionset = $this->SetDataInSession_artist($emp['data']);
    				if($sessionset == true){
    					$this->session->set_flashdata('request','fromlogin');
    					redirect(base_url('artist'));	
    				}
    			}
    			if($sql[0]['status'] == 2)
    			{
    				$message = '<div class="alert alert-success">Your Account Is Rejected. Please Contact For More Info.</div>';
    				$this->sessiweon->set_flashdata('message',$message);
    				redirect(base_url('welcome/artistLogin'));	
    			}	
    		}
    		else
    		{
    			$message = '<div class="alert alert-success">InValid Password .</div>';
    			$this->session->set_flashdata('message',$message);
    			redirect(base_url('welcome/artistLogin'));	
    		}
		}
		else
		{
    			$message = '<div class="alert alert-success">InValid Email Id .</div>';
    			$this->session->set_flashdata('message',$message);
    			redirect(base_url('welcome/artistLogin'));	
		}
		

	}
	
	public function artist_forgot_password()
	{
		$this->load->view('artist_forgot_password');
	}
	public function terms_conditions()
	{
		$this->load->view('terms_conditions');
	}

	public function privacy_policy()
	{
		$this->load->view('privacy_policy');
	}

	public function posted_jobs()
	{

		$data['result'] = $this->db->select('*')->from('job_posts')->where('job_status','1')->get()->result_array();
		
		$this->load->view('posted_jobs',$data);
	}
   
   public function job_details()
	{

        $job_id = $this->input->get('job_id');
		$data['result'] = $this->db->select('*')->from('job_posts')->where('job_id',$job_id)->get()->result_array();
	
		$this->load->view('director/job_details',$data);
		
	}
	
	public function view_job_details()
	{
		$this->load->view('job_details');
	}

	public function contact()
	{
		$this->load->view('contact_details');
	}
	public function about()
	{
		$this->load->view('about');
	}

	private function SetDataInSession_admin($data){
		$this->session->set_userdata('ADMIN_ID',$data->id);
		$this->session->set_userdata('EMAIL_ID',$data->email_id);
		$this->session->set_userdata('OFFICIAL_NAME',$data->official_name);
		$this->session->set_userdata('CONTACT_NO',$data->mobile_no);

		return true;
	}

	private function SetDataInSession_director($data){
			// print_r($data);exit;

		if($data[0]['type_id']=="1"){
			$this->session->set_userdata('DIRECTOR_ID',$data[0]['d_id']);


		$this->session->set_userdata('EMAIL_ID',$data[0]['email_id']);
		$this->session->set_userdata('CONTACT_NO',$data[0]['conact_no']);
		$this->session->set_userdata('ADDRESS',$data[0]['address']);
		$this->session->set_userdata('OFFICIAL_NAME',$data[0]['official_name']);
		$this->session->set_userdata('role','Director');

		}
		else{
				// print_r($data[0]['user_email']);exit;
        $this->session->set_userdata('ARTIST_ID',$data[0]['a_id']);
        $this->session->set_userdata('EMAIL_ID',$data[0]['email_id']);
        $this->session->set_userdata('name',$data[0]['name']);
        $this->session->set_userdata('role','Artists');

        //print_r($data1);exit;
        // print_r($this->session->set_userdata('ARTIST_ID',$data->a_id);exit;

		// $this->session->set_userdata('EMAIL_ID',$data->email_id);
		}
		
		return true;
	}

	private function SetDataInSession_artist($data){
		$this->session->set_userdata('ARTIST_ID',$data->a_id);
		$this->session->set_userdata('EMAIL_ID',$data->email_id);
		return true;
	}

	public function admin_logout()
	{
		if($this->session->has_userdata('ADMIN_ID') != ''){
			$this->session->sess_destroy();	
			redirect(base_url('welcome/admin_login'));
		}
		redirect(base_url('welcome'));
	}
	public function director_logout()
	{
		if($this->session->has_userdata('DIRECTOR_ID') != ''){
			$this->session->sess_destroy();	
			redirect(base_url('welcome/director_login'));
		}
		redirect(base_url('welcome'));
	}
	public function artist_logout()
	{
		if($this->session->has_userdata('ARTIST_ID') != ''){
			$this->session->sess_destroy();	
			redirect(base_url('welcome/artistLogin'));
		}
		redirect(base_url('welcome'));
	}
	public function register()
	{
	
	
       	  $email_id =$this->input->post('email');
	      $this->session->set_userdata('artistEmail_id',$email_id);

         $otp = rand(1000,5000);
       	 $this->session->set_userdata('otpdata',$otp);
	  
       	$email="chetan.khairnar@techwonderkinds.com";  
		$to =$email_id;
		$subject = 'Artists Registration OTP';
		$message = "
		<html>
		<head>
		<title></title>
		</head>
		<body>
		<p>This email is for Verification</p>
		<h4>OTP Code: ".$otp."</h4>
		
		</body>
		</html>
		";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: ' .$email. "\r\n";

		mail($to,$subject,$message,$headers);

		  $name =$this->input->post('user_name');
		  $this->session->set_userdata('artistName',$name);

		  $contact_no =$this->input->post('mobile');
		  $this->session->set_userdata('artist_contact_no',$contact_no);

		   $password =$this->input->post('pass2');
		  $this->session->set_userdata('artistPassword',$password);

    	  redirect(base_url('welcome/otpVerification'));
	}
}
