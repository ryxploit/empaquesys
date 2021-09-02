<?php

namespace App\Models;

use CodeIgniter\Model;

class Membarques extends Model
{
    // ...
    public function insertar_hembarque($data)
    {
      // code...
      $query = $this->db->table('t_embarques');
      $query->insert($data);
      return  $this->db->insertID();
    }

    public function listarhembarques()
    {
      // code...
      $builder = $this->db->table('t_embarques');
      $builder->select('*');
      return  $builder->get()->getResult();
    }
}
