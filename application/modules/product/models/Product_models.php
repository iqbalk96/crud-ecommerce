<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product_models extends CI_Model

{
    function read_all_product()
    {
        $sql = $this->db->get('barang');
        return $sql->result();
    }

    function create_product($data)
    {
        $this->db->insert('barang', $data);
    }

    function read_product_detail($id)
    {
        $sql = $this->db->query("SELECT * FROM `barang` where id_barang = '$id' ");
        return $sql->row();
    }

    function delete_product($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }

    function update_product($id, $data)
    {
        $this->db->where('id_barang', $id);
        $this->db->update('barang', $data);
    }
}
