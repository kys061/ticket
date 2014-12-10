<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Batch extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function process(){
        $this->load->model('user_model');
        $users = $this->user_model->gets();       
        $this->load->library('email');
        $this->email->initialize(array(
				'mailtype'=>'html',
				'protocol'=>'smtp',
				'smtp_host'=>'ssl://smtp.naver.com',
				'smtp_user'=>'kys061',
				'smtp_pass'=>'yt#$09yt',
				'smtp_port'=>'465',
				'smtp_timeout'=>'10'
				)); 

        foreach($users as $user){
			$this->email->from('kys061@naver.com', 'Kang');
			$this->email->to($user->email); 
			$this->email->subject('새로운 글이 등록 되었습니다.');
			$this->email->message('<a href="'.site_url('/topic/post/'.$topic_id).'">'.$this->input->post('title').'</a>');
			$this->email->send();
            echo "{$user->email}로 메일 전송을 성공 했습니다.\n";
        }   
 
    }	
}