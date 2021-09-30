<?php

namespace App\Models;

use CodeIgniter\Model;

class Musuarios extends Model
{
    // ...

    public function listarusuarios()
    {
      // code...
      $query = $this->db->query("SELECT * FROM t_usuarios");
      return  $query->getResult();
    }

    public function insertar_datos($data)
    {
      // code...
      $query = $this->db->table('t_usuarios');
      $query->insert($data);
      return  $this->db->insertID();
    }

    public function usuariobtener($data)
    {
      // code...
      $query = $this->db->table('t_usuarios');
      $query->where($data);
      return  $query->get()->getResult();
    }

    public function Actualizarusuario($data,$id)
    {
      // code...
      $query = $this->db->table('t_usuarios');
      $query->set($data);
      $query->where('id_usuario',$id);
      return $query->update();
    }

    public function Actualizarcontraseña($data,$id)
    {
      // code...
      $query = $this->db->table('t_usuarios');
      $query->set($data);
      $query->where('id_usuario',$id);
      return $query->update();
    }

    public function Eliminarusuario($data)
    {
      // code...
      // code...
      $query = $this->db->table('t_usuarios');
      $query->where($data);
      return $query->delete();
    }
}
