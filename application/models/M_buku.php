<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class M_buku extends CI_Model{


    public $table = 'buku';
	public $order = 'DESC';
	public $id = 'id';

	function __construct()
	{
		parent::__construct();
	}

    public function get_all(){
        
        return $this->db->get($this->table)->result_array();
    }

    public function save_buku($data){
        
        $this->db->insert($this->table, $data);

        return $this->db->insert_id();
    }

}