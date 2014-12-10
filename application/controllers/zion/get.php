<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Get extends CI_Controller {
    function index(){
	$this->load->view('header');
	$this->load->view('get');
	$this->load->view('footer');
    }

function post($id){
	$data = array('id'=>$id);
	$this->load->view('header');
    	$this->load->view('post',$data);
	$this->load->view('footer');
    }
}

?>

