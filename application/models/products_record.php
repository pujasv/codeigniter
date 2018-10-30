<?php
class Products_record extends CI_Model{
	function products_add($res,$res1)
	{
		//echo "string";



		//$res=$this->db->query("insert into record(username,age) values('$res','$res1')");
		$data = array(

        'username' => $res,
        'age' => $res1
		);

// var_dump($data);
	//	print_r($data);
$this->db->insert('record', $data);
	}


	function add_user_image($data1,$data2,$path)
	{
$data = array(

        'username' =>$data1,
        'age' => $data2,
        'imgpath' =>$path
		);

// var_dump($data);
		print_r($data);
$this->db->insert('record', $data);
	}
}
?>