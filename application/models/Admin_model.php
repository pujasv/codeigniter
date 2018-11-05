<?php

class Admin_model extends CI_Model{
	function add_user($data)
	{
		$result=$this->db->insert("users",$data);
		return $this->db->insert_id();
	}
	// function user_activation_process($id)
	// {
	// 	$arr=array(
	// 		"ustatus"=>1);
	// 	$this->db->where("uid",$id);
	// 	$this->db->update("users",$arr);
	// 	return true;
	// }

}
?>