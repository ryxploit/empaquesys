<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpedidos extends Model
{
    // ...

    public function listarpedidos()
    {
      // code...
      $query = $this->db->query("SELECT * FROM t_pedidos");
      return  $query->getResult();
    }

    public function insertar_datos($data)
    {
      // code...
      $query = $this->db->table('t_pedidos');
      $query->insert($data);
      return  $this->db->insertID();
    }

    public function Pedidoobtener($data)
    {
      // code...
      $query = $this->db->table('t_pedidos');
      $query->where($data);
      return  $query->get()->getResult();
    }

    public function Actualizarpedido($data,$id)
    {
      // code...
      $query = $this->db->table('t_pedidos');
      $query->set($data);
      $query->where('id_pedidos',$id);
      return $query->update();
    }

    public function Eliminarpedido($data)
    {
      // code...
      // code...
      $query = $this->db->table('t_pedidos');
      $query->where($data);
      return $query->delete();
    }
}
