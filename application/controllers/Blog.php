<?php
  class Blog extends CI_controller {
  	public function __construct()
  	{
  		parent::__construct();
  		$this->load->model('blog_model');
  	}
    
    function index()
    {
      $this->load->helper('form');
    	$data['title'] = "My blog";
    	$data['posts'] = $this->blog_model->getPosts();
    	$this->load->view('blog_view', $data);
    }
    function search()
    {
      $this->load->helper('form');
      $data['title'] = "My blog";
      $data['posts'] = $this->blog_model->getPosts();
      $this->load->view('blog_search_view', $data);
    }
  }