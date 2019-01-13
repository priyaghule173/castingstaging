<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

}
	public function index()
	{
		$ADMIN_ID = $this->session->userdata('ADMIN_ID');

		if($ADMIN_ID !='')
		{

        $data['profile'] = $this->db->select('profile_pic')->from('admin')->where('id',$this->session->userdata('ADMIN_ID'))->get()->row();

		$this->load->view('admin/admin_dashboard',$data);
		}
	else
	{
			redirect(base_url('welcome'));
		}
	}

	public function editAdminProfile()
	{
		$ADMIN_ID = $this->session->userdata('ADMIN_ID');

		if($ADMIN_ID !='')
		{

		$data['result'] = $this->db->select('*')->from('admin')->where('id',$this->session->userdata('ADMIN_ID'))->get()->result_array();

        $data['profile'] = $this->db->select('profile_pic')->from('admin')->where('id',$this->session->userdata('ADMIN_ID'))->get()->row();

		$this->load->view('admin/editAdminProfile',$data);
		}
	   else
	   {
			redirect(base_url('welcome'));
		}
	}
public function admin_editProfile()
	{

		$ADMIN_ID = $this->session->userdata('ADMIN_ID');

		if($ADMIN_ID !='')
		{

       $this->load->model('admin_model');

       $data['result'] = $this->admin_model->update_admin_regi();

       echo json_encode($data);
       }
		else
		{
				redirect(base_url('welcome'));
			}	
			
	}
	public function manage_directors()
	{

		$ADMIN_ID = $this->session->userdata('ADMIN_ID');

		if($ADMIN_ID !='')
		{

	
       	$data['result'] = $this->db->select('*')->from('directors')->where('status','0')->order_by('d_id','DESC')->get()->result_array();
		$data['result1'] = $this->db->select('*')->from('directors')->where('status','1')->order_by('d_id','DESC')->get()->result_array();
		$data['result2'] = $this->db->select('*')->from('directors')->where('status','2')->order_by('d_id','DESC')->get()->result_array();
			
        $data['profile'] = $this->db->select('profile_pic')->from('admin')->where('id',$this->session->userdata('ADMIN_ID'))->get()->row();

		$this->load->view('admin/manage_directors',$data);
       }
		else
		{
				redirect(base_url('welcome'));
			}	
			
	}
public function update_director_status()
	{

		$ADMIN_ID = $this->session->userdata('ADMIN_ID');

		if($ADMIN_ID !='')
		{
			$d_id = $this->input->post('d_id');
			$data['status'] = $this->input->post('status');
			$data['activated_date'] = date('Y-m-d');
			$this->db->where('d_id',$d_id);
			$this->db->update('directors',$data);

       }
		else
		{
				redirect(base_url('welcome'));
			}	
			
	}

	public function job_post_request()
	{

		$ADMIN_ID = $this->session->userdata('ADMIN_ID');

		if($ADMIN_ID !='')
		{
			$data['result'] = $this->db->select('distinct(diretor_id),job_post_date,job_id,job_post_expired_date,job_post_approved_date,directors.*')->from('job_posts')->where('job_status','0')->join('directors','job_posts.diretor_id = directors.d_id')->get()->result_array();
			$data['result1'] = $this->db->select('distinct(diretor_id),job_post_date,job_id,job_post_expired_date,job_post_approved_date,directors.*')->from('job_posts')->where('job_status','1')->join('directors','job_posts.diretor_id = directors.d_id')->get()->result_array();
			$data['result2'] = $this->db->select('distinct(diretor_id),job_post_date,job_id,job_post_expired_date,job_post_approved_date,directors.*')->from('job_posts')->where('job_status','2')->join('directors','job_posts.diretor_id = directors.d_id')->get()->result_array();
			$data['profile'] = $this->db->select('profile_pic')->from('admin')->where('id',$this->session->userdata('ADMIN_ID'))->get()->row();

			$this->load->view('admin/job_post_request',$data);
       }
		else
		{
				redirect(base_url('welcome'));
			}	
			
	}

	public function update_job_post_status()
	{

		$ADMIN_ID = $this->session->userdata('ADMIN_ID');

		if($ADMIN_ID !='')
		{
			$job_id = $this->input->post('job_id');
			$data['job_status'] = $this->input->post('job_status');
			$data['job_post_approved_date'] = date('Y-m-d');
			$this->db->where('job_id',$job_id);
			$this->db->update('job_posts',$data);

       }
		else
		{
				redirect(base_url('welcome'));
			}	
			
	}
	public function manage_artists()
	{

		$ADMIN_ID = $this->session->userdata('ADMIN_ID');

		if($ADMIN_ID !='')
		{
	
       	$data['result'] = $this->db->select('*')->from('artists')->where('status','0')->order_by('a_id','DESC')->get()->result_array();
		$data['result1'] = $this->db->select('*')->from('artists')->where('status','1')->order_by('a_id','DESC')->get()->result_array();
		$data['result2'] = $this->db->select('*')->from('artists')->where('status','2')->order_by('a_id','DESC')->get()->result_array();
			
        $data['profile'] = $this->db->select('profile_pic')->from('admin')->where('id',$this->session->userdata('ADMIN_ID'))->get()->row();

		$this->load->view('admin/manage_artist',$data);
       }
		else
		{
				redirect(base_url('welcome'));
			}	
			
	}
public function update_artist_status()
	{

		$ADMIN_ID = $this->session->userdata('ADMIN_ID');

		if($ADMIN_ID !='')
		{
			$a_id = $this->input->post('a_id');
			$data['status'] = $this->input->post('status');
			$data['activated_date'] = date('Y-m-d');
			$this->db->where('a_id',$a_id);
			$this->db->update('artists',$data);

       }
		else
		{
				redirect(base_url('welcome'));
			}	
			
	}
}
