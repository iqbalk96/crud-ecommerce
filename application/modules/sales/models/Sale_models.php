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

    // function deleteSlider($id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->delete('tb_slider_home');
    // }

    // function loadSliderById($id)
    // {
    //     $sql = $this->db->query("SELECT * FROM `tb_slider_home` where id = '$id' ");
    //     return $sql->row();
    // }

    // function updateSlider($id, $data)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->update('tb_slider_home', $data);
    // }
}
