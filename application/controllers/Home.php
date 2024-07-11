<?php
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index() {

        $user_id = $this->session->userdata('id');
        if($this->session->userdata('dari') and $this->session->userdata('sampai')){
            $this->session->unset_userdata('dari');
            $this->session->unset_userdata('sampai');
        }

        $data = array(
            'title' => "Royale Hotel",
            'user' => $this->auth->cekUser($user_id),
        );


        
        $this->load->view('hotel/index', $data);
    }

    public function kamar() {
        $user_id = $this->session->userdata('id');
        if($this->session->userdata('dari') and $this->session->userdata('sampai')){
            $this->session->unset_userdata('dari');
            $this->session->unset_userdata('sampai');
        }

        $data = array(
            'user' => $this->auth->cekUser($user_id),
            'infoKamar' => $this->auth->getKamar(),
        );

        $this->load->view('kamar/index', $data);
    }
    
    public function bookingKamar($id)
    {
        $user_id = $this->session->userdata('id');
        
        if($user_id)
        {
            $sedia = $this->session->userdata('dari');
            $sedia2 = $this->session->userdata('sampai');

            $data = array(
                'user' => $this->auth->cekUser($user_id),
                'kamar' => $this->auth->infoKamar($id),
                'harga' => $this->auth->hargaKamar($id),
                'dari' => $sedia,
                'sampai' => $sedia2,
            );
            
            $this->load->view('dpesanan/index', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert text-success peringatan" role="alert">
             Silahkan login terlebih dahulu
            </div>');
            redirect('user');
        }
    }
    private function test() {
        $coba = $this->auth->testt();
        
        $data = array(
            'harga' => $this->auth->testt(),
        );
        $this->load->view('test', $data);
    }

    public function cekKetersediaan($id)
    {
        $data = array(
            'invoice_dari' => $this->input->post('dari'),
            'invoice_sampai' => $this->input->post('sampai'),
        );

        

        $cek = $this->auth->ketersediaan($data);

        if(!$cek)
        {
            $data = array(
                'dari' => $this->input->post('dari'),
                'sampai' => $this->input->post('sampai'),
            );
            $this->session->set_userdata($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success peringatan text-center " role="alert">
             Kamar Tersedia!
            </div>');
            $this->bookingKamar($id); 
        } else {

        }
    } 
    public function kembali($id)
    {
        $this->session->unset_userdata('dari');
        $this->session->unset_userdata('sampai');
        $this->bookingKamar($id);
    }
    public function nextBooking($id)
    {
        $user_id = $this->session->userdata('id');
        $data = array(
            'user' => $this->auth->cekUser($user_id),
            'kamar' => $this->auth->infoKamar($id),
            'harga' => $this->auth->hargaKamar($id),
            'dari' => $this->input->post('dari'),
            'sampai' => $this->input->post('sampai'),
            'invoice_harga' => $this->auth->hargaKamar($id),
        );

        $this->load->view('checkout/index', $data);
    }
    public function invoice($id)
    {
        $cekKamar = $this->auth->infoKamar($id);
        $infoKamar = $this->auth->getInfo($cekKamar['id']);
        $hargaKamar = $this->auth->hargaKamar($id);
        $user = $this->auth->cekUser($this->session->userdata('id'));
        $namaTamu = $this->input->post('invoice_nama');
        $noTelp = $this->input->post('invoice_hp');
        $from = $this->input->post('dari');
        $until = $this->input->post('sampai');
        $now = date('Y-m-d');

        // var_dump($cekKamar);
        // die;

        

        $data = array(
            'invoice_tanggal' => $now,
            'invoice_customer' => $this->session->userdata('id'),
            'invoice_nama' => $namaTamu,
            'invoice_hp' => $noTelp,
            'invoice_kamar' => $cekKamar['id'],
            'invoice_status' => '1',
            'invoice_dari' => $from,
            'invoice_sampai' => $until,
            'invoice_nama_kamar' => $infoKamar['nama_kamar'],
            'img' => $infoKamar['img'],
            // 'invoice_harga' => $hargaKamar,
        );

        
        $this->auth->booked($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success peringatan text-center ml-5 " role="alert">
             Silahkan Melanjutkan Pembayaran!
            </div>');

        redirect("user/riwayat");
    }
}
?>