<?php

namespace App\Controllers;

class Rastreo extends BaseController
{
    public function index()
    {
      # code...
      $data = array(
    						 'title' => 'Hoja de rastreo'
    						 );
      echo view('Headers/Head', $data);
  echo view('Rastreo/Vhrastreo');
  echo view('Footers/Foot');
    }

    public function Agregarhrastreo()
    {
        # code...
        $data = array(
      						 'title' => 'Agregar Hoja de rastreo'
      						 );
        echo view('Headers/Head', $data);
		echo view('Rastreo/Vaddhrastreo');
		echo view('Footers/Foot');
    }
}
