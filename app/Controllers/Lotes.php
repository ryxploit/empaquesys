<?php

namespace App\Controllers;

class Lotes extends BaseController
{
    public function index()
    {
      # code...
      $data = array(
    						 'title' => 'Lotes'
    						 );
      echo view('Headers/Head', $data);
  echo view('Lotes/Vlotes');
  echo view('Footers/Foot');
    }

    public function Agregarlote()
    {
        # code...
        $data = array(
      						 'title' => 'Agregar Lote'
      						 );
        echo view('Headers/Head', $data);
		echo view('Lotes/Vaddlote');
		echo view('Footers/Foot');
    }
}
