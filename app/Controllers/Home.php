<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('Headers/Head');
		echo view('Vhome');
		echo view('Footers/Foot');
	}
}
