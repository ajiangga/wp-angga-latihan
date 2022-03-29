<?php
class contoh1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Selamat Datang.... Selamat Belajar Web Programming</h1>";
        
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('contoh2');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->contoh2->jumlah($n1, $n2);

        $this->load->view('contoh3', $data);
    }
}