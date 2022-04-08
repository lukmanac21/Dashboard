<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends Admin_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('General_model', 'gm', true);
        if(!$this->auth->isSuperAdministrator()){
        	access_denied();
        }
        
    }

	public function index()
	{	
		$data['settings'] = $this->gm->get_settings();
		$this->layout->view('general', $data);
	}

	public function load_edit($id){
		$data = array('id' => $id);
        $query = $this->gm->get_single('settings', $data);
        echo json_encode($query);
    }

	public function add_data(){
		$title = $this->input->post('title');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$telepon = $this->input->post('telepon');
		$alamat = $this->input->post('alamat');
		$kodepos = $this->input->post('kodepos');
		$youtube = $this->input->post('youtube');
		$whatsapp = $this->input->post('whatsapp');
		$instagram = $this->input->post('instagram');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		$footer = $this->input->post('footer');

		$data = array(
			'name' => $name,
			'email' => $email,
			'phone' => $telepon,
			'address' => $alamat,
			'zip' => $kodepos,
			'youtube' => $youtube,
			'whatsapp' => $whatsapp,
			'instagram' => $instagram,
			'footer' => $footer,
			'site_title' => $title,
			'latitude' => $latitude,
			'longitude' => $longitude
			
		);

		$check = $this->gm->check_data('settings');
		if($check == 0){
			$data['created_at'] = date('Y-m-d H:i:s');
			$insert = $this->gm->insert('settings', $data); 
			if($insert != 0){
				$this->session->set_flashdata('status', ['status' => 'success', 'msg' => 'Berhasil Tambah Data']);
			} else{
				$this->session->set_flashdata('status', ['status' => 'error', 'msg' => 'Gagal Tambah Data']);
			}
		}else{
			$data['updated_at'] = date('Y-m-d H:i:s');
			$insert = $this->gm->update('settings', $data, array('id' => 0)); 
			if($insert != 0){
				$this->session->set_flashdata('status', ['status' => 'success', 'msg' => 'Berhasil Edit General']);
			} else{
				$this->session->set_flashdata('status', ['status' => 'error', 'msg' => 'Gagal Edit General']);
			}
		}		

		redirect('general');
	}

	public function general_logo(){
		if($_FILES['logo_images']['name'] != null){
			$prev_data = $this->gm->get_single('settings', array('id' => 0));
			$prev_logo = $prev_data->logo;
            $upload = $this->upload_file('logo_images');
            if($upload == false){
                $image = null;
            }else{
                $image = $upload;
            }
            $data['logo'] = $image;
            $data['updated_at'] = date('Y-m-d');
			$insert = $this->gm->update('settings', $data, array('id' => 0)); 
			if($insert != 0){
				if(!empty($prev_logo)){
					unlink('files/system/'.$prev_logo);
				}
				$this->session->set_flashdata('status', ['status' => 'success', 'msg' => 'Berhasil Ganti Logo']);
			} else{
				$this->session->set_flashdata('status', ['status' => 'error', 'msg' => 'Gagal Ganti Logo']);
			}
			redirect('general');
        }
	}

	public function general_favicon(){
		if($_FILES['favicon_images']['name'] != null){
			$prev_data = $this->gm->get_single('settings', array('id' => 0));
			$prev_app_logo = $prev_data->app_logo;
            $upload = $this->upload_file('favicon_images');
            if($upload == false){
                $image = null;
            }else{
                $image = $upload;
            }
            $data['app_logo'] = $image;
            $data['updated_at'] = date('Y-m-d');
			$insert = $this->gm->update('settings', $data, array('id' => 0)); 
			if($insert != 0){
				if(!empty($prev_app_logo)){
					unlink('files/system/'.$prev_app_logo);
				}
				$this->session->set_flashdata('status', ['status' => 'success', 'msg' => 'Berhasil Ganti Favicon']);
			} else{
				$this->session->set_flashdata('status', ['status' => 'error', 'msg' => 'Gagal Ganti Favicon']);
			}
			redirect('general');
        }
	}

	public function upload_file($param){
        
        $nama_file = time().'_'.$_FILES[$param]['name'];
        $konversi_nama = str_replace(" ","_", $nama_file);
        $config['upload_path'] = ('./files/system/');
        
        $config['allowed_types'] = 'jpg|jpeg|png|ico'; 
        $config['overwrite'] = FALSE;
        $config['max_size'] = 10240000; 
        $config['file_name'] = $konversi_nama; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload($param)){
            return $konversi_nama;
        }else{
            return false;
        }
    }
}
