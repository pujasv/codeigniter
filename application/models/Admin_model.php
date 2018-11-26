<?php

class Admin_model extends CI_Model{
	function add_user($data)
	{
		$result=$this->db->insert("users",$data);
		return $this->db->insert_id();
	}
	 function user_activation_process($id)
	 {
	 	$arr=array(
			"ustatus"=>1);
		$this->db->where("uid",$id);
		$this->db->update("users",$arr);
		return true;
	}
	function auth($email,$pass){
		// echo $email;
		 // echo $pass;
		//$ans=$this->db->get_where("users",array("uemail"=>$email))->result();
		$ans=$this->db->select('upass')->get_where("users",array("uemail"=>$email))->result_array();
		
// echo "<pre>";
		// print_r($ans);
		if(count($ans)>0){
		 $dbpass=$ans[0]['upass'];
			// echo $pass;
		//	exit;
			if($dbpass!=$pass){
				return false;
			}
			else{
				return true;
			}
		}
		else{
			return false;
		}
	}
	function check_password($pass,$email)
	{
		// echo $email;
		 // echo $pass;
		//exit;
		$ans=$this->db->select('upass')->get_where("users",array("uemail"=>$email))->result_array();
		$dbpass=$ans[0]['upass'];
		if($dbpass==$pass){
			return true;
		}else{
			return false;
		}

		//return($dbpass=$pass)?true:False; ///ternary operator
		
	}
	function update_password($pass,$email)
	{
	// echo $email;
	//	 echo $pass;
		//exit;
		 $arr=array(
			"upass"=>$pass);
		$this->db->where("uemail",$email);
		$this->db->update("users",$arr);
		return true;
	}
	function get_userdata($email)
	{
		$this->db->select("uid,uname,umobile,uprofile,ustatus");
		return $this->db->get_where("users",array("uemail"=>$email))->result();
		
		
	}
	function check_email($email)
	{
		return $this->db->select("umobile")->get_where("users",array("uemail"=>$email))->result_array();
	}
	function update_otp($email,$ans)
	{
		// echo $email;
		// echo $ans;
		$data =array("otp"=>$ans);
		$this->db->where("uemail",$email);
		return $this->db->update("users",$data);
	}
	function get_otp($email){
	return $this->db->select("otp")->get_where("users",array("uemail"=>$email))->result();
	}
	function update_password_for_forgot($pass,$email)
	{
		$data =array("upass"=>$pass);
		$this->db->where("uemail",$email);
		return $this->db->update("users",$data);
	}
	function add_category($data)
	{
		return $this->db->insert("category",$data);
		
	}
	function add_brand($data)
	{
		return $this->db->insert("brand",$data);
		
	}
function get_category()
	{
		return $this->db->get("category")->result_array();
		
	}
	function get_brand()
	{
		return $this->db->get("brand")->result_array();
		
	}
function add_products($data)
	{
		return $this->db->insert("products",$data);
		
	}

}
?>