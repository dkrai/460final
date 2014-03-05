<?php
  class Blog extends CI_controller {
    function index()
    {
      $this->load->view('blog_view');
    }
  }