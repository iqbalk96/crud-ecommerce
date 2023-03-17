<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('isLogin') == FALSE || $this->session->userdata('level') == 2) {
            redirect('auth');
        }
    }

    function index()
    {
        // $this->read_product();
        echo 'Sales Page';
    }

    // function read_product()
    // {
    //     $data['products'] = $this->product_models->read_all_product();
    //     $this->load->view('product/Index', $data);
    // }

    // function create_product()
    // {
    //     if ($this->input->post()) {
    //         $config['upload_path']          = './upload/products';
    //         $config['allowed_types']        = 'gif|jpg|png|jpeg';
    //         $config['max_size']             = 10000;
    //         $config['max_width']            = 10000;
    //         $config['max_height']           = 10000;
    //         $this->load->library('upload', $config);
    //         if (!$this->upload->do_upload('image')) {
    //             $error = array('error' => $this->upload->display_errors());
    //             var_dump($error);
    //         } else {
    //             $data = array(
    //                 'nama' => $this->input->post('nama'),
    //                 'harga_beli' => $this->input->post('harga_beli'),
    //                 'harga_jual' => $this->input->post('harga_jual'),
    //                 'satuan' => $this->input->post('satuan'),
    //                 'kategori' => $this->input->post('kategori'),
    //                 'image' => $this->upload->data('file_name')
    //             );
    //             $this->product_models->create_product($data);
    //             redirect('product');
    //         }
    //     } else {
    //         $this->load->view('product/FormProduct');
    //     }
    // }

}