<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpedidos extends Model
{
    // ...

    public function insertar_datos($data)
    {
      // code...
      $query = $this->db->table('t_pedidos');
      $query->insert($data);
      return  $this->db->insertID();
    }
}
