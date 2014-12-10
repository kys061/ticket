<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
	}

	function login(){
		$this->_head();
		$this->load->view('login', array('returnURL'=>$this->input->get('returnURL')));
		$this->_footer();
	}
	function logout(){

		$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('/');
	}
	function register(){
		$this->_head();

		$this->load->library('form_validation');

		$this->form_validation->set_rules('cuname', '고객사이름', 'required|is_unique[user.cuname]');
		$this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('nickname', '닉네임', 'required|min_length[5]|max_length[20]');
    		$this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]');
    		$this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');

		if($this->form_validation->run() === false){
			$this->load->view('register');
		} else{
			if(!function_exists('password_hash')){
				$this->load->helper('password');
			}
			$hash = password_hash($this->input->post('password'),PASSWORD_BCRYPT);

			$this->load->model('user_model');
			$this->user_model->add(array(
				'cuname'=>$this->input->post('cuname'),
				'email'=>$this->input->post('email'),
				'password'=>$hash,
				'nickname'=>$this->input->post('nickname')
				));
			$this->session->set_flashdata('message','Success Sing UP');
			$this->load->helper('url');
			redirect('/');
		}
		$this->_footer();
	}

	function authentication(){
		//var_dump($this->config->item('authentication'));
		//$authentication = $this->config->item('authentication');
		$this->load->model('user_model');
		$user = $this->user_model->getByEmail(array('email'=>$this->input->post('email')));
		if(!function_exists('password_hash')){
        		$this->load->helper('password');
	    }
		if (
			$this->input->post('email') == $user->email && 
			password_verify($this->input->post('password'), $user->password)
			//$this->input->post('password') == $user->password
			)
		{
			$newdata = array(
				'email' => $user->email,
				'cuname' => $user->cuname,
				'is_login' => true
				);
			$this->session->set_userdata($newdata);
			$returnURL = $this->input->get('returnURL');
			
			if($returnURL === false){
				$returnURL = '/';
			}else {
			redirect($returnURL);
			}
		} 
		else 
		{
			$this->session->set_flashdata('message','LOGIN FAIL');
			$this->load->helper('url');
			redirect('/auth/login');
		}
	}
}