<?php 
class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index() 
    {
        $this->load->view('login/index');
    }
    public function login() 
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );

        $user = $this->auth->cekLogin($data);

        if($user) {
            $data = array(
                'email' => $user['email'],
                'id' => $user['id'],
            );

            $this->session->set_userdata($data);

            redirect('home');
        } else {
            $this->session->set_flashdata('message', '<div class="alert text-danger peringatan" role="alert">
             Data yang anda masukan salah!
            </div>');

            redirect('user');
        }
    }
    private function cek() {
        $user_id = $this->session->userdata('id');

        $getData = $this->auth->cekUser($user_id);

        var_dump($getData);
        die;
    }

    public function logout() 
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id');

        $this->session->set_flashdata('message', '<div class="alert text-success peringatan" role="alert">
             Anda Sudah Logout
            </div>');

        redirect('user');
    }

    public function informasiAkun()
    {
        $user_id = $this->session->userdata('id');
        $getData = $this->auth->cekUser($user_id);

        $data = array(
            'user' => $getData,
        );

        $this->load->view('infoakun/index', $data);
    }
    public function ubahPassword() 
    {
        $user_id = $this->session->userdata('id');
        $getData = $this->auth->cekUser($user_id);

        $data = array(
            'user' => $getData,
        );

        $this->load->view('ubahpassword/index', $data);
    }
    public function actionUbah() 
    {
        $user_id = $this->session->userdata('id');

        $data = array(
            'password' => $this->input->post('password'),
            'id' => $user_id,
        );

        $this->auth->ubahPassword($data);
        
        $this->session->set_flashdata('message', '<div class="alert text-success peringatan" role="alert">
        Password berhasil diubah
        </div>');

        redirect('user/informasiAkun');
    }

    public function riwayat()
    {
        $user_id = $this->session->userdata('id');
        $data = array(
            'user' => $user_id,
            'invo' => $this->auth->cekRiwayat($user_id),
        );
        $this->load->view('invoice/index', $data);
    }

    public function infoinv($id)
    {
        $user_id = $this->session->userdata('id');
        $kamar_invoice = $this->auth->cekInvo($id);
        $harga = $this->auth->hargaKamar($kamar_invoice['invoice_kamar']);
        


        $data = array(
            'invoice' => $kamar_invoice,
            'harga' => $harga,
        );

        // var_dump($harga_kamar);
        // die;
        
        $this->load->view('invoice/cetak', $data);
    }
    public function pembayaran($id)
    {
        $data = array(
            'bukti' => $this->input->post('bukti'),
            'id' => $id,
        );

        $this->auth->buktiBayar($data);

        $this->session->set_flashdata('message', '<div class="alert alert-warning peringatan text-center ml-5 " role="alert">
             Silahkan Menunggu Konfirmasi
            </div>');

        redirect('user/riwayat');
    }
}
?>