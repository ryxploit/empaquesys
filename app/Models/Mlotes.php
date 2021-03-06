<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlotes extends Model {

    // ...

    public function listarlotes() {
        // code...
        $query = $this->db->query("SELECT * FROM t_lotes");
        return $query->getResult();
    }

    public function insertar_lote($data) {
        // code...
        $query = $this->db->table('t_lotes');
        $query->insert($data);
        return $this->db->insertID();
    }

    public function loteobtener($data) {
        // code...
        $query = $this->db->table('t_lotes');
        $query->where($data);
        return $query->get()->getResult();
    }

    public function Actualizarlote($data, $id) {
        // code...
        $query = $this->db->table('t_lotes');
        $query->set($data);
        $query->where('id_lotes', $id);
        return $query->update();
    }

    public function Eliminarlote($data) {
        // code...
        // code...
        $query = $this->db->table('t_lotes');
        $query->where($data);
        return $query->delete();
    }
    
    public function listarlotes_fecha(){
        $query = $this->db->query("SELECT * FROM `t_lotes` WHERE fecha ORDER BY fecha ASC");
        return $query->getResult();
    }
    
    public function listarsuma_fecha(){
        $query = $this->db->query("SELECT fecha,SUM(numero_cajas) AS totalsuma FROM `t_lotes` GROUP BY fecha ORDER by fecha ASC");
        return $query->getResult();
    }

}
