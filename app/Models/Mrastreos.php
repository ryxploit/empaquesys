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
    public function listarpallet($data)
    {
      // code...
      $builder = $this->db->table('t_rastreos');
      $builder->select('*');
      $builder->join('t_pallet', 't_pallet.codigo_rastreo = t_rastreos.codigo');
      $builder->where('id_rastreo', $data);
      $query = $builder->get()->getResult();
      return $query;
    }

    public function EliminarPallet($data)
    {
      // code...
      $query = $this->db->table('t_pallet');
      $query->where($data);
      return $query->delete();
    }

    public function Palletobtener($data)
    {
      // code...
      $query = $this->db->table('t_pallet');
      $query->where($data);
      return  $query->get()->getResult();
    }

    public function Actualizar_data_pallet($data,$id)
    {
      // code...
      $query = $this->db->table('t_pallet');
      $query->set($data);
      $query->where('id_pallet',$id);
      return $query->update();
    }

    public function Actualizar_data_hrastreo($data,$id)
    {
      // code...
      $query = $this->db->table('t_rastreos');
      $query->set($data);
      $query->where('id_rastreo',$id);
      return $query->update();
    }

    public function Eliminar_data_hrastreo($data)
    {
      // code...
      $query = $this->db->table('t_rastreos');
      $query->where($data);
      return $query->delete();
    }

  }
