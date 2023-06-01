<?php

namespace App\Models;

use CodeIgniter\Model;

class Mrastreos extends Model {

    // ...
    public function listarpedidos() {
        // code...
        $query = $this->db->query("SELECT * FROM t_pedidos");
        return $query->getResult();
    }

    public function listarhrastreo() {
        // code...
        $query = $this->db->query("SELECT * FROM t_rastreos");
        return $query->getResult();
    }

    public function insertar_datos_hrastreo($data) {
        // code...
        $query = $this->db->table('t_rastreos');
        $query->insert($data);
        return $this->db->insertID();
    }

    public function rastreoobtener($data) {
        // code...
        $query = $this->db->table('t_rastreos');
        $query->where($data);
        return $query->get()->getResultArray();
    }

    public function listarpalletArray($data) {
        // code...
        $builder = $this->db->table('t_rastreos');
        $builder->select('*');
        $builder->join('t_pallet', 't_pallet.codigo_rastreo = t_rastreos.codigo');
        $builder->where('id_rastreo', $data);
        $query = $builder->get()->getResultArray();
        ;
        return $query;
    }

    public function listarlotes() {
        // code...
        $query = $this->db->query("SELECT * FROM t_lotes");
        return $query->getResult();
    }

    public function insertar_datos_pallet($data) {
        // code...
        $query = $this->db->table('t_pallet');
        $query->insert($data);
        return $this->db->insertID();
    }

    public function listarpallet($data) {
        // code...
        $builder = $this->db->table('t_rastreos');
        $builder->select('*');
        $builder->join('t_pallet', 't_pallet.codigo_rastreo = t_rastreos.codigo');
        $builder->where('id_rastreo', $data);
        $query = $builder->get()->getResult();
        return $query;
    }

    public function listartotalpallet($data) {
        // code...
        $builder = $this->db->table('t_rastreos');
        $builder->select('p.pallet,p.total,count(DISTINCT p.pallet) as xx');
        $builder->from('t_rastreos r');
        $builder->join('t_pallet p', 'p.codigo_rastreo=r.codigo');
        $builder->where('r.id_rastreo', $data);
        //$builder->groupBy('p.pallet');
        $query = $builder->get()->getResult();
        return $query;
    }

    public function listarlote($dato) {
        // code...
        $builder = $this->db->table('t_lotes');
        $builder->select('* ,SUM(t_pallet.total) AS totalD');
        $builder->join('t_pallet', 't_lotes.lote = t_pallet.lote');
        $builder->where('codigo_rastreo', $dato);
        $builder->groupBy('t_pallet.folio');
        $query = $builder->get()->getResult();
        return $query;
    }

    public function sumlotepa($dato) {
        // code...
        $builder = $this->db->table('t_lotes');
        $builder->select('* ,SUM(t_pallet.total) AS totalCJ');
        $builder->join('t_pallet', 't_lotes.lote = t_pallet.lote');
        $builder->where('codigo_rastreo', $dato);

        $query = $builder->get()->getResult();
        return $query;
    }

    public function EliminarPallet($data) {
        // code...
        $query = $this->db->table('t_pallet');
        $query->where($data);
        return $query->delete();
    }

    public function Palletobtener($data) {
        // code...
        $query = $this->db->table('t_pallet');
        $query->where($data);
        return $query->get()->getResult();
    }

    public function Actualizar_data_pallet($data, $id) {
        // code...
        $query = $this->db->table('t_pallet');
        $query->set($data);
        $query->where('id_pallet', $id);
        return $query->update();
    }

    public function Actualizar_data_hrastreo($data, $id) {
        // code...
        $query = $this->db->table('t_rastreos');
        $query->set($data);
        $query->where('id_rastreo', $id);
        return $query->update();
    }

    public function Eliminar_data_hrastreo($data) {
        // code...
        $query = $this->db->table('t_rastreos');
        $query->where($data);
        return $query->delete();
    }

}
