<?php

namespace App\Controllers;

class Lotes extends BaseController
{
    public function index()
    {
      # code...
      echo view('Headers/Head');
  echo view('Lotes/Vlotes');
  echo view('Footers/Foot');
    }

    public function Agregarlote()
    {
        # code...
        echo view('Headers/Head');
		echo view('Lotes/Vaddlote');
		echo view('Footers/Foot');
    }
}
