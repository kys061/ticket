<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();  
		$this->load->database();
		if(!$this->input->is_cli_request())
			$this->load->library('session');
	}

	function _footer(){
		$this->load->view('footer');
	}

	function _head(){ // private method - no routing
		//var_dump($this->session->userdata('session_test'));
		//$this->session->set_userdata('session_test','yskang');
		//var_dump($this->session->all_userdata());
		$this->load->view('header');

	}
	function _sidebar(){
		//$topics = $this->topic_model->gets();
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/topic/tlist/';
		//$config['total_rows'] = count($this->topic_model->get_all_open());
		$config['total_rows'] = $this->topic_model->get_list($this->uri->segment(3), 'count');
		$config['per_page'] = 3; 
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		//$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<div"><ul class="pagination>';
		$config['full_tag_close'] = '</ul></div>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';


		$this->pagination->initialize($config); 
		$data['pagination'] = $this->pagination->create_links();
		$page = $this->uri->segment(3, 1);

		if ( $page > 1)
		{
			$start = (($page/$config['per_page'])) * $config['per_page'];
		}
		else
		{
			$start = ($page - 1) * $config['per_page'];
		}

		$limit = $config['per_page'];

		$data['list'] = $this->topic_model->get_list($this->uri->segment(3), '', $start, $limit);

		$this->load->view('topic_list', $data);


	}

	function _sidebar_close(){
		//$topics = $this->topic_model->gets();
		//$topics = $this->topic_model->gets();
		//$this->output->enable_profiler(TRUE);
		echo $this->uri->uri_string();
		echo "<br>";
		echo $this->input->post('search_sel');

		$search_sel = $this->input->post('search_sel');
		echo "<br>";
		echo $search_sel;
		//검색어 초기화
		$search_word = $page_url = '';
		$uri_segment = 5;

		//주소중에서 q(검색어) 세그먼트가 있는지 검사하기 위해 주소를 배열로 변환
		$uri_array = $this->segment_explode($this->uri->uri_string());

		if( in_array('q', $uri_array) ) {
			//주소에 검색어가 있을 경우의 처리. 즉 검색시
			$search_word = urldecode($this->url_explode($uri_array, 'q'));
		//	echo $this->url_explode($uri_array, 'q');

			//페이지네이션용 주소
			$page_url = '/q/'.$search_word;
			$uri_segment = 7;
		}

		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/topic/tlist/';
		//$config['total_rows'] = count($this->topic_model->get_all('close'));
		$config['total_rows'] = $this->topic_model->get_list_close($this->uri->segment(3), 'count');
		$config['per_page'] = 10; 
		//$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';


		$this->pagination->initialize($config); 
		$data['pagination'] = $this->pagination->create_links();
		
		if( in_array('q', $uri_array) ){
		$page = $this->uri->segment($uri_segment, 1);
		}
		else{
		$page = $this->uri->segment(3, 1);
		}

		if ( $page > 1)
		{
			$start = (($page/$config['per_page'])) * $config['per_page'];
		}
		else
		{
			$start = ($page - 1) * $config['per_page'];
		}

		$limit = $config['per_page'];

		$data['closeticket'] = $this->topic_model->get_list_close($this->uri->segment(3), '', $start, $limit, $search_word, $search_sel);
		
		$data['openticket'] = $this->topic_model->get_list_open($this->uri->segment(3), 'count');

		$data['holdticket'] = $this->topic_model->get_list_hold($this->uri->segment(3), 'count');

		$this->load->view('topic_list', $data);


	}
}