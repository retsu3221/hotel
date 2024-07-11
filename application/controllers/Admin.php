<?php 

class Admin extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $data = array(
            'totalUser' => $this->auth->jmlhTamu(),
            'totalTransaksi' => $this->auth->jmlhTransaksi(),
        );

        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_sidebar');
        $this->load->view('dashboard/v_topbar');
        $this->load->view('dashboard/v_main', $data);
        $this->load->view('dashboard/v_footer');
    }
    public function dataTamu()
    {
        $data = array(
            'cekTamu' => $this->auth->cekTamu(),
        );

        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_sidebar');
        $this->load->view('dashboard/v_topbar');
        $this->load->view('dashboard/v_formTamu', $data);
        $this->load->view('dashboard/v_footer');
    }
    public function tambahTamu() 
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'jns_kelamin' => $this->input->post('jns_kelamin'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'password' => $this->input->post('password'),
        );


        $this->auth->addTamu($data);

        redirect('admin/dataTamu');    
    }
    public function hapusTamu($id)
    {
        $this->auth->hapusUser($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
             Data user telah dihapus
            </div>');

        redirect('admin/dataTamu');
    }
    public function ubahTamu($id)
    {

        $data =  array(
            'user' => $this->auth->getData($id),
        );
        
        $user = array(
            'id' => $id,
        );

        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_sidebar');
        $this->load->view('dashboard/v_topbar');
        $this->load->view('dashboard/v_ubahData', $data);
        $this->load->view('dashboard/v_footer');
    }
    public function actionUbah()
    {

        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'password' => $this->input->post('password'),
            'id' => $this->input->post('id'),
        );

        $this->auth->updateData($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
             Data user telah diubah
            </div>');

        redirect('admin/dataTamu');
    }

}



?>