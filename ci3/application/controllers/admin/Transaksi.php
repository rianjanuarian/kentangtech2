<?php
class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
    public function index()
    {
        $data['penjualan'] = $this->M_admin->getwhere('penjualan', ['status' => 'pending']);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/transaksi', $data);
        $this->load->view('admin/footer');
    }
}