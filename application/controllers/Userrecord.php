<?php

/**
 * 
 */
class Userrecord extends CI_Controller{
	function index(){
		
		$this->load->view('recordview');
			//	$this->load->view('file_upload_view');

	}
	function products(){

	//	echo "testing";
		//$res=$this->input->post("name");
		//print_r($res);
		//$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Username', 'required|max_length[12]|alpha|is_unique[record.username]');
		$this->form_validation->set_rules('age', 'age', 'integer|greater_than[18]');
		  if ($this->form_validation->run() == FALSE)
                {
                	//echo "error";
                        $this->load->view('recordview');
                }
                else
                {
                	 $res=$this->input->post("name");
                	  $res1=$this->input->post("age");
					//	print_r($res);

						$this->load->model('products_record');
						$this->products_record->products_add($res,$res1);

				}
      }
      function products1(){

		$this->form_validation->set_rules('name', 'Username', 'required|max_length[12]|alpha|is_unique[record.username]');
		$this->form_validation->set_rules('age', 'age', 'integer|greater_than[18]');
		  if ($this->form_validation->run() == FALSE)
                {
                       // $this->load->view('recordview');
                	echo validation_errors();
                }
                else
                {
                	 $res=$this->input->post("name");
                	  $res1=$this->input->post("age");
						$this->load->model('products_record');
						$this->products_record->products_add($res,$res1);

				}
      }
}
  ?>