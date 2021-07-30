<?php

namespace App\Controllers;

class Embarques extends BaseController
{
    public function index()
    {
      # code...
      $data = array(
    						 'title' => 'PACKING LIST'
    						 );
      echo view('Headers/Head', $data);
  echo view('Embarques/Vpackinglist');
  echo view('Footers/Foot');
    }

    public function Agregarembarque()
    {
        # code...
        $data = array(
      						 'title' => 'Agregar embarque'
      						 );
        echo view('Headers/Head', $data);
		echo view('Embarques/Vaddembarques');
		echo view('Footers/Foot');
    }
}
