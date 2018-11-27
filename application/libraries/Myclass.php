<?php
class Myclass{
	public $CI="";
	function __construct(){
		$this->CI = & get_instance();
	}
	function get_category(){
		return $this->CI->db->get("category")->result_array();
	}
	function get_brand(){
		return $this->CI->db->get("brand")->result_array();
	}
	function get_products(){
		$sql= "select products.id as pid,products.name as product,price,discount,path,description,category.name as cat,brand.name as br from category,brand,products where brand.id=brand_id and category.id=category_id";
		$ans= $this->CI->db->query($sql);
		foreach ($ans->result_array() as $row) {
		//	print_r($row);
		//	echo "$row";
			$data[]=$row;
		}
		return $data;
	}
}
?>