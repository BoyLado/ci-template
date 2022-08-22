<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Manila');

class NavigationController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('SliceLibrary',null,'slice');
	}

	public function page404()
	{
		$data['pageTitle'] = "U Pick a Pallet LLC | 404 Page";
		$this->slice->view('404', $data);
	}

	public function users()
    {
        $data['pageTitle'] = "U Pick a Pallet LLC | Users";
        $data['customScripts'] = 'users';
		$this->slice->view('portal.users', $data);
    }

	public function dashboard()
	{
		$data['pageTitle'] = "U Pick a Pallet LLC | Dashboard";
        $data['customScripts'] = 'dashboard';
		$this->slice->view('portal.dashboard', $data);
	}
}
