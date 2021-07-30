<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = array(
							 'title' => 'Dashboard'
							 );
		echo view('Headers/Head', $data);
		echo view('Vhome');
		echo view('Footers/Foot');
	}
}
