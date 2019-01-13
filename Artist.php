<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artist extends CI_Controller {

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
$this->load->model('Artist_Model');

$this->load->helper('url');

}
	public function index()
	{
		$this->load->view('artist/artist_dashboard');
	}

	public function editArtistProfile()
	{
		$this->load->view('artist/editArtistProfile');
	}

	public function my_portfolio()
	{
		$this->load->view('artist/my_portfolio');
	}

	public function view_jobs()
	{
		$this->load->view('artist/view_jobs');
	}

	public function my_application()
	{
		$this->load->view('artist/my_application');
	}
	public function artist_applications()
	{
		$this->load->view('artist/artist_applications');
	}
	public function artistDetails()
	{

		$this->load->view('artist/artistDetails');		
	}
	public function artistTalent()
	{
		$this->load->view('artist/artistTalent');		
	}
	public function artistEducation()
	{
		$this->load->view('artist/artistEducation');		
	}
	public function artistExperience()
	{
		$this->load->view('artist/artistExperience');		
	}
	public function artistAddInfo()
	{
		$this->load->view('artist/artistAddInfo');		
	}
	public function artistMedia()
	{
		$this->load->view('artist/artistMedia');		
	}

	public function artistSocialLinks()
	{
		$this->load->view('artist/artistSocialLinks');		
	}
	public function artistSubTalent()
	{
		$this->load->view('artist/artistSubTalent');		
	}
	public function artistInterests()
	{
		$this->load->view('artist/artistInterests');		
	}
	public function artistPhyAtt()
	{
		$this->load->view('artist/artistPhyAtt');		
	}


	// This function is use for to update candidate profile details.

	public function EditProfile(){
		$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){
					if(isset($_POST['edit'])){

						if(!empty($_FILES['profile_pic']['name'])){

							$path = "assets/uploads/images/profile_pic/";
			            $ename = $_FILES['profile_pic']['name'];
			            $tmp = $_FILES['profile_pic']['tmp_name'];
			            $img_path = $path.$ename;
			            if(move_uploaded_file($tmp, $img_path))
			            {

			            }
							$data['profile_pic']= $ename;
						}
					
						
						$data['name'] = $this->input->post('name');
						
						$data['email_id'] = $this->input->post('email');
						$data['city'] = $this->input->post('city');
						$data['contact_no'] = $this->input->post('mobile');
						//$data['highest_qualification'] = implode(",", $this->input->post('qualification'));
						//$data['skills'] = implode(",", $this->input->post('skills'));
						//$data['city'] = $this->input->post('city');

						$this->db->where('a_id',$artist_id);
			            $this->db->update('artists',$data);

					    $message = '<div class="alert alert-success">Profile Updated Successfully.... </div>';
						$this->session->set_flashdata('message_client',$message);

						redirect(base_url('artist/artist_dashboard'));	

					}else{
						$data['profile'] = $this->db->select('*')->from('artists')->where('a_id',$artist_id)->get()->result_array();

							
							$this->load->view('artist/editArtistProfile',$data);
							
					}
			}
			else{
				redirect(base_url('welcome'));
			}	
	}

public function artistGeneralInfo()
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){
					/*if(isset($_POST['submit'])){*/

						if(!empty($_FILES['profile_pic']['name'])){

						$path = "assets/images/profile_pic/";
			            $ename = $_FILES['profile_pic']['name'];
			            $tmp = $_FILES['profile_pic']['tmp_name'];
			            $img_path = $path.$ename;
			            if(move_uploaded_file($tmp, $img_path))
			            {

			            }
							$data['profile_pic']= $ename;
						}
					
						
						$data['name'] = $this->input->post('name');
						$data['email_id'] = $this->input->post('email');
						$data['contact_no'] = $this->input->post('mobile');
						$data['city'] = $this->input->post('city');
						$data['whatsup_no'] = $this->input->post('whatsapp');
						$data['pin_code'] = $this->input->post('zipcode');
						$data['gender'] = $this->input->post('gender');
						$data['date_of_birth'] = $this->input->post('dob');
						$data['terms_condition'] = $this->input->post('terms');
						

						$this->db->where('a_id',$artist_id);
			            $this->db->update('artists',$data);
			             echo json_encode($data);

					 //    $message = '<div class="alert alert-success">Profile Updated Successfully.... </div>';
						// $this->session->set_flashdata('message_client',$message);

						//redirect(base_url('artist/artistTalent'));	

					/*}else
					{

						  
							$this->load->view('artist/artistDetails');
							
					}*/
			}
			else{
				redirect(base_url('welcome'));
			}	
	}
	

	public function artist_talent()
{

//echo('hiiiii');
		$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){
				
				$result=implode(',',$this->input->post('talent_name'));
				$data['talent']=$result;			
																
				$this->db->where('a_id',$artist_id);
					
			   $this->db->update('artists',$data);
					
					echo json_encode($data);
			}
			else
			{
				redirect(base_url('welcome'));
			}	
	
}


	public function artist_sub_talent()
{


		$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){
				
				$result=implode(',',$this->input->post('sub_talent_name'));
				$data['sub_talent']=$result;			
																
				$this->db->where('a_id',$artist_id);
					
			    $this->db->update('artists',$data);
					
					echo json_encode($data);
			}
			else
			{
				redirect(base_url('welcome'));
			}	
	
}
public function artist_phy_att()
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){
					/*if(isset($_POST['submit'])){*/

					
						
						$data['weight'] = $this->input->post('weight');
						$data['height'] = $this->input->post('height');
						$data['chest'] = $this->input->post('chest');
						$data['waist'] = $this->input->post('waist');
						$data['body_type'] = $this->input->post('body_type');
						$data['ethinicity'] = $this->input->post('ethinicity');
						$data['hair_type'] = $this->input->post('hair_type');
						$data['hair_length'] = $this->input->post('hair_length');
						$data['eye_color'] = $this->input->post('eye_color');
						$data['skin_tone'] = $this->input->post('skin_tone');
						$data['hair_color'] = $this->input->post('hair_color');

						$this->db->where('a_id',$artist_id);
			           $data['result']= $this->db->update('artists',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
	}
	public function artist_social_links()
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){
					/*if(isset($_POST['submit'])){*/

					
						
						$data['facebook_url'] = $this->input->post('facebook');
						$data['instagram_url'] = $this->input->post('instagram');
						$data['twitter_url'] = $this->input->post('twitter');
						$data['youtube_url'] = $this->input->post('youtube');
						$data['website_url'] = $this->input->post('website');
						$data['imdb_url'] = $this->input->post('imdb');
						// print_r($data);
							// console.log($data);
						$this->db->where('a_id',$artist_id);
			           $data['result']= $this->db->update('artists',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
	}

public function artist_add_info()
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){
					/*if(isset($_POST['submit'])){*/

					
						
						$data['min_budget'] = $this->input->post('min_budget');
						$data['max_budget'] = $this->input->post('max_budget');
						$data['about_info'] = $this->input->post('about_me');
						

						$this->db->where('a_id',$artist_id);
			           $data['result']= $this->db->update('artists',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
	}


	public function artist_education($id)
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){
					/*if(isset($_POST['submit'])){*/

					
						$data['a_id']=$artist_id;
						$data['school_clg_company'] = $this->input->post('school');
						$data['course_completed'] = $this->input->post('course');
						$data['year_of_completion'] = $this->input->post('year_edu');
						$data['e_city'] = $this->input->post('city_edu');
						$data['e_country'] = $this->input->post('country');
						

						$this->db->where('edu_id',$id);
			           $data['result']= $this->db->update('artist_edu',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
	}

	function delete_fullshot($id)
	{
$data['full_pic']='';   
		
		
    $this->Artist_Model->delete_fullshotimg($id,$data);
    //$this->index();
	}
	function delete_rightshot($id)
	{
$data['right_pic']='';   
		
		
    $this->Artist_Model->delete_rightshotimg($id,$data);
    //$this->index();
	}	
	function delete_leftshot($id)
	{
$data['left_pic']='';   
		
		
    $this->Artist_Model->delete_leftshotimg($id,$data);
    //$this->index();
	}	
function delete_headshot($id)
	{
$data['head_shot']='';   
		
		
    $this->Artist_Model->delete_headshotimg($id,$data);
    //$this->index();
	}	
function delete_edu($id)
{
//alert($id);
    $this->Artist_Model->delete_edu($id);
    //$this->index();
}
function delete_exp($id)
{
//alert($id);
    $this->Artist_Model->delete_exp($id);
    //$this->index();
}

public function add_artist_edu()
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){
					/*if(isset($_POST['submit'])){*/

						$data['a_id']=$artist_id;
						
						$data['school_clg_company'] = $this->input->post('school');
						$data['course_completed'] = $this->input->post('course');
						$data['year_of_completion'] = $this->input->post('year_edu');
						$data['e_city'] = $this->input->post('city_edu');
						$data['e_country'] = $this->input->post('country');

						$this->db->where('edu_id',$artist_id);
			           $data['result']= $this->db->insert('artist_edu',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
	}


	public function artist_interests()
{
		$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){

						
				$result=implode(',',$this->input->post('interests_name'));
			$data['interests']=$result;				
																
				$this->db->where('a_id',$artist_id);
					
			$this->db->update('artists',$data);
						
							
			echo json_encode($result);
			}
			else
			{
				redirect(base_url('welcome'));
			}	

}

	public function add_artist_exp()
{
	//echo('hiii');
		$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){

						$data['a_id']=$artist_id;
				
						$data['skill_type'] = $this->input->post('skill');
						$data['sub_skill_type'] = $this->input->post('sub_skill');
						$data['project_title'] = $this->input->post('project_title');
						$data['role_in_project'] = $this->input->post('project_role');
						$data['year'] = $this->input->post('year');
						

						$this->db->where('exp_id',$artist_id);
			           $data['result']= $this->db->insert('artist_exp',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
}

	public function artist_expe($id)
{
	
		$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){

						$data['a_id']=$artist_id;
				
						$data['skill_type'] = $this->input->post('skill');
						$data['sub_skill_type'] = $this->input->post('sub_skill');
						$data['project_title'] = $this->input->post('project_title');
						$data['role_in_project'] = $this->input->post('project_role');
						$data['year'] = $this->input->post('year');
						

						$this->db->where('exp_id',$id);
			           $data['result']= $this->db->update('artist_exp',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
}


public function artist_media()
{
		$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){
							if(!empty($_FILES['head_shot']['name'])){

						$path = "assets/images/profile_pic/";
			            $ename1 = $_FILES['head_shot']['name'];
			            $tmp = $_FILES['head_shot']['tmp_name'];
			            $img_path = $path.$ename1;
			            if(move_uploaded_file($tmp, $img_path))
			            {

			            }
							$data['head_shot']= $ename1;
						}
					    if(!empty($_FILES['left_shot']['name'])){

						$path = "assets/images/profile_pic/";
			            $ename2 = $_FILES['left_shot']['name'];
			            $tmp = $_FILES['left_shot']['tmp_name'];
			            $img_path = $path.$ename2;
			            if(move_uploaded_file($tmp, $img_path))
			            {

			            }
							$data['left_pic']= $ename2;
						}
						if(!empty($_FILES['right_shot']['name'])){

						$path = "assets/images/profile_pic/";
			            $ename3 = $_FILES['right_shot']['name'];
			            $tmp = $_FILES['right_shot']['tmp_name'];
			            $img_path = $path.$ename3;
			            if(move_uploaded_file($tmp, $img_path))
			            {

			            }
							$data['right_pic']= $ename3;
						}
					    if(!empty($_FILES['full_shot']['name'])){

						$path = "assets/images/profile_pic/";
			            $ename4 = $_FILES['full_shot']['name'];
			            $tmp = $_FILES['full_shot']['tmp_name'];
			            $img_path = $path.$ename4;
			            if(move_uploaded_file($tmp, $img_path))
			            {

			            }
							$data['full_pic']= $ename4;
						}



						if(!empty($_FILES['audios']['name'])){

						$path = "assets/images/profile_pic/";
			            $ename5 = $_FILES['audios']['name'];
			            $tmp = $_FILES['audios']['tmp_name'];
			            $img_path = $path.$ename5;
			            if(move_uploaded_file($tmp, $img_path))
			            {

			            }
							$data['audio']= $ename5;
						}



						if(!empty($_FILES['scripts']['name'])){

						$path = "assets/images/profile_pic/";
			            $ename6 = $_FILES['scripts']['name'];
			            $tmp = $_FILES['scripts']['tmp_name'];
			            $img_path = $path.$ename6;
			            if(move_uploaded_file($tmp, $img_path))
			            {

			            }
							$data['scripts']= $ename6;
						}
						
				
						$data['video_url'] = $this->input->post('videos');
						//$data['scripts'] = $this->input->post('scripts');
						//$data['audio'] = $this->input->post('audios');
						

						$this->db->where('a_id',$artist_id);
			           $data['result']= $this->db->update('artists',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
}
public function editdetails()
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){

if(isset($_POST['btnArtistDetails'])){

if(!empty($_FILES['profile_pic']['name'])){

						$path = "assets/images/profile_pic/";
			            $ename = $_FILES['profile_pic']['name'];
			            $tmp = $_FILES['profile_pic']['tmp_name'];
			            $img_path = $path.$ename;
			            if(move_uploaded_file($tmp, $img_path))
			            {

			            }
							$data['profile_pic']= $ename;
						}
					
						
						$data['name'] = $this->input->post('name');
						$data['email_id'] = $this->input->post('email');
						$data['contact_no'] = $this->input->post('mobile');
						$data['city'] = $this->input->post('city');
						$data['whatsup_no'] = $this->input->post('whatsapp');
						$data['pin_code'] = $this->input->post('zipcode');
						$data['gender'] = $this->input->post('gender');
						$data['date_of_birth'] = $this->input->post('dob');
						$data['terms_condition'] = $this->input->post('terms');
						

						$this->db->where('a_id',$artist_id);
			            $this->db->update('artists',$data);

					   
}
else{

	$data['result'] = $this->db->select('*')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->result_array();
	$this->load->view('artist/artistEditDetails',$data);

}


}
}
public function edittalent()
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){

if(isset($_POST['btnArtistTalentRegister'])){


					
						$result=implode(',',$this->input->post('talent_name'));
				$data['talent']=$result;			
																
				$this->db->where('a_id',$artist_id);
					
			    $result['a'] = $this->db->update('artists',$data);
					
					echo json_encode($data);
			}

else{

	$data['result'] = $this->db->select('*')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->result_array();
	$this->load->view('artist/artistEditTalent',$data);
}
}
}

public function editsubtalent()
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){

if(isset($_POST['btnArtistSubTalentRegister'])){

$result=implode(',',$this->input->post('sub_talent_name'));
				$data['sub_talent']=$result;			
																
				$this->db->where('a_id',$artist_id);
					
			    $result['a'] = $this->db->update('artists',$data);
					
					echo json_encode($data);
			}

else{

	$data['result'] = $this->db->select('*')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->result_array();
	$this->load->view('artist/artistEditSubTalent',$data);
}
}
}

public function editinterest()
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){

if(isset($_POST['btnArtistInterestRegister'])){

$result=implode(',',$this->input->post('interests_name'));
			$data['interests']=$result;				
																
				$this->db->where('a_id',$artist_id);
					
			$result['a'] = $this->db->update('artists',$data);
						
							
			echo json_encode($result);
			}
else{

	$data['result'] = $this->db->select('*')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->result_array();
	$this->load->view('artist/artistEditInterest',$data);
}
}
}

public function editphyatt()
{
	$artist_id = $this->session->userdata('ARTIST_ID');

			if($artist_id !=0){

if(isset($_POST['btnArtistPhyAttRegister'])){


						$data['weight'] = $this->input->post('weight');
						$data['height'] = $this->input->post('height');
						$data['chest'] = $this->input->post('chest');
						$data['waist'] = $this->input->post('waist');
						$data['body_type'] = $this->input->post('body_type');
						$data['ethinicity'] = $this->input->post('ethinicity');
						$data['hair_type'] = $this->input->post('hair_type');
						$data['hair_length'] = $this->input->post('hair_length');
						$data['eye_color'] = $this->input->post('eye_color');
						$data['skin_tone'] = $this->input->post('skin_tone');
						$data['hair_color'] = $this->input->post('hair_color');

						$this->db->where('a_id',$artist_id);
			           $data['result']= $this->db->update('artists',$data);
			           echo json_encode($data);

					   
			}
else{

	$data['result'] = $this->db->select('*')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->result_array();
	$this->load->view('artist/artistEditPhyAtt',$data);
}
}
}


}