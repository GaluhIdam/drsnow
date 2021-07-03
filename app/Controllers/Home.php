<?php

namespace App\Controllers;

use App\Models\M_Profile;

class Home extends BaseController
{
	public function __construct()
	{
		$this->M_Profile = new M_Profile();
	}
	public function index()
	{
		session();
		$data = [
			'title' => 'Home',
			'id_profile' => $this->M_Profile->getProfile(),
			'validation' => \Config\Services::validation()
		];
		return view('Page/home', $data);
	}
}
