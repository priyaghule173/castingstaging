<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model(COMMON_DB_MODEL);
    }

    /* .......................... ADD USER Details ........................ */

   
    public function addUserDetails($data) {

        $serverResult = array();
        $userData = $this->checkUserExist($data);

        if (sizeof($userData) > 0) {
            $serverResult['status'] = TRUE;
            $serverResult['message'] = "You are Already Registered with IndeanTest Please Login";
            $serverResult['responce_code'] = 101;
            $serverResult['userdata'] = $userData;
        } else {

            $newdata = $this->createUserArrayToStoreInDB($data);
            if ($this->db->insert(TABLE_INDEANTEST_USER, $newdata) == TRUE) {

                $user_id = $this->db->insert_id();
                $serverResult['status'] = TRUE;
                $serverResult['message'] = "User Saved Succesfully";
                $serverResult['responce_code'] = 102;
                $serverResult['userdata'] = $this->getUserdata($user_id);
            } else {

                $serverResult['status'] = FALSE;
                $serverResult['message'] = "Something Went Wrong Try After Some Time";
            }
        }

        return $serverResult;
    }

    private function checkUserExist($data) {
        $where = array('email' => $data['email'], 'operationstatus !=' => '2');
        $this->db->select("*");
        $this->db->from(TABLE_INDEANTEST_USER);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    private function createUserArrayToStoreInDB($data) {
        $newdata = array();

        $newdata['registration_date'] = time();
        $newdata['name'] = $data['name'];        
        $newdata['email'] = $data['email'];
        $newdata['gender'] = $data['gender'];
        $newdata['mobilenumber'] = $data['mobilenumber'];
        $newdata['verification_status'] = 0;
        $newdata['operationstatus'] = '0';

        return $newdata;
    }

    private function getUserdata($user_id) {
        $where = array('user_id' => $user_id, 'operationstatus !=' => '2');
        $this->db->select("*");
        $this->db->from(TABLE_INDEANTEST_USER);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    /* .......................... Update User Details ....................... */

    public function updateUserDetails($userData) {

        $newdata = $this->createUserArrayForUpdate($userData);

        $this->db->where('user_id', $userData['user_id']);
        if ($this->db->update(TABLE_INDEANTEST_USER, $newdata) == TRUE) {

            $serverResult['status'] = TRUE;
            $serverResult['message'] = "User Updated Successfully";
        } else {

            $serverResult['status'] = FALSE;
            $serverResult['message'] = "Something Went Wrong Try After Some Time";
        }
        return $serverResult;
    }

    private function createUserArrayForUpdate($data) {
        $newdata = array();

        $newdata['firstname'] = $data['firstname'];
        $newdata['lastname'] = $data['lastname'];
        $newdata['email'] = $data['email'];
        $newdata['gender'] = $data['gender'];
        $newdata['mobilenumber'] = $data['mobilenumber'];
        $newdata['operationstatus'] = '1';

        return $newdata;
    }

	/* .......................... API for App ....................... */

     public function search_hotel($searchdata)
     {

		 $distance=1;
		 $data=$searchdata['keyword'];
		 $lat=$searchdata['latitude'];
		 $long=$searchdata['longitude'];
		 $type=$searchdata['type'];
		 $subtype=$searchdata['subtype'];
		 if($lat==0 || $long==0)
		 {
		     
		      $result['status'] = False;
             $result['message'] = "Please Enter Valid Latitude and Longitude Values";
       $result['searchResult']= null;
		   return $result;
		 }
		 
		 else
		 {

		  if($type==2)
		 {
			  $base_url=base_url().'hotelImages/';

       $sql="SELECT *,((ACOS(SIN($lat * PI() / 180) * SIN(`lattitude` * PI() / 180) +COS($lat * PI() / 180) * COS(`lattitude` * PI() / 180) * COS(($long - `longitude`) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS `distance` FROM hotels  WHERE (hotels.hotel_name LIKE '%$data%' OR hotels.address LIKE '%$data%' OR hotels.menu LIKE '%$data%' OR hotels.top_dishes LIKE '%$data%' OR hotels.cuisine LIKE '%$data%') 
         AND hotels.food_type_id=$subtype
     AND (`lattitude` BETWEEN ($lat - $distance) AND $lat + $distance) AND `longitude` BETWEEN ($long - $distance)AND ($long + $distance)";

       $query=$this->db->query($sql);

       $final=  $query->result_array();


      if($final!=null)
      {
        $data_final=array();

        foreach($final as $sample)
        {
          // echo 'gggg';
          // $demo='snbehal';


           $hotel_id=$sample['hotel_id'];

        $hotel_images="SELECT  CONCAT('$base_url', indeantest_pictures.picture_name) AS picture_name FROM indeantest_pictures  LEFT JOIN hotels
     ON hotels.hotel_id =indeantest_pictures.hotel_id  WHERE indeantest_pictures.hotel_id=$hotel_id ";

        $query1=$this->db->query($hotel_images);

        $final_images=  $query1->result_array();

        $picture=array();

        if(count($final_images) > 0){
            
                foreach($final_images as $rowimg)
                {
                    $picturedata=$rowimg['picture_name'];

                    array_push($picture,$picturedata);
                  
                }
                 $sample['picture'] = $picture;
                }else{

                    $picturedata='';

                    array_push($picture,$picturedata);
                     $sample['picture'] = $picture;
                }
          // print_r($sample);exit;

          //  review

        $hotel_review1="SELECT * AS hotel_review,rating  FROM review  LEFT JOIN hotels
     ON hotels.hotel_id =review.hotel_id WHERE review.hotel_id=$hotel_id ";
     
     $hotel_review="SELECT * FROM review  LEFT JOIN hotels
     ON hotels.hotel_id =review.hotel_id LEFT JOIN indeantest_users
     ON indeantest_users.user_id =review.user_id WHERE review.hotel_id=$hotel_id ";
        $query2=$this->db->query($hotel_review);
        $hotel_review=  $query2->result_array();

        $review=array();
        $rating=array();

        if($hotel_review!=null)
        {
             foreach($hotel_review as $row)
          {
            $reviewdata['user_id']=$row['user_id'];
          $reviewdata['name']=$row['name'];
          $reviewdata['review']=$row['review'];
          $reviewdata['rating']=$row['rating'];
          $reviewdata['review_date']=$row['review_date'];
          $ratingdata=$row['rating'];
          array_push($review,$reviewdata);
          array_push($rating,$ratingdata);

           
           if($rating!=null)
        {
              $average = array_sum($rating) / count($rating);
        }
        else
        {
            $average =0;
        }

          $totalRating = number_format($average, 1);
          $sample['review'] = $review;
          $sample['rating'] = $totalRating;
        }
        //echo 'hii';

        }
        else
        {
           // echo 'hello';
           $reviewdata='';
           $ratingdata='';
          array_push($review,$reviewdata);
          array_push($rating,$ratingdata);
           $sample['review'] = [];
            $sample['rating'] = "";
        }

         array_push($data_final, $sample);
        // ********
        }

        // print_r($data_final);exit;
      }
      else
      {
        $data_final='';
      }

     }
      else
         {
              $base_url=base_url().'banquet_hall_images/';

       $sql="SELECT *,((ACOS(SIN($lat * PI() / 180.0) * SIN(`lattitude` * PI() / 180.0) +COS($lat * PI() / 180.0) * COS(`lattitude` * PI() / 180.0) * COS(($long - `longitude`) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS `distance` FROM indeantest_banquethall  WHERE indeantest_banquethall.hall_name  LIKE '%$data%' OR indeantest_banquethall.functions LIKE '%$data%' OR indeantest_banquethall.services LIKE '%$data%' OR indeantest_banquethall.address LIKE '%$data%'
         AND (`lattitude` BETWEEN ($lat - $distance) AND $lat + $distance) AND `longitude` BETWEEN ($long - $distance)AND ($long + $distance)";


CREATE FUNCTION dbo.fnCalcDistanceKM(@lat1 FLOAT, @lat2 FLOAT, @lon1 FLOAT, @lon2 FLOAT)
RETURNS FLOAT 
AS
BEGIN

    RETURN ACOS(SIN(PI()*@lat1/180.0)*SIN(PI()*@lat2/180.0)+COS(PI()*@lat1/180.0)*COS(PI()*@lat2/180.0)*COS(PI()*@lon2/180.0-PI()*@lon1/180.0))*6371
END


       $query=$this->db->query($sql);

       $final=  $query->result_array();


      if($final!=null)
      {
        $data_final=array();

        foreach($final as $sample)
        {
          // echo 'gggg';
          // $demo='snbehal';


           $banquet_hall_id=$sample['hall_id'];

        $banquethall_images="SELECT  CONCAT('$base_url', indeantest_pictures.picture_name) AS picture_name FROM indeantest_pictures  LEFT JOIN indeantest_banquethall
     ON indeantest_banquethall.hall_id =indeantest_pictures.banquethall_id  WHERE indeantest_pictures.banquethall_id=$banquet_hall_id ";

        $query1=$this->db->query($banquethall_images);

        $final_images=  $query1->result_array();

        $picture=array();

        if(count($final_images) > 0){
            
                foreach($final_images as $rowimg)
                {
                    $picturedata=$rowimg['picture_name'];

                    array_push($picture,$picturedata);
                  
                }
                 $sample['picture'] = $picture;
                }else{

                    $picturedata='';

                    array_push($picture,$picturedata);
                     $sample['picture'] = $picture;
                }
          // print_r($sample);exit;

          //  review

         $banquethall_review1="SELECT * AS banquethall_review,rating  FROM review  LEFT JOIN indeantest_banquethall
     ON indeantest_banquethall.hall_id =review.banquethall_id WHERE review.banquethall_id=$banquet_hall_id";
     
     $banquethall_review="SELECT * FROM review  LEFT JOIN indeantest_banquethall
     ON indeantest_banquethall.hall_id =review.banquethall_id LEFT JOIN indeantest_users
     ON indeantest_users.user_id =review.user_id WHERE review.banquethall_id=$banquet_hall_id ";
        $query2=$this->db->query($banquethall_review);
        $banquethall_review=  $query2->result_array();

        $review=array();
        $rating=array();

        if($banquethall_review!=null)
        {
             foreach($banquethall_review as $row)
          {
              $reviewdata['user_id']=$row['user_id'];
          $reviewdata['name']=$row['name'];
          $reviewdata['review']=$row['review'];
          $reviewdata['rating']=$row['rating'];
          $reviewdata['review_date']=$row['review_date'];
          $ratingdata=$row['rating'];
          array_push($review,$reviewdata);
          array_push($rating,$ratingdata);

           
           if($rating!=null)
        {
              $average = array_sum($rating) / count($rating);
        }
        else
        {
            $average =0;
        }

          $totalRating = number_format($average, 1);
          $sample['review'] = $review;
          $sample['rating'] = $totalRating;
        }
        //echo 'hii';

        }
        else
        {
           // echo 'hello';
           $reviewdata='';
           $ratingdata='';
          array_push($review,$reviewdata);
          array_push($rating,$ratingdata);
           $sample['review'] = [];
            $sample['rating'] = "";
        }

         array_push($data_final, $sample);
        // ********
        }

        // print_r($data_final);exit;
      }
      else
      {
        $data_final='';
      }

         }


     if($data_final!=null)
     {
         $result['status'] = TRUE;
             $result['message'] = "success";
       $result['searchResult']= $data_final;
     }
     else
     {
         $result['status'] = FALSE;
             $result['message'] = "failed to search!";
       $result['searchResult']= $data_final;
     }
		 

     return $result;
		 }

     }


//	      public function search_hotels_location($lat,$long)
//     {
//        $distance=1;
//        $sql="SELECT *,((ACOS(SIN($lat * PI() / 180) * SIN(`lattitude` * PI() / 180) +COS($lat * PI() / 180) * COS(`lattitude` * PI() / 180) * COS(($long - `longitude`) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS `distance` FROM `hotels` WHERE (`lattitude` BETWEEN ($lat - $distance) AND $lat + $distance) AND `longitude` BETWEEN ($long - $distance)AND ($long + $distance);";
//        $data =  $this->db->query($sql);
//
//        return $data->result_array();
//     }

}
