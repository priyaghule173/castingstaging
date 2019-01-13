<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Director extends CI_Controller {


	public function __construct()
	{
	parent::__construct();
	$this->load->model('Director_Model');

	}


	public function index()
	{
		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !='')
		{

        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

		$this->load->view('director/director_dashboard',$data);
		}
	else
	{
			redirect(base_url('welcome'));
		}	
	}

	public function editDirectorProfile()
	{

		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !='')
		{
		$data['result'] = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

		$this->load->view('director/editDirectorProfile',$data);
		// $this->load->view('dashboard/userprofile',$data);
		}
		else
		{
				redirect(base_url('welcome'));
			}	
			
		
	}

	public function director_editProfile()
	{

		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !='')
		{

       $this->load->model('Director_Model');

       $data['result'] = $this->Director_Model->update_director_regi();

       echo json_encode($data);
       }
		else
		{
				redirect(base_url('welcome'));
			}	
		
	}
	public function director_postjob()
	{

		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !='')
		{
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

		$this->load->view('director/director_postjob',$data);
		}
		else
		{
				redirect(base_url('welcome'));
				
			
		}
	}
	
	function add_director_work()
{		
		$DIRECTOR_ID = $this->session->userdata('DIRECTOR_ID');
		//echo('directorid'.$DIRECTOR_ID);
		//$DIRECTOR_TYPE=$this->session->userdata('DIRECTOR_TYPE_ID');
		//echo('director_type'.$DIRECTOR_TYPE);
			if($DIRECTOR_ID !=0){
						$data['d_id']=$DIRECTOR_ID;
						//$data['director_type_id']=$DIRECTOR_TYPE;
				$data['project_type']= $this->input->post('project_type');
               
                $data['project_title']= $this->input->post('project_title');
                 $data['production_name']= $this->input->post('production_name');
                  $data['year']= $this->input->post('year');
                $data['link']= $this->input->post('link');
               
                $data['additional_info']= $this->input->post('additional_info');

                
                $this->db->where('work_id',$DIRECTOR_ID);
               
			           $data['result']= $this->db->insert('director_work_exp',$data);
			           echo json_encode($data);

			}
			else{
				redirect(base_url('welcome'));
			}	
}


function delete_proj($id)
{
    $this->Director_Model->delete_proj($id);
    //$this->index();
}
function delete_award($id)
{
    $this->Director_Model->delete_award($id);
    //$this->index();
}
function delete_assoc($id)
{
    $this->Director_Model->delete_assoc($id);
    //$this->index();
}


public function director_edit($id)
{
//$this->load->model('director_model');

//$data['result'] = $this->director_model->edit_job_post();

$q['data']=$this->Director_Model->director_edit($id);
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($q));
//return $q;
}
public function director_workexp($id)

{		
		$DIRECTOR_ID = $this->session->userdata('DIRECTOR_ID');
		//echo('directorid'.$DIRECTOR_ID);
		$DIRECTOR_TYPE=$this->session->userdata('DIRECTOR_TYPE_ID');
		//echo('director_type'.$DIRECTOR_TYPE);
			if($DIRECTOR_ID !=0){
						$data['d_id']=$DIRECTOR_ID;
						$data['director_type_id']=$DIRECTOR_TYPE;
				$data['project_type']= $this->input->post('project_type');
               
                $data['project_title']= $this->input->post('project_title');
                 $data['production_name']= $this->input->post('production_name');
                  $data['year']= $this->input->post('year');
                $data['link']= $this->input->post('link');
               
                $data['additional_info']= $this->input->post('additional_info');

                
                $this->db->where('work_id',$id);
               
			           $data['result']= $this->db->update('director_work_exp',$data);
			           echo json_encode($data);

			}
			else{
				redirect(base_url('welcome'));
			}	
}
public function dir_social_links()
{
	$DIRECTOR_ID = $this->session->userdata('DIRECTOR_ID');

			if($DIRECTOR_ID !=0){
					/*if(isset($_POST['submit'])){*/

					
						
						$data['facebook_url'] = $this->input->post('facebook');
						$data['instagram_url'] = $this->input->post('instagram');
						$data['twitter_url'] = $this->input->post('twitter');
						$data['youtube_url'] = $this->input->post('youtube');
						$data['website_url'] = $this->input->post('website');
						$data['imdb_url'] = $this->input->post('imdb');
						

						$this->db->where('d_id',$DIRECTOR_ID);
			           $data['result']= $this->db->update('directors',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
	}

	public function add_director_award()
{
	$DIRECTOR_ID = $this->session->userdata('DIRECTOR_ID');

			if($DIRECTOR_ID !=0){
					/*if(isset($_POST['submit'])){*/

					
						$data['d_id']=$DIRECTOR_ID;
						$data['award_title'] = $this->input->post('award_title');
						$data['award_for'] = $this->input->post('award_for');
						$data['award_year'] = $this->input->post('award_year');
						$data['add_details'] = $this->input->post('add_details');

						$this->db->where('award_id',$DIRECTOR_ID);
			           $data['result']= $this->db->insert('director_award_reg',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
	}
	public function dir_award($id)
{
	$DIRECTOR_ID = $this->session->userdata('DIRECTOR_ID');

			if($DIRECTOR_ID !=0){
					/*if(isset($_POST['submit'])){*/

					
						$data['d_id']=$DIRECTOR_ID;
						$data['award_title'] = $this->input->post('award_title');
						$data['award_for'] = $this->input->post('award_for');
						$data['award_year'] = $this->input->post('award_year');
						$data['add_details'] = $this->input->post('add_details');

						$this->db->where('award_id',$id);
			           $data['result']= $this->db->update('director_award_reg',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
	}

	public function add_director_assoc()
{
	$DIRECTOR_ID = $this->session->userdata('DIRECTOR_ID');

			if($DIRECTOR_ID !=0){
					/*if(isset($_POST['submit'])){*/

						$data['d_id']=$DIRECTOR_ID;
						
						$data['association_name'] = $this->input->post('association_name');
						$data['associaton_id'] = $this->input->post('association_id');

						$this->db->where('assoc_id',$DIRECTOR_ID);
			           $data['result']= $this->db->insert('director_assoc',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
	}

	public function dir_assoc($id)
{
	$DIRECTOR_ID = $this->session->userdata('DIRECTOR_ID');

			if($DIRECTOR_ID !=0){
					/*if(isset($_POST['submit'])){*/

						$data['d_id']=$DIRECTOR_ID;
						
						$data['association_name'] = $this->input->post('association_name');
						$data['associaton_id'] = $this->input->post('associaton_id');

						$this->db->where('assoc_id',$id);
			           $data['result']= $this->db->update('director_assoc',$data);
			           echo json_encode($data);

					   
			}
			else{
				redirect(base_url('welcome'));
			}	
	}


	
	public function edit_job_post_request()
	{
		$job_id = $this->input->get('job_id');

		$data['job_edit_flag'] = "1";
		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !='')
		{
			$job_data = $this->db->select('edit_job_post_status,job_edit_flag,job_id')->from(' job_posts')->where('job_id',$job_id)->get()->result_array();
			if(!empty($job_data)){

			if($job_data[0]['edit_job_post_status'] == 0 && $job_data[0]['job_edit_flag']== 0){

			$this->db->where('job_id',$job_id);
			$this->db->update('job_posts',$data);

			$message = '<div class="alert alert-success">Your Edit Job Request Send To Admin Successfully!. Please Wait For the Approval.</div>';
    				$this->session->set_flashdata('message',$message);

			redirect(base_url('director/all_posting_jobs'));
			
			}
			if($job_data[0]['edit_job_post_status'] == 0 && $job_data[0]['job_edit_flag']== 1)
	    	{	
	    		$message = '<div class="alert alert-success">Your Request Is Still Pending . Please Wait for Approval.</div>';
    				$this->session->set_flashdata('message',$message);
    				redirect(base_url('director/all_posting_jobs'));
	    	}
	        if($job_data[0]['edit_job_post_status'] == 1)
    			{
    				//$data['result'] = $this->db->select('*')->from('job_posts')->where('job_id',$job_id)->get()->result_array();
    				
    					redirect(base_url('director/edit_job_post?job_id='.$job_id));
    			}
    		 if($job_data[0]['edit_job_post_status'] == 2)
    			{
    				$message = '<div class="alert alert-success">Your Job Edit Request Is Rejected. Please Contact For More Info.</div>';
    				
    				$this->session->set_flashdata('message',$message);
    				redirect(base_url('director/all_posting_jobs'));	
    			}
    		}	
    		
			}
			else
			{
					redirect(base_url('welcome'));
					
				
			}
		}

	public function edit_job_post1()
	{
		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !='')
		{

       $this->load->model('director_model');

       $data['result'] = $this->director_model->edit_job_post();

       echo json_encode($data);

       }
		else
		{
				redirect(base_url('welcome'));
		}	
	}
	public function edit_job_post()
	{
		$job_id = $this->input->get('job_id');
		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !='')
		{
			$data['result'] = $this->db->select('*')->from('job_posts')->where('job_id',$job_id)->get()->result_array();
            $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

			$this->load->view('director/edit_job_post',$data);
       }
		else
		{
				redirect(base_url('welcome'));
		}	
			
	}	
	public function director_postjob_data()
	{
		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !='')
		{

		$this->load->model('Director_Model');
		$data['result'] = $this->Director_Model->director_post_job();

		echo json_encode($data);
		// redirect(base_url('welcome'));

		}
		else
		{
				redirect(base_url('welcome'));
				
			
		}	
	}


	
	public function all_posting_jobs()
	{

	  $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !=''){

		$director_id = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();

		$data['result'] = $this->db->select('*')->from('job_posts')->where('diretor_id',$director_id[0]['d_id'])->order_by('job_id','DESC')->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

		$this->load->view('director/all_posting_jobs',$data);
	}
	else
	{
			redirect(base_url('welcome'));
		}	
		
	}
	public function job_details()
	{

	  $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !=''){
		$job_id = $this->input->get('job_id');
		$data['result'] = $this->db->select('*')->from('job_posts')->where('job_id',$job_id)->get()->result_array();
	
		$this->load->view('director/job_details',$data);
	}
	else
	{
			redirect(base_url('welcome'));
		}	
		
	}
	public function applications_per_job()
	{
		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !=''){

	    $director = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
		$data['result'] = $this->db->select('*')->from('job_posts')->where('diretor_id',$director[0]['d_id'])->order_by('job_id','DESC')->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

		$this->load->view('director/applications_per_job',$data);
		}
		else
		{
			redirect(base_url('welcome'));
				
			
		}
	}
	public function artist_approved_appln()
	{
		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !=''){

		$this->db->select('artists.a_id,job_application.status,job_application.applied_date,job_application.status_date,job_posts.job_title,artists.name,artists.city');
		$this->db->from('job_application');
		$this->db->where('job_application.status','1');
		$this->db->join('artists','job_application.artist_id = artists.a_id');
		$this->db->join('job_posts','job_application.job_id = job_posts.job_id');

		$data['result'] = $this->db->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();
		$casting_pack_data = $this->db->select('*')->from('casting_points')->get()->result_array();
		$data['silver_pack'] = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name','silver package')->get()->result_array();
		
		$this->load->view('director/artist_approved_application_list',$data);
		}

		else
		{
				redirect(base_url('welcome'));
				
			
		}
	}
	public function casting_role_points()
	{
		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID !=''){

        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();
		$casting_pack_data = $this->db->select('*')->from('casting_points')->get()->result_array();
		$data['result'] = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name',$casting_pack_data[0]['casting_point_name'])->get()->result_array();
		$this->load->view('director/my_casting_role_points',$data);
		}
		else
		{
			
				redirect(base_url('welcome'));
				
		}
	}

	public function view_job_applications()
	{

		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		$j_id = $this->input->get('job_id');

		if($DIRECTOR_ID !=''){

		$this->db->select('*');
		$this->db->from('job_application');
		$this->db->where('job_id',$j_id);
		$this->db->join('artists', 'job_application.artist_id = artists.a_id');
		

		$data['job_application_data'] = $this->db->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

		$this->load->view('director/view_applications',$data);
		}
		else
		{
				redirect(base_url('welcome'));
				
			
		}
	}

	public function delete_job_post()
	{
		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');
		if($DIRECTOR_ID !=''){
			$job_id['job_id'] = $this->input->get('job_id');

			 $this->db->delete('job_posts',$job_id);			
             $message = '<div class="alert alert-success">Job Deleted Successfully</div>';
					$this->session->set_flashdata('message',$message);
			
			redirect(base_url('director/applications_per_job'));
		}else
		{
			redirect(base_url('welcome'));
		}		
	}
	public function update_artist_job_status()
	{
		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');
		if($DIRECTOR_ID != '')
		{
			$a_id = $this->input->post('a_id');
			$job_id = $this->input->post('job_id');
			$id = $this->input->post('id');
			$data['status'] = $this->input->post('status');
			$data['status_date'] = date('Y-m-d h:m:s');
			$this->db->where('artist_id',$a_id);
			$this->db->where('id',$id);
			$this->db->where('job_id',$job_id);
			$this->db->update('job_application',$data);

		$message = '<div class="alert alert-success">Status Updated</div>';
					$this->session->set_flashdata('message',$message);

      redirect(base_url('director/view_job_applications?job_id='.$this->input->post('job_id')));

		}else
		{
			redirect(base_url('welcome'));
		}	
	}
	public function active_casting_points(){

		$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');
		if($DIRECTOR_ID != '')
		{
			$a_id = $this->input->post('silver_pack');
			$artist_id = $this->input->post('artist_id');
			
			if(isset($_POST['silver_pack'])){

			$pack_expire_date = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name','silver package')->where('flag','1')->get()->result_array();					

				if(empty($pack_expire_date))
					{
						$message = '<div class="alert alert-danger">Silver Casting Package is Expired..Please Renew Casting point package..</div>';
						$this->session->set_flashdata('message',$message);

						redirect(base_url('director/artist_approved_appln'));	
					
					}
					else
					{

					$data['casting_point_expire_date'] = $pack_expire_date[0]['casting_point_expire_date'];

					$total_silver_casting_point_used = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name','silver package')->where('flag','1')->get()->result_array();

					if($total_silver_casting_point_used[0]['used_casting_points']==$total_silver_casting_point_used[0]['total_points'])
					{
						
						
						$message = '<div class="alert alert-danger">Your Casting Point Package Limit Is Over ..Please Renew Casting Point package..</div>';
						$this->session->set_flashdata('message',$message);
						//redirect(base_url('director/artist_approved_appln'));	
						redirect(base_url('director/artist_approved_appln'));	
					}
					else
					{
					$data_1['used_casting_points'] = $total_silver_casting_point_used[0]['used_casting_points']+1;
					
					/*update total Platinum job post count*/
					$this->db->where('director_id',$this->session->userdata('DIRECTOR_ID'));
					$this->db->update('director_casting_points',$data_1);
					
      				redirect(base_url('director/view_artist_profile?job_id='.$this->input->post('artist_id')));
					}
				}
			}
			
		}
		else
		{
			redirect(base_url('welcome'));
		}	
	}

public function view_artist_profile(){
	$DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

		if($DIRECTOR_ID != '')
		{
			$a_id = $this->input->get('a_id');

		    $data['result'] = $this->db->select('*')->from('artists')->where('a_id',$a_id)->get()->result_array();
		    
		    $this->load->view('director/view_artist_profile',$data);
			
			}else
			{
				redirect(base_url('welcome'));
			}	

}


}
