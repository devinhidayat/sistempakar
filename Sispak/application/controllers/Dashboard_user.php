<?php 

class Dashboard_user extends CI_Controller {

    public function __construct(){

        parent::__construct();
   
        $this->load->model('user');
    }

    public function index() {
        $data['user'] = $this->user->get_data('tbl_user')->result();
        $this->load->view('user',$data);
        // $data = $this->user->get_data('tbl_user')->result();
        // $this->load->view('user',["data"=>$data]);
    }

    public function tambah_userdata() {
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('umur','Umur','required');
        $this->form_validation->set_rules('tinggi','Tinggi','required');
        $this->form_validation->set_rules('berat','Berat','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('dm1','Diabetes Melitus Tipe 1','required');
        $this->form_validation->set_rules('dm2','Diabetes Melitus Tipe 2','required');
        $this->form_validation->set_rules('poliuria','Poliuria','required');
        $this->form_validation->set_rules('polidipsia','Polidipsia','required');
        $this->form_validation->set_rules('polifagia','Polifagia','required');

        if($this->form_validation->run() == FALSE) {
            // $this->index();
        }
        else {
            $nama           = $this->input->post('nama');
            $umur           = $this->input->post('umur');
            $tinggi         = $this->input->post('tinggi');
            $berat          = $this->input->post('berat');
            $gender         = $this->input->post('gender');
            $dm1            = $this->input->post('dm1');
            $dm2            = $this->input->post('dm2');
            $poliuria       = $this->input->post('poliuria');
            $polidipsia     = $this->input->post('polidipsia');
            $polifagia      = $this->input->post('polifagia');
        }

        $data = array(
            'nama'          => $nama,
            'umur'          => $umur,
            'tinggi'        => $tinggi,
            'berat'         => $berat,
            'gender'        => $gender,
            'dm1'           => $dm1,
            'dm2'           => $dm2,
            'poliuria'      => $poliuria,
            'polidipsia'    => $polidipsia,
            'polifagia'     => $polifagia,
            'bmi'           => $berat / $tinggi / $tinggi
        );

        $this->user->insert_data($data,'tbl_user');
        $this->index();
    }
}

?>