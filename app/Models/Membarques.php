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

    public function obtener_embarque($id)
    {
      // code...
      $query = $this->db->table('t_embarques');
      $query->where($id);
      return  $query->get()->getResultArray();
    }

    public function listarpedidos()
    {
      // code...
      $builder = $this->db->table('t_pedidos');
      $builder->select('*');
      return  $builder->get()->getResult();
    }

    public function insertar_datos_pallet($data)
    {
      // code...
      $query = $this->db->table('t_pallet_embarque');
      $query->insert($data);
      return  $this->db->insertID();
    }

    public function listarpallet($id)
    {
      // code...
      $builder = $this->db->table('t_pallet_embarque');
      $builder->select("* , GROUP_CONCAT(calibre, ' - ',cantidad, '<br>') AS todos");
      $builder->where('embarque_id', $id);
      $builder->groupBy('pedido');
      $query = $builder->get()->getResult();
      return $query;
    }


}
