<?php

namespace App\Models;

use CodeIgniter\Model;

class Mrastreos extends Model
{
    // ...
    public function listarpedidos()
    {
      // code...
      $query = $this->db->query("SELECT * FROM t_pedidos");
      return  $query->getResult();
    }
    public function listarhrastreo()
    {
      // code...
      $query = $this->db->query("SELECT * FROM t_rastreos");
      return  $query->getResult();
    }

    public function insertar_datos_hrastreo($data)
    {
      // code...
      $query = $this->db->table('t_rastreos');
      $query->insert($data);
      return  $this->db->insertID();
    }

    public function rastreoobtener($data)
    {
      // code...
      $query = $this->db->table('t_rastreos');
      $query->where($data);
      return  $query->get()->getResultArray();
    }

    public function listarlotes()
    {
      // code...
      $query = $this->db->query("SELECT * FROM t_lotes");
      return  $query->getResult();
    }

    public function insertar_datos_pallet($data)
    {
      // code...
      $query = $this->db->table('t_pallet');
      $query->insert($data);
      return  $this->db->insertID();
    }

  }
