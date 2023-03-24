<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_models');
        if ($this->session->userdata('isLogin') == FALSE || $this->session->userdata('level') == 2) {
            redirect('auth');
        }
    }

    function index()
    {
        $this->read_product();
    }

    function read_product()
    {
        $data['products'] = $this->product_models->read_all_product();
        $this->load->view('product/Index', $data);
    }

    function create_product()
    {
        if ($this->input->post()) {
            $config['upload_path']          = './upload/products';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            } else {
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'harga_beli' => $this->input->post('harga_beli'),
                    'harga_jual' => $this->input->post('harga_jual'),
                    'satuan' => $this->input->post('satuan'),
                    'kategori' => $this->input->post('kategori'),
                    'image' => $this->upload->data('file_name')
                );
                $this->product_models->create_product($data);
                redirect('/product');
            }
        } else {
            $this->load->view('product/FormProduct');
        }
    }

    function update_product($id)
    {
        if ($this->input->post()) {
            $config['upload_path']          = './upload/products';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'harga_beli' => $this->input->post('harga_beli'),
                    'harga_jual' => $this->input->post('harga_jual'),
                    'satuan' => $this->input->post('satuan'),
                    'kategori' => $this->input->post('kategori')
                );
                $this->product_models->update_product($id, $data);
            } else {
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'harga_beli' => $this->input->post('harga_beli'),
                    'harga_jual' => $this->input->post('harga_jual'),
                    'satuan' => $this->input->post('satuan'),
                    'kategori' => $this->input->post('kategori'),
                    'image' => $this->upload->data('file_name')
                );
                $this->product_models->update_product($id, $data);
            }
            redirect('/product');
        } else {
            $data['product'] = $this->product_models->read_product_detail($id);
            $this->load->view('product/FormProductEdit', $data);
        }
    }

    function delete_product($id)
    {
        $data['product'] = $this->product_models->read_product_detail($id);
        $path = './upload/products/' . $data['product']->image;
        unlink($path);
        $this->product_models->delete_product($id);
		redirect('/product');
    }

}
