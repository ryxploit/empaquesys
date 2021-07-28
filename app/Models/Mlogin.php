<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlogin extends Model
{
    // ...

    public function session_data($data)
    {
      // code...
      $usuario = $this->db->table('t_usuarios');
      $usuario->where($data);
      return $usuario->get()->getResultArray();
    }
}
