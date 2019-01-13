<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

public function __construct()

{

parent::__construct();

$this->load->helper('url');
$this->load->helper('text');

}
//artist
    public function applied_jobs()
    {
        $this->load->view('dashboard/appliedjobs');
    }
      public function appliedjobsartist()
    {
        // print_r('f');exit;
        $this->load->view('dashboard/appliedjobs');
    }
    
   public function index()
    {
        if($this->session->userdata('DIRECTOR_ID')||$this->session->userdata('ARTIST_ID'))
        {

        // echo $this->session->set_userdata('EMAIL_ID');exit;
         // $session_data = $this->session->userdata('role');
         // echo $session_data;exit;
if($this->session->userdata('role')=='Artists')
    {
        $ARTIST_ID = $this->session->userdata('ARTIST_ID');
        if($ARTIST_ID !='')
        {
            // $session_data = $this->session->userdata('role');
         //   echo $session_data;exit;

        $data['profile'] = $this->db->select('profile_pic')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->row();
        
        

            $data['result'] = $this->db->select('*')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->result_array();
            if(count($data['result'])>0)
            {

                //  General Profile 
                $name=$data['result'][0]['name'];
                $contact_no=$data['result'][0]['contact_no'];
                $email_id=$data['result'][0]['email_id'];
                $city=$data['result'][0]['city'];
                $pin_code=$data['result'][0]['pin_code'];
                $whatsup_no=$data['result'][0]['whatsup_no'];
                $date_of_birth=$data['result'][0]['date_of_birth'];
                $gender=$data['result'][0]['gender'];

                if($name!='' && $email_id!='' && $city!='' &&$pin_code!='' &&$contact_no!='' &&$whatsup_no!='' &&$date_of_birth!='' &&$gender!='')
                {
                        $generalProfile=10;
                }
                else
                {
                          $generalProfile=0;
                }

                //  talent Field

                $talent=$data['result'][0]['talent'];
                

                if($talent!='' )
                {
                        $talentProfile=10;
                }
                else
                {
                          $talentProfile=0;
                }

                //  Sub-talent Field

                $sub_talent=$data['result'][0]['sub_talent'];
                

                if($sub_talent!='')
                {
                        $sub_talentProfile=10;
                }
                else
                {
                          $sub_talentProfile=0;
                }
                // print_r($sub_talentProfile);exit;

                //  Interest Field

                $interests=$data['result'][0]['interests'];
                

                if($interests!='' )
                {
                        $interestsProfile=10;
                }
                else
                {
                          $interestsProfile=0;
                }

                //  Physical attributes Field

                $weight=$data['result'][0]['weight'];
                $height=$data['result'][0]['height'];
                $chest=$data['result'][0]['chest'];
                $waist=$data['result'][0]['waist'];
                $body_type=$data['result'][0]['body_type'];
                $ethinicity=$data['result'][0]['ethinicity'];
                $hair_type=$data['result'][0]['hair_type'];
                $hair_length=$data['result'][0]['hair_length'];
                $eye_color=$data['result'][0]['eye_color'];
                $skin_tone=$data['result'][0]['skin_tone'];
                $hair_color=$data['result'][0]['hair_color'];
                

                if($weight!='' && $height!='' && $chest!='' &&$waist!='' &&$body_type!='' &&$ethinicity!='' &&$hair_type!='' &&$hair_length!='' &&$eye_color!='' &&$skin_tone!='' &&$hair_color!='')
                {
                        $physicalProfile=10;
                }
                else
                {
                          $physicalProfile=0;
                }

                    // Social links

                $facebook_url=$data['result'][0]['facebook_url'];
                $instagram_url=$data['result'][0]['instagram_url'];
                $twitter_url=$data['result'][0]['twitter_url'];
                $youtube_url=$data['result'][0]['youtube_url'];
                $website_url=$data['result'][0]['website_url'];
                $imdb_url=$data['result'][0]['imdb_url'];
                if($facebook_url!='' && $instagram_url!='' && $twitter_url!='' &&$youtube_url!='' &&$website_url!='' &&$imdb_url!='')
                    {
                        $socialProfile=10;
                }
                else
                {
                          $socialProfile=0;
                }


                    // Social links

                $video_url=$data['result'][0]['video_url'];
                $scripts=$data['result'][0]['scripts'];
                $audio=$data['result'][0]['audio'];
               // $audio1=$data['result'][0]['audio1'];
                $head_shot=$data['result'][0]['head_shot'];
                $left_pic=$data['result'][0]['left_pic'];
                $right_pic=$data['result'][0]['right_pic'];
                $full_pic=$data['result'][0]['full_pic'];

                if($video_url!=''&& $scripts!='' &&$audio!=''  &&$head_shot!='' &&$left_pic!='' &&$right_pic!='' &&$full_pic!='')
                    {
                        $mediaProfile=10;
                }
                else
                {
                          $mediaProfile=0;
                }

                // experince start here

                $skill_type=$data['result'][0]['skill_type'];
                $sub_skill_type=$data['result'][0]['sub_skill_type'];
                $project_title=$data['result'][0]['project_title'];
                $role_in_project=$data['result'][0]['role_in_project'];
                $year=$data['result'][0]['year'];
                $skill_type1=$data['result'][0]['skill_type1'];
                $sub_skill_type1=$data['result'][0]['sub_skill_type1'];
                $project_title1=$data['result'][0]['project_title1'];
                $role_in_project1=$data['result'][0]['role_in_project1'];
                $year1=$data['result'][0]['year1'];

                if($skill_type!='' && $sub_skill_type!='' && $project_title!='' &&$role_in_project!='' &&$year!='' &&$skill_type1!='' &&$sub_skill_type1!='' &&$project_title1!='' &&$role_in_project1!='' &&$year1!='')
                    {
                        $expProfile=10;
                }
                else
                {
                          $expProfile=0;
                }

                // education start here
                

                $school_clg_company=$data['result'][0]['school_clg_company'];
                $course_completed=$data['result'][0]['course_completed'];
                $year_of_completion=$data['result'][0]['year_of_completion'];
                $e_city=$data['result'][0]['e_city'];
                $e_country=$data['result'][0]['e_country'];
                $school_clg_company1=$data['result'][0]['school_clg_company1'];
                $course_completed1=$data['result'][0]['course_completed1'];
                $year_of_completion1=$data['result'][0]['year_of_completion1'];
                $e_city1=$data['result'][0]['e_city1'];
                $e_country1=$data['result'][0]['e_country1'];

                if($school_clg_company!='' && $course_completed!='' && $year_of_completion!='' &&$e_city!='' &&$e_country!='' &&$school_clg_company1!='' &&$course_completed1!='' &&$year_of_completion1!='' &&$e_city1!='' &&$e_country1!='')
                    {
                        $eduProfile=10;
                }
                else
                {
                          $eduProfile=0;
                }

                    // Additional info
                

                $min_budget=$data['result'][0]['min_budget'];
                $max_budget=$data['result'][0]['max_budget'];
                $about_info=$data['result'][0]['about_info'];
                
                if($min_budget!='' && $max_budget!='' && $about_info!='')
                    {
                        $additionalProfile=10;
                }
                else
                {
                          $additionalProfile=0;
                }


                $profileCompleted=$generalProfile+$talentProfile+$sub_talentProfile+$interestsProfile+$physicalProfile+$socialProfile+$mediaProfile+$expProfile+$eduProfile+$additionalProfile;

                // print_r($profileCompleted);exit;

                // print_r($sub_talentProfile);exit;

            }
            else
            {
                $profileCompleted=0;
            }
        
             $this->session->set_userdata('profileComplete',$profileCompleted);

        $this->load->view('dashboard/dashboard',$data);
        }
        // else
        // {
        //     redirect(base_url('welcome'));
        // }

        // before count con. if

    }
    // director start
    else   
    {

        $DIRECTOR_ID = $this->session->userdata('DIRECTOR_ID');
       
    if($DIRECTOR_ID !='')
        {

           $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

           $data['result'] = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
           //print_r($data['result']);exit;
                 if(count($data['result'])>0)
            {

                //  General Profile 
                $official_name=$data['result'][0]['official_name'];
                $contact_no=$data['result'][0]['contact_no'];
                $email_id=$data['result'][0]['email_id'];
                $city=$data['result'][0]['city'];
                $pin_code=$data['result'][0]['pin_code'];
                $address=$data['result'][0]['address'];
             if($official_name!='' && $contact_no!='' && $email_id!='' &&$city!='' &&$pin_code!='' &&$address!='')
                {
                        $DirectorgeneralProfile=20;
                }
                else
                {
                          $DirectorgeneralProfile=0;
                }
            }
            else
                 {
                          $DirectorgeneralProfile=0;
                }

                       // print_r($DirectorgeneralProfile);exit;
                //  work Exp Field
                    $dataWork['result'] = $this->db->select('*')->from('director_work_exp')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
 
                    if(count($dataWork['result'])>0)
            {

                $project_type=$dataWork['result'][0]['project_type'];
                $project_title=$dataWork['result'][0]['project_title'];
                $production_name=$dataWork['result'][0]['production_name'];
                $year=$dataWork['result'][0]['year'];
                $link=$dataWork['result'][0]['link'];
                $additional_info=$dataWork['result'][0]['additional_info'];
                if($project_type!='' && $project_title!='' && $production_name!='' &&$year!='' &&$link!='' &&$additional_info!='')
                {
                        $DirectorWorkExp=20;
                }
                else
                {
                          $DirectorWorkExp=0;
                }
            }
            else
            {
                $DirectorWorkExp=0;
            }

                //  Award Field
                    $dataAward['result'] = $this->db->select('*')->from('director_award_reg')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
 //print_r($data['result']);exit;
                                if(count($dataAward['result'])>0)
            {
                $award_title=$dataAward['result'][0]['award_title'];
                $award_for=$dataAward['result'][0]['award_for'];
                $award_year=$dataAward['result'][0]['award_year'];
                $add_details=$dataAward['result'][0]['add_details'];
                
             if($award_title!='' && $award_for!='' && $award_year!='' &&$add_details!='')
                {
                        $DirectorAward=20;
                }
                else
                {
                          $DirectorAward=0;
                }
            }
                else
                    {
                $DirectorAward=0;
            }

            // print_r($DirectorAward);exit;

                
                

                    // Social links
                        $data['result'] = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
 //print_r($data['result']);exit;
            if(count($data['result'])>0)
            {
                $facebook_url=$data['result'][0]['facebook_url'];
                $instagram_url=$data['result'][0]['instagram_url'];
                $twitter_url=$data['result'][0]['twitter_url'];
                $youtube_url=$data['result'][0]['youtube_url'];
                $website_url=$data['result'][0]['website_url'];
                $imdb_url=$data['result'][0]['imdb_url'];
            if($facebook_url!='' && $instagram_url!='' && $twitter_url!='' &&$youtube_url!='' &&$website_url!='' &&$imdb_url!='')
                    {
                        $Directorsocial=20;
                }
                else
                {
                          $Directorsocial=0;
                }
            }
            else
                {
                          $Directorsocial=0;
                }
                       // print_r($Directorsocial);exit;

                    //Association
                     $dataAssoc['result'] = $this->db->select('*')->from(' director_assoc')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
 //print_r($dataAssoc['result']);exit;
            if(count($dataAssoc['result'])>0)
               // print_r(count($dataAssoc['result']));exit;
            {
                $association_name=$dataAssoc['result'][0]['association_name'];
                $associaton_id=$dataAssoc['result'][0]['associaton_id'];
              
             if($association_name!=''&& $associaton_id!='')
                    {
                        $DirectorAssoc=20;
                }
                else
                {
                          $DirectorAssoc=0;
                           //print_r($DirectorAssoc);exit;
                }
            }
                 else
                {
                          $DirectorAssoc=0;
                           //print_r($DirectorAssoc);exit;
                }
               
                
                  
            
                $DirectorProfileCompleted=$DirectorgeneralProfile+$DirectorWorkExp+$DirectorAward+$Directorsocial+$DirectorAssoc;


       }

       // director !='' conditin end
       else
            {
                $DirectorProfileCompleted=0;
            }

         $this->session->set_userdata('DirectorProfileCompleted',$DirectorProfileCompleted);

        $this->load->view('dashboard/dashboard',$data);

    }
}
    else
     {
            redirect(base_url('welcome'));
       } 
      //main function end
    }

  public function Apply_job($job_id)
    {
         //$success = false;
        $ARTIST_ID = $this->session->userdata('ARTIST_ID');
        $ARTIST_NAME= $this->session->userdata('name');
        if($ARTIST_ID !='')
        {

         $data['resu'] = $this->db->select('job_id')->from('job_application')->where('job_id',$job_id)->get()->result_array();
    // print_r($data['resu']);
 $jobcount=count($data['resu']);
 //print_r($jobcount);
 if( $jobcount!=0)
        {
             $success=0;
          //    echo Json_encode($result);
           echo $success;
               //return Json(
        //status = "success"
        //result = "Done"
    //); 
        }


        else
            {
                $video_url = $this->input->post('video_url');

                    // $success = 'true';
            $data['result'] = $this->db->select('*')->from('job_posts')->where('job_id',$job_id)->get()->result_array();
           $data['profile'] = $this->db->select('profile_pic')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->row();
   

$posted_on= date('Y-m-d');

// echo "video_url".$video_url;
$JobData = array('artist_id' => $ARTIST_ID,
                        'artist_name' => $ARTIST_NAME, 

                       'job_id' => ($data['result'][0]['job_id']),  
        'director_id' => ($data['result'][0]['diretor_id']),                    
                           
         'applied_date' => $posted_on,
         'video_url' => $video_url,

         'status' =>4
                   );

// echo $JobData;
   $this->db->insert('job_application', $JobData);   
   $resultNew= $this->db->insert_id();

   // echo $resultNew;

   if($resultNew!=0)
        {
             $successAlert=1;
          //    echo Json_encode($result);
           echo $successAlert;
               //return Json(
        //status = "success"
        //result = "Done"
    //); 
        }


//$sucess=false;
 // echo $success ;
//$result="false";
              //echo Json_encode($result);
            }

}

            else
            {
                redirect(base_url('welcome'));
            }   
}


 public function AppliedJobs()
    {

        $ARTIST_ID = $this->session->userdata('EMAIL_ID');

        if($ARTIST_ID !='')
        {
$data['profile'] = $this->db->select('profile_pic')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->row();
 $sql=$this->db->select('status')->from('job_application')->get()->result_array();
$dataTalent=array();
//print_r($sql) ;
$dataStatus=array();
foreach ($sql as $key) {
   // print_r($key);
    array_push($dataStatus, $key['status']);
   }

    
//print_r($dataStatus);
//$string_version = implode(',', $dataStatus);
$selected_sizes_comma_seprated = implode("','", $dataStatus);

//print_r($selected_sizes_comma_seprated);
$sql="SELECT job_posts.job_title,job_application.applied_date,job_posts.job_post_expired_date,job_application.status from job_posts inner join job_application on job_posts.job_id = job_application.job_id where status IN('$selected_sizes_comma_seprated')";
 
        $query=$this->db->query($sql);
        //print_r($query);
        $data['job']=$query->result_array();
       // print_r($data['job']);


$this->load->view('dashboard/Artist/Applied_jobs',$data);           
}   


        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }
    public function JobApplication()
    {

        $ARTIST_ID = $this->session->userdata('EMAIL_ID');

        if($ARTIST_ID !='')
        {
        $data['profile'] = $this->db->select('profile_pic')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->row();


        $result = $this->db->select('*')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->result_array();
        // print_r($result);exit;
    
foreach ($result as $value) {

    $result1= $value['talent'];
    
$talentarray=explode(',', $result1);
 //print_r($talentarray);

$dataTalent=array();
$job_post_list=array();

foreach($talentarray as $talent) {
   // print_r($talentarray);
$talentarr=$talent;
//print_r($talentarr);
$result= $this->db->select('talent_name')->from('talent')->where('talent_id',$talentarr)->get()->result();
//print_r($result);
  foreach ($result as $arr) {
    $finalarr=$arr->talent_name;
    array_push($dataTalent, $finalarr);
    // print_r($dataTalent);
    }

}
 //print_r($dataTalent);

}


$selected_sizes = $dataTalent;
//print_r($selected_sizes);

$selected_sizes_comma_seprated = implode("','", $selected_sizes);

        $sql="SELECT * from job_posts where artist_category IN('$selected_sizes_comma_seprated')";
      //  echo "sql".$sql;
        $query=$this->db->query($sql);
       // echo $query;
        $data['job']=$query->result_array();
    // print_r( $data['job']);
 $this->load->view('dashboard/Artist/JobApplication',$data);
        }
        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }
        
    

    public function artist_job_details($job_id)
    {
$ARTIST_ID = $this->session->userdata('ARTIST_ID');
        if($ARTIST_ID !='')
        {
           

     
         
        $data['result'] = $this->db->select('*')->from('job_posts')->where('job_id',$job_id)->get()->result_array();
           $data['profile'] = $this->db->select('profile_pic')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->row();
       // print_r($data['result']);

        $this->load->view('dashboard/view_job_details_artist',$data);
    }
    else
    {
            redirect(base_url('welcome'));
        }   
        
    }  
    public function commingSoon()
        {
            
            $this->load->view('dashboard/commingSoon');

        }
        
    public function dashboardCards()
    {
            $data_e['user_email']  = $this->session->userdata('EMAIL_ID');


         $sql_email = $this->db->select('*')->from('user')->where($data_e)->join('user_type', 'user_type.type_id = user.type_id', 'inner')->get()->result_array();
        // print_r($sql_email);exit;
        if(!empty($sql_email))
        {
            $user_type=$sql_email[0]['type_name'];
            // print_r($user_type);exit;
            if($user_type=='directors')
                {
                    $this->db->select('artists.a_id,job_application.status,job_application.applied_date,job_application.status_date,job_posts.job_title,artists.name,artists.city');
                    $this->db->from('job_application');
                    $this->db->where('job_application.status','1');
                    $this->db->join('artists','job_application.artist_id = artists.a_id');
                    $this->db->join('job_posts','job_application.job_id = job_posts.job_id');

                    $data['result'] = $this->db->get()->num_rows();



                     $director = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
                    $data['postedJobs'] = $this->db->select('*')->from('job_posts')->where('diretor_id',$director[0]['d_id'])->where('status_id',1)->order_by('job_id','DESC')->get()->num_rows();

                    $postedJobs=$data['postedJobs'];

                     // print_r($data['postedJobs']);exit;

                }
                else
                {
                    $data='';
                   $postedJobs='';
                }
                
            }

        $this->load->view('dashboard/dashboardCards',$data,$postedJobs);
        

    }

    
 // public function myprofiledemo()
    // {
    //  $this->load->view('dashboard/userprofile');
    // }

    //  public function myprofile()
    // {
    //  $this->load->view('dashboard/userprofile');
    // }


public function myprofile()
    {


        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !='')
        {
        $data['result'] = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

        $data['projectType'] = $this->db->select('*')->from('projecttype')->get()->result_array();

        // $this->load->view('director/editDirectorProfile',$data);
        
        $this->load->view('dashboard/userprofile',$data);
        }
        else
        {
                redirect(base_url('welcome'));
            }   
            
        
    }

 public function viewProfileasArtist()
    {
        //

        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');
//print_r($DIRECTOR_ID);exit;
        if($DIRECTOR_ID !='')
        {
        $data['result'] = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

        $data['projectType'] = $this->db->select('*')->from('projecttype')->get()->result_array();

        // $this->load->view('director/editDirectorProfile',$data);
        //profile_view
        $this->load->view('dashboard/profile_view',$data);
        }
        else
        {
                redirect(base_url('welcome'));
            }   
            
        
    }



    public function director_logout()
    {
        if($this->session->has_userdata('DIRECTOR_ID') != ''){
            $this->session->sess_destroy(); 
            redirect(base_url('welcome'));
        }
        redirect(base_url('dashboard'));
    }
    public function getpreviledge()
        {
            
            $this->load->view('dashboard/get_previledge');

        }
    public function director_updateProfile()
    {

        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !='')
        {

       $this->load->model('director_model');

       $data['result'] = $this->director_model->update_director_regi();

       echo json_encode($data);
       }
        else
        {
                redirect(base_url('welcome'));
            }   
        
    }


    //  public function postJob()
    // {
    //  $this->load->view('dashboard/postJob');
    // }


public function postJob()
    {

        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !='')
        {
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

        $this->load->view('dashboard/postJob',$data);
        }
        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }
    public function editArtistBackup()
    {

        $ARTIST_ID = $this->session->userdata('EMAIL_ID');

        if($ARTIST_ID !='')
        {
        $data['result'] = $this->db->select('*')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->row();

        // $this->load->view('director/editDirectorProfile',$data);
        // $this->load->view('dashboard/userprofile',$data);
        $this->load->view('dashboard/Artist/artistprofile2',$data);
        }
        else
        {
                redirect(base_url('welcome'));
            }   

        
        
    
    }
    
    
    public function editArtist()
    {

        $ARTIST_ID = $this->session->userdata('EMAIL_ID');

        if($ARTIST_ID !='')
        {
        $data['result'] = $this->db->select('*')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->result_array();
       




           // print_r($this->session->userdata('profileComplete'));exit;

        // print_r(array_count_values($data['result'])); exit;


        // print_r(count($data['result'][0])); exit;

        // $this->load->view('director/editDirectorProfile',$data);
        // $this->load->view('dashboard/userprofile',$data);



      // $percentage = 0;
      // $query=$data['result'][0];

      // // print_r($query);exit;
      //    // $sql ="SELECT * FROM artists  WHERE email_id=$ARTIST_ID";


      //    //  $query = $this->db->query($sql);
      //    //   print_r($sql);exit;

      // if ($query > 0)
      //     { 

      //       $notEmpty =   0;
      //       $totalField =72;
      //       foreach ($query as $row)
      //         {

      //          $notEmpty +=  ($row->name != '') ? 1 : 0;
      //           // $notEmpty +=  ($row['name'] != '') ? 1 : 0;
      //           //  $notEmpty +=  ($row['contact_no'] != '') ? 1 : 0;
               
      //           //do with all field
      //         }
      //         print_r($notEmpty);exit;

      //     $percentage = $notEmpty/$totalField *100;

      //     }
        // return $percentage.'%';

        







        $this->load->view('dashboard/Artist/artistprofile2',$data);
        }
        else
        {
                redirect(base_url('welcome'));
            }   

        
        
    
    }
    
     public function viewprofileasfromartist()
    {
  // $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        $artist_id = $this->input->get('artist_id');
        // echo $artist_id;

        // if($DIRECTOR_ID !=''){

       //$ARTIST_ID = $this->session->userdata('EMAIL_ID');

       // if($ARTIST_ID !='')
        //{
            //SELECT * FROM `talent` JOIN artists ON talent.talent_id=artists.talent WHERE a_id=12
        $data['result'] = $this->db->select('*')->from('artists')->where('a_id',$artist_id)->get()->result_array();
        // print_r($data['result']);
// $sql_email = $this->db->select('*')->from('user')->where($data_e)->join('user_type', 'user_type.type_id = user.type_id', 'inner')->get()->result_array();

        //echo "hello in director";
          $this->load->view('dashboard/view_profile_of_artist',$data);
     // console.log
   // }
   // else
   // {
    //    redirect(base_url('welcome'));

   // }
    }
// View as Director from
        public function viewprofileasDirector()
    {
        $ARTIST_ID = $this->session->userdata('EMAIL_ID');

        if($ARTIST_ID !='')
        {
            //SELECT * FROM `talent` JOIN artists ON talent.talent_id=artists.talent WHERE a_id=12
        $data['result'] = $this->db->select('*')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->result_array();
// $sql_email = $this->db->select('*')->from('user')->where($data_e)->join('user_type', 'user_type.type_id = user.type_id', 'inner')->get()->result_array();

        //echo "hello in director";
        $this->load->view('dashboard/Artist/view_as_profile_director',$data);
     // console.log
    }
    else
    {
        redirect(base_url('welcome'));

    }
    }

    public function artist_logout()
    {           
        if($this->session->has_userdata('ARTIST_ID') != ''){
            $this->session->sess_destroy(); 
            redirect(base_url('welcome'));
        }
        redirect(base_url('dashboard'));
    }
  public function add_jobs()
    {
        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !='')
        {

        $this->load->model('director_model');
        $data['result'] = $this->director_model->director_post_job();

        echo json_encode($data);
        }
        else
        {
                redirect(base_url('welcome'));
                
            
        }   
    }

    //  public function postedJob()
    // {
    //  $this->load->view('dashboard/postedJobs');
    // }

 //  public function postedJob()
    // {

    //   $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

    //  if($DIRECTOR_ID !=''){

    //  $director_id = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();

    //  $data['result'] = $this->db->select('*')->from('job_posts')->where('diretor_id',$director_id[0]['d_id'])->order_by('job_id','DESC')->get()->result_array();
 //        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

    //  $this->load->view('dashboard/postedJobs',$data);
    // }
    // else
    // {
    //      redirect(base_url('welcome'));
    //  }   
        
    // }

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

            redirect(base_url('dashboard'));
            
            }
            if($job_data[0]['edit_job_post_status'] == 0 && $job_data[0]['job_edit_flag']== 1)
            {   
                $message = '<div class="alert alert-success">Your Request Is Still Pending . Please Wait for Approval.</div>';
                    $this->session->set_flashdata('message',$message);
                    redirect(base_url('dashboard'));
            }
            if($job_data[0]['edit_job_post_status'] == 1)
                {
                    //$data['result'] = $this->db->select('*')->from('job_posts')->where('job_id',$job_id)->get()->result_array();
                    
                        redirect(base_url('dashboard/edit_job_post?job_id='.$job_id));
                }
             if($job_data[0]['edit_job_post_status'] == 2)
                {
                    $message = '<div class="alert alert-success">Your Job Edit Request Is Rejected. Please Contact For More Info.</div>';
                    
                    $this->session->set_flashdata('message',$message);
                    redirect(base_url('dashboard'));    
                }
            }   
            
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

            $this->load->view('dashboard/edit_job_post',$data);
       }
        else
        {
                redirect(base_url('welcome'));
        }   
            
    }   
    public function postedJob()
    {
        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){

        $director = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
        $data['result'] = $this->db->select('*')->from('job_posts')->where('diretor_id',$director[0]['d_id'])->where('status_id',1)->order_by('job_id','DESC')->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

        $this->load->view('dashboard/postedJobs',$data);
        }
        else
        {
            redirect(base_url('welcome'));
                
            
        }
    }
    public function expiredJobs()
    {
        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){

        $director = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
        $data['result'] = $this->db->select('*')->from('job_posts')->where('diretor_id',$director[0]['d_id'])->where('status_id',2)->order_by('job_id','DESC')->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

        $this->load->view('dashboard/expired_jobs',$data);
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
            $job_id= $this->input->get('job_id');

             // $this->db->delete('job_posts',$job_id); 
                    //print_r($job_id);
                 $update['status_id']= 2;
                
                $this->db->where('job_id',$job_id);
                $this->db->update('job_posts',$update);


             $message = '<div class="alert alert-success">Job Expired Successfully</div>';
                    $this->session->set_flashdata('message',$message);
            
            redirect(base_url('dashboard'));
        }else
        {
            redirect(base_url('welcome'));
        }       
    }
    public function view_jobtitle_applications($job_id)
    {

// echo $job_id;
        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        // $j_id = $this->input->get('job_id');
        //echo $j_id;

        if($DIRECTOR_ID !=''){

        $this->db->select('*');
        $this->db->from('job_application');
        $this->db->where('job_id',$job_id);
         $this->db->join('artists', 'job_application.artist_id = artists.a_id');
        

        $data['job_application_data'] = $this->db->get()->result_array();

        // $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

        $this->load->view('dashboard/job_title_applications',$data);
        }
        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }
    public function job_details($job_id)
    {

      $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){
            
        // $job_id = $this->input->get('job_id');
        $data['result'] = $this->db->select('*')->from('job_posts')->where('job_id',$job_id)->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();
        //print_r($data);

        $this->load->view('dashboard/view_job_details',$data);
    }
    else
    {
            redirect(base_url('welcome'));
        }   
        
    }

//approve_application on processed application
    public function approve_application($job_id)
{
//print_r($job_id);
  $data['result'] = $this->db->select('*')->from('job_application')->where('job_id',$job_id)->get()->result_array();

     $updateData = array(
                                    'status'=>1,
                                    'status_date'=>date('Y-m-d H:i:s')
                                    );

       $this->db->where('id',$job_id);
               $this->db->update('job_application', $updateData);
// $message = '<div class="alert alert-success">Artist is Approved Successfully.</div>';
//  $this->session->set_flashdata('message',$message);




}

//rejected_application on processed application
 public function rejected_application($job_id)
{

  $data['result'] = $this->db->select('*')->from('job_application')->where('job_id',$job_id)->get()->result_array();

     $updateData = array(
                                    'status'=>2,
                                    'status_date'=>date('Y-m-d H:i:s')
                                    );


       $this->db->where('id',$job_id);
            $this->db->update('job_application', $updateData);
// $message = '<div class="alert alert-success">Artist is Rejected Successfully.</div>';
//  $this->session->set_flashdata('message',$message);





}



public function shortlist_Application($job_id)
{
print_r($job_id);
  $data['result'] = $this->db->select('*')->from('job_application')->where('job_id',$job_id)->get()->result_array();
 // print_r($data);

     $updateData = array(
                                    'status'=>3,
                                    'status_date'=>date('Y-m-d H:i:s')
                                    );

       $this->db->where('id',$job_id);
                $this->db->update('job_application', $updateData);
 //                $message = '<div class="alert alert-success">Artist is Shorlisted Successfully.</div>';
 // $this->session->set_flashdata('message',$message);

}


public function reject_Application($job_id)
{

  $data['result'] = $this->db->select('*')->from('job_application')->where('job_id',$job_id)->get()->result_array();

     $updateData = array(
                                    'status'=>2,
                                    'status_date'=>date('Y-m-d H:i:s')
                                    );

       $this->db->where('id',$job_id);
                $this->db->update('job_application', $updateData);
 // $message = '<div class="alert alert-success">Artist is Rejected Successfully.</div>';
 // $this->session->set_flashdata('message',$message);


}


public function pending_Application($job_id)
{

  $data['result'] = $this->db->select('*')->from('job_application')->where('job_id',$job_id)->get()->result_array();

     $updateData = array(
                                    'status'=>0,
                                    'status_date'=>date('Y-m-d H:i:s')
                                    );

       $this->db->where('id',$job_id);
                $this->db->update('job_application', $updateData);
 // $message = '<div class="alert alert-success">Artist job application is Pending Successfully.</div>';
 // $this->session->set_flashdata('message',$message);


}

    public function applicationStatus($job_id,$status)
    {
 
    print_r($job_id);exit;

      $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){
       // $id = $this->input->post('id');
       // $job_id = $this->input->post('job_id');
      //  $a_id = $this->input->post('a_id');
     //   $status = $this->input->post('status');
//where('status',4)->
        $data['result'] = $this->db->select('*')->from('job_application')->where('job_id',$job_id)->get()->result_array();
     
        // print_r($data['result']);exit;
                // $statusdata=array('status'=>$status);
                 if($status==3 || $status==1)
                 {
                    //
                    $updateData = array(
                                    'status'=>$status,
                                    'status_date'=>date('Y-m-d H:i:s')
                                    );
                 }
                 else
                 {
                    $updateData = array(
                                    'status'=>$status,
                                    
                                    );
                 }
                
                $this->db->where('id',$job_id);
                $this->db->update('job_application', $updateData);

                if($status==3)
                {
                   $message = '<div class="alert alert-success">Artist is shortlisted Successfully.</div>';
                }
                else if($status==1)
                {
                     $message = '<div class="alert alert-success">Artist is Approved Successfully.</div>';
                }else if($status==0)
                {
                     $message = '<div class="alert alert-success">Artist is Pending Successfully.</div>';
                }
                else
                {
                   $message = '<div class="alert alert-success">Artist is Rejected Successfully.</div>';
  
                }
                
                
               
                $this->session->set_flashdata('message',$message);
                //redirect(base_url('dashboard'));  

    }
    else
    {
            redirect(base_url('welcome'));
    }   
        
    }



    public function applicationStatusdirector($job_id,$status)
    {
        // echo $status;

      $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){
       // $id = $this->input->post('id');
       // $job_id = $this->input->post('job_id');
      //  $a_id = $this->input->post('a_id');
     //   $status = $this->input->post('status');

        $data['result'] = $this->db->select('*')->from('job_application')->where('job_id',$job_id)->get()->result_array();
     
        //print_r($data['result']);exit;
                // $statusdata=array('status'=>$status);
                 if($status=="Shortlist" || $status=="Approved")
                 {
                        if($status=="Shortlist")
                        {
                            $status=3;
                    $updateData = array(
                                    'status'=>$status,
                                    'status_date'=>date('Y-m-d H:i:s')
                                    );
                        }
                        else
                        {
                            $status=1;
                            $updateData = array(
                                    'status'=>$status,
                                    'status_date'=>date('Y-m-d H:i:s')
                                    );
                        }
                                            //

                    
                 }
                 else
                 {
                    //echo "inside else pending";
                    if($status=="pending")
                    {
                        $status=0;
                    
                    $updateData = array(
                                    'status'=>$status,
                                    
                                    );
                    }
                    else{
                        $status=2;

                    $updateData = array(
                                    'status'=>$status,
                                    
                                    );
                    }
                 }
                
                $this->db->where('id',$job_id);
                $this->db->update('job_application', $updateData);

                if($status==3)
                {
                   $message = '<div class="alert alert-success">Artist is shortlisted Successfully.</div>';
                }
                else if($status==1)
                {
                     $message = '<div class="alert alert-success">Artist is Approved Successfully.</div>';
                }else if($status==2)
                {
                     $message = '<div class="alert alert-success">Artist is Rejected Successfully.</div>';
                }else
                {
                    $message = '<div class="alert alert-success">Artist is Added in Pending list Successfully.</div>';
                }
                
                
               
                $this->session->set_flashdata('message',$message);
                //redirect(base_url('dashboard'));  

    }
    else
    {
            redirect(base_url('welcome'));
    }   
        
    }

     public function jobApplications()
    {
        $this->load->view('dashboard/jobApplications');
    }
    //  public function approvedApplications()
    // {
    //  $this->load->view('dashboard/approvedApplications');
    // }

public function recieveApplicationsdirector()
{
    $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        $j_id = $this->input->get('job_id');

        if($DIRECTOR_ID !=''){

        $this->db->select('*');
        $this->db->from('job_application');
        $this->db->where('job_application.status',4);
        $this->db->join('artists', 'job_application.artist_id = artists.a_id');
        

        $data['job_application_data'] = $this->db->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

        $this->load->view('dashboard/recieveapplicationdirector',$data);
        }
        else
        {
                redirect(base_url('welcome'));
                
            
        }

    // $this->load->view('dashboard/recieveapplicationdirector');   
}
    
   public function approvedApplications()
    {
        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){

        $this->db->select('artists.a_id,job_application.status,job_application.applied_date,job_application.status_date,job_application.id,job_posts.job_title,artists.name,artists.city');
        $this->db->from('job_application');
        $this->db->where('job_application.status',0);
         $this->db->where('job_application.status',4);
        $this->db->join('artists','job_application.artist_id = artists.a_id');
        $this->db->join('job_posts','job_application.job_id = job_posts.job_id');

        $data['result'] = $this->db->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();
        $casting_pack_data = $this->db->select('*')->from('casting_points')->get()->result_array();
        $data['silver_pack'] = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name','silver package')->get()->result_array();
        
        $this->load->view('dashboard/pendingApplications',$data);
        }

        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }
     public function pendingApplications()
    {
        //print_r('patil');
        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){

        $this->db->select('artists.a_id,job_application.status,job_application.id,job_application.job_id,job_application.applied_date,job_application.status_date,job_application.id,job_application.job_id,job_posts.job_title,artists.name,artists.city');
        $this->db->from('job_application');
        $this->db->where('job_application.status','0');
        $this->db->join('artists','job_application.artist_id = artists.a_id');
        $this->db->join('job_posts','job_application.job_id = job_posts.job_id');

        $data['result'] = $this->db->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();
        $casting_pack_data = $this->db->select('*')->from('casting_points')->get()->result_array();
        $data['silver_pack'] = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name','silver package')->get()->result_array();
        
        $this->load->view('dashboard/pendingApplications',$data);
        }

        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }


    public function pendingApplicationsNew()
    {
        //print_r('patil');
        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){

        $this->db->select('artists.a_id,job_application.status,job_application.id,job_application.job_id,job_application.applied_date,job_application.status_date,job_application.id,job_application.job_id,job_posts.job_title,artists.name,artists.city');
        $this->db->from('job_application');
        $this->db->where('job_application.status','0');
        $this->db->join('artists','job_application.artist_id = artists.a_id');
        $this->db->join('job_posts','job_application.job_id = job_posts.job_id');

        $data['result'] = $this->db->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();
        $casting_pack_data = $this->db->select('*')->from('casting_points')->get()->result_array();
        $data['silver_pack'] = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name','silver package')->get()->result_array();

        // return $data;
        
        // $this->load->view('dashboard/pendingApplications',$data);
        }

        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }



public function approvedapplicationlist()
    {
       // print_r('hiiiiiiiii');
        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){

        $this->db->select('artists.a_id,job_application.status,job_application.id,job_application.applied_date,job_application.status_date,job_application.id,job_application.job_id,job_posts.job_title,artists.name,artists.city');
        $this->db->from('job_application');
        $this->db->where('job_application.status','1');
        $this->db->join('artists','job_application.artist_id = artists.a_id');
        $this->db->join('job_posts','job_application.job_id = job_posts.job_id');

        $data['result'] = $this->db->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();
        $casting_pack_data = $this->db->select('*')->from('casting_points')->get()->result_array();
        $data['silver_pack'] = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name','silver package')->get()->result_array();
        
        $this->load->view('dashboard/approvedApplications',$data);
        }

        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }


         public function rejectedApplications()
    {
        //console("hi");
        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){

        $this->db->select('artists.a_id,job_application.id,job_application.status,job_application.applied_date,job_application.status_date,job_posts.job_title,artists.name,artists.city');
        $this->db->from('job_application');
        $this->db->where('job_application.status','2');
        $this->db->join('artists','job_application.artist_id = artists.a_id');
        $this->db->join('job_posts','job_application.job_id = job_posts.job_id');

        $data['result'] = $this->db->get()->result_array();
// print_r($data['result']);exit;
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();
        $casting_pack_data = $this->db->select('*')->from('casting_points')->get()->result_array();
        $data['silver_pack'] = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name','silver package')->get()->result_array();
        
        $this->load->view('dashboard/rejectedApplications',$data);
        }

        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }
    
     public function shortlistedApplications()
    {
         $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){

        $this->db->select('artists.a_id,job_application.status,job_application.id,job_application.applied_date,job_application.status_date,job_application.job_id,job_posts.job_title,artists.name,artists.city');
        $this->db->from('job_application');
        $this->db->where('job_application.status','3');
        $this->db->join('artists','job_application.artist_id = artists.a_id');
        $this->db->join('job_posts','job_application.job_id = job_posts.job_id');

        $data['result'] = $this->db->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();
        $casting_pack_data = $this->db->select('*')->from('casting_points')->get()->result_array();
        $data['silver_pack'] = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name','silver package')->get()->result_array();
        
        $this->load->view('dashboard/shortlistedApplications',$data);
        }

        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }

     public function rejected_Applications()
    {
         $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !=''){

        $this->db->select('artists.a_id,job_application.status,job_application.id,job_application.applied_date,job_application.status_date,job_application.job_id,job_posts.job_title,artists.name,artists.city');
        $this->db->from('job_application');
        $this->db->where('job_application.status','2');
        $this->db->join('artists','job_application.artist_id = artists.a_id');
        $this->db->join('job_posts','job_application.job_id = job_posts.job_id');

        $data['result'] = $this->db->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();
        $casting_pack_data = $this->db->select('*')->from('casting_points')->get()->result_array();
        $data['silver_pack'] = $this->db->select('*')->from('director_casting_points')->where('director_id',$this->session->userdata('DIRECTOR_ID'))->where('casting_point_name','silver package')->get()->result_array();
        
        $this->load->view('dashboard/rejectedApplications',$data);
        }

        else
        {
                redirect(base_url('welcome'));
                
            
        }
    }

    


    
    public function myTokens()
    {
        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !='')
        {

        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

        $this->load->view('dashboard/myTokens',$data);
        }
    else
    {
            redirect(base_url('welcome'));
        }   

        // $this->load->view('dashboard/myTokens');
    }


    public function directorSetting()
    {

        $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

        if($DIRECTOR_ID !='')
        {

        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

        $this->load->view('dashboard/director_setting',$data);
        }
    else
    {
            redirect(base_url('welcome'));
        }   
        
        // $this->load->view('dashboard/dashboard');
    }

     public function artistSetting()
    {

        $ARTIST_ID = $this->session->userdata('EMAIL_ID');

        if($ARTIST_ID !='')
        {

        $data['profile'] = $this->db->select('profile_pic')->from('artists')->where('a_id',$this->session->userdata('ARTIST_ID'))->get()->row();

        $this->load->view('dashboard/artist_setting',$data);
        }
    else
    {
            redirect(base_url('welcome'));
        }   
        
        // $this->load->view('dashboard/dashboard');
    }



    public function insert_job_post_director()
    {
       $this->load->model('director_model');
       $data['result'] = $this->director_model->insert_director_job();

       echo json_encode($data);
        $message = '<div class="alert alert-success">You are registered successfully! Make Login To Access Dashboard.</div>';
                    $this->session->set_flashdata('message',$message);
                    redirect(base_url('welcome/signup'));

    }
    

}
