<?php

namespace App\Controllers;

class Embarques extends BaseController
{
    public function index()
    {
      # code...
      echo view('Headers/Head');
  echo view('Embarques/Vpackinglist');
  echo view('Footers/Foot');
    }

    public function Agregarembarque()
    {
        # code...
        echo view('Headers/Head');
		echo view('Embarques/Vaddembarques');
		echo view('Footers/Foot');
    }
}
