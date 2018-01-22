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
			$pi 	= 	3.14;
			$area1	= 	$pi * $radius * $radius;
			$data['result'] = $area1;
		}
		$data['none'] = '';
		$this->load->view('welcome_message',$data);
	}
}
