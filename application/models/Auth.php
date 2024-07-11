<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends CI_Model {
    public function cekLogin($user) 
    {
        $query = $this->db->get_where('user', $user);
        return $query->row_array();
    }

    public function cekUser($user_id) 
    {
        $query = $this->db->get_where('user', array('id' => $user_id));
        return $query->row_array();
    }




    public function getKamar() {
        $query = $this->db->get('kamar');
        return $query->result_array();
    }






    public function infoKamar($id) 
    {
        $query = $this->db->get_where('kamar_detail', array('kamar_id' => $id));
        return $query->row_array();
    }
    public function testt() 
    {
        $query = $this->db->get_where('kamar', array('id' => 1));
        return $query->row_array();
    }
    public function hargaKamar($id) 
    {
        $this->db->select('harga');
        $query = $this->db->get_where('kamar', array('id' => $id));
        return $query->row_array();
    }
    public function ketersediaan($data)
    {
        $query = $this->db->get_where('invoice', $data);
        return $query->row_array();
    }
    public function jmlhTransaksi()
    {
        return $this->db->get('invoice')->num_rows();
    }

    public function jmlhTamu()
    {
        return $this->db->get('user')->num_rows();
    }
    public function cekTamu()
    {
        return $this->db->get('user')->result_array();
    }


    public function addTamu($data)
    {
        return $this->db->insert('user', $data);
    }


    
    public function hapusUser($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
    public function getData($id)
    {
        return $this->db->get_where('user', array('id' => $id))->row_array();
    }
    public function updateData($data)
    {
        $this->db->where('id', $data['id']);
        return $this->db->update('user', $data);
    }
    public function ubahPassword($data)
    {
        $this->db->where('id', $data['id']);
        return $this->db->update('user', array('password' => $data['password']));
    }
    public function booked($data)
    {
        return $this->db->insert('invoice', $data);
    }
    public function cekRiwayat($id)
    {
        $query = $this->db->get_where('invoice', array('invoice_customer' => $id));
        return $query->result_array();
    }
    public function kamarGet($id)
    {
        $this->db->select('harga');
        return $this->db->get_where('kamar', array('id' =>$id));
    }
    public function cekInvo($id)
    {
        return $this->db->get_where('invoice', array('invoice_id' => $id))->row_array();
    }
    public function getInfo($id)
    {
        return $this->db->get_where('kamar', array('id' => $id))->row_array();
    }
    public function buktiBayar($data)
    {
        $this->db->where('invoice_id', $data['id']);
        return $this->db->update('invoice', array('invoice_bukti' => $data['bukti']));
    }
    
}
?>