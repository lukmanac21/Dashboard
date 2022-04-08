<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends Admin_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Satuan_model', 'sm', true);
        if(!$this->auth->isSuperAdministrator()){
            access_denied();
        }
    }
    public function index(){
        $data['table'] = $this->sm->get_satuan();
        $data['list'] = TRUE;
        $this->layout->view('satuan',$data);
    }
    public function add_data(){
        $name = $this->input->post('name');
		$data = array(
			'name' => $name,
			'is_active' => 1	
		);
		$insert = $this->sm->insert('satuan', $data); 
		if($insert != 0){
			$this->session->set_flashdata('status', ['status' => 'success', 'msg' => 'Berhasil Tambah Data']);
		} else{
			$this->session->set_flashdata('status', ['status' => 'error', 'msg' => 'Gagal Tambah Data']);
		}

		redirect('satuan');
    }
    public function edit_data($id){
        $where = array('id' => $id);
        $data['table'] = $this->db->get_where('satuan',$where)->result();
        //echo $this->db->last_query();die();
        $data['edit'] = TRUE;
        $this->layout->view('satuan',$data);
    }
    public function update_data(){
        $id = $this->input->post('id');
        $name = $this->input->post('name');
		$data = array(
			'name' => $name,
		);
		$update = $this->sm->update('satuan', $data,array('id' => $id));
		if($update != 0){
			$this->session->set_flashdata('status', ['status' => 'success', 'msg' => 'Berhasil Edit Data']);
		} else{
			$this->session->set_flashdata('status', ['status' => 'error', 'msg' => 'Gagal Edit Data']);
		}

		redirect('satuan');
    }
    public function change_status($id){
        $id = $this->input->post('id');
		$status = $this->input->post('status');
		$data = array(
			'is_active' => $status
		);

		$update = $this->mm->update('satuan', $data, array('id' => $id)); 
		if($update != 0){
			$resp = 1;
		} else{
			$resp = 0;
		}
		echo $resp;
    }

	public function update_checkbox(){
		$check = $this->input->post('checkbox');
		$id = $this->input->post('id');
		if (isset($check)) {
			$data = array(
				'is_active' => '1'
			);
		} else {
			$data = array(
				'is_active' => '0'
			);
		}
		$update = $this->sm->update('satuan', $data, array('id' => $id)); 
		redirect('satuan');
	}
}
?>