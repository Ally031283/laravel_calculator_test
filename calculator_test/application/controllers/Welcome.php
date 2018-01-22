<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->helper('form');
        }
	function index()
	{
		if($this->input->post('submit'))
		{
			$radius =  $this->input->post('radius');
			$pi 	= 	3.14159;
			$area1	= 	$pi * $radius * $radius;
			$data['result'] = $area1;
		}
		if($this->input->post('submit1'))
		{
			$base = $this->input->post('base');
			$height = $this->input->post('height');
			$data['result1'] = ($base*$height)/2;
		}
		$data['none'] = '';
		$this->load->view('welcome_message',$data);
	}
}
