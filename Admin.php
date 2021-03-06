<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		//echo "string";
		$this->load->view('admin/index');
	}
	public function login()
	{
		//echo "login";
		$this->load->view('admin/login');
	}
	public function logout()
	{
		$this->session->unset_userdata('status');
		$this->session->session_destroy();
		redirect(base_url());
	}
	public function register()
	{
		//echo "login";
		$this->load->view('admin/register');
	}
	function register_action()
	{
		echo "<pre>";
			print_r($_POST);
				echo "</pre>";

		echo "<pre>";
			print_r($_FILES);
				echo "</pre>";
				$this->form_validation->set_rules('uname', 'Username', 'required|trim|min_length[2]|max_length[12]|alpha');
		
	$this->form_validation->set_rules('umobile', 'Mobile Number:', 'required|trim|exact_length[10]|integer');
	$this->form_validation->set_rules('uemail', 'Email Id:', 'trim|required|valid_email|is_unique[users.uemail]');
	$this->form_validation->set_rules('upass', 'Password:', 'trim|required|min_length[4]|max_length[12]|alpha_dash');
	$this->form_validation->set_rules('ucpass', 'Confirm Password:', 'trim|required|min_length[4]|max_length[12]|alpha_dash|matches[upass]');
	  if ($this->form_validation->run() == FALSE)
           {
                	echo validation_errors();
                }
                else
                {
                	//echo "ok";
                $config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 500;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_ext_tolower']     =TRUE;
                $config['remove_spaces']		=TRUE;
                $this->upload->initialize($config);
                 $path=time().$_FILES['uprofile']['name'];
                $_FILES['uprofile']['name']=$path;


                if ( ! $this->upload->do_upload('uprofile'))
                {
					$err=$this->upload->display_errors();
					echo $err;
                }
                else
                {
                	// echo "test";
                	// exit;
                	$this->load->model('admin_model');
					unset($_POST['ucpass']);
					$_POST['uprofile']=$path;
					$_POST['upass']=do_hash($_POST['upass']);
					$lastid=$this->admin_model->add_user($_POST);
                     echo "file upload successfully";


					$email=$this->input->post('uemail');
					$url= base_url()."index.php/admin/admin/activate_user/$lastid";
					$msg="<a href='$url'>Activation Link</a>";
					$this->email->set_mailtype("html");///tosupport html
					$this->email->from('vishal@php-training.in','Vishal');
					$this->email->to($email);
					$this->email->subject('Registation Activation link');
					$this->email->message($msg);
					$res=$this->email->send();
					var_dump($res);
					echo "user added";
					// *********sms***********/
					$mobile=$this->input->post('umobile');
					$msgSMS= "welcome to codeignator panel";
                    // 246377AU3CkmDz5be13b36
                  $url_for_sms="http://api.msg91.com/api/sendhttp.php?country=91&sender=pooja&route=4&mobiles=91$mobile&authkey=246377AU3CkmDz5be13b36&message=$msgSMS";

                  echo $url_for_sms;
                  $res=file($url_for_sms);
                  printr($res);

                }
				}


	}
	function login_action()
	{
		echo "<pre>";
			print_r($_POST);
				echo "</pre>";
	}
	public function activate_user($id)
	{
		$this->load->model('admin_model');
		$ans=$this->admin_model->user_activation_process($id);
		if($ans){
			redirect(base_url().'index.php/admin/admin/login');
		}
	}
}
?>
