<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

    function __construct()
	{
		parent::__construct();
        $this->load->model('M_buku', 'bk');
        
	}

	public function index()
	{
        $data = [
            'buku'  => $this->bk->get_all()
        ];

		$this->load->view('pinjam/form_pinjam', $data);
	}

    public function book_save(){
        
        if($this->input->post()){

            $data = [
                'name' => $this->input->post('nama'),
            ];
    
            $this->bk->save_buku($data);
            
            if($success){
                $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data');
                redirect('pinjam');
            }
        }

        $this->session->set_flashdata('pesan', 'Isi nama buku!');
    }

    public function save_pinjam(){
        
        if($this->input->post()){

        }

        
    }


}
