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
	 echo $email;
		 echo $pass;
		//exit;
		 $arr=array(
			"upass"=>$pass);
		$this->db->where("uemail",$email);
		$this->db->update("users",$arr);
		return true;
	}

}
?>