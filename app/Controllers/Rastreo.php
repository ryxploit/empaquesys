<?php

namespace App\Controllers;

class Rastreo extends BaseController
{
    public function index()
    {
      # code...
      echo view('Headers/Head');
  echo view('Rastreo/Vhrastreo');
  echo view('Footers/Foot');
    }

    public function Agregarhrastreo()
    {
        # code...
        echo view('Headers/Head');
		echo view('Rastreo/Vaddhrastreo');
		echo view('Footers/Foot');
    }
}
