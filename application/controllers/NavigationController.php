<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NavigationController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('SliceLibrary',null,'slice');

		$this->load->database();
	}

	public function index()
	{
		$data['pageTitle'] = "Notz | Sample Index";
		$this->slice->view('sample_page', $data);
	}

	//place your navigation links here
}
