<?php

/**
 * 
 */
class Project extends CI_Controller
{
	
function index()	{
		# code...
	//echo "test";
	$this->load->view('project_view');
	//	$this->load->view('file_upload_view');//create link
	}
	function actionPage()
	{
		//$res=$this->input->post("username");
		//print_r($res);

		 //$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Username', 'required|max_length[12]|alpha');
		$this->form_validation->set_rules('age', 'Username', 'required|greater_than[18]');
		  if ($this->form_validation->run() == FALSE)
                {
                	//echo "error";
                        $this->load->view('project_view');
                }
                else
                {
                       $res=$this->input->post("name");
						print_r($res);
                }
	}
	function file_upload()
{
	$this->load->view('file_upload_view');
}
function file_action()
{
	//print_r($_POST);
	//print_r($_FILES);
	$data1=$this->input->post('name');
	$data2=$this->input->post('age');
	 $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_ext_tolower']     =TRUE;
                $config['remove_spaces']		=TRUE;

               // $this->load->library('upload', $config);


                $this->upload->initialize($config);
                 $path=time().$_FILES['uimage']['name'];
                $_FILES['uimage']['name']=$path;


                if ( ! $this->upload->do_upload('uimage'))
                {
					$err=$this->upload->display_errors();
					echo $err;
                }
                else
                {
                	$this->load->model('products_record');
						$this->products_record->add_user_image($data1,$data2,$path);
                        echo "file upload successfully";
                }
}
function session1()
{
	$this->session->set_userdata('name','pooja');
	$this->session->set_userdata('age','20');

	$newdata = array(
        'email'  => 'pooja@gmail.com',
        'mobile'     => '9090909090',
     
);

$this->session->set_userdata($newdata);

redirect(base_url('index.php/project/session2/'));
}
function session2()
{
	//echo "test";
	$this->load->view('show_session_data');
}

function session3()
{

	$this->session->unset_userdata('name');
	$this->session->unset_userdata('mobile');
	$this->session->unset_userdata('age');
	$this->session->unset_userdata('email');
	$this->session->sess_destroy();
	redirect(base_url());
}
function cookie1()
{
	set_cookie("username","pooja",3600,"","/");
 redirect(base_url('index.php/project/cookie2/'));

}
function cookie2()
{
	$this->load->view('showcookie');


}
function cookie3()
{
	set_cookie("username");
	    redirect(base_url('index.php/project/cookie2/'));
}
}
?>