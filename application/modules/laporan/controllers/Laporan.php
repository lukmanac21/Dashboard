<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends Admin_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Laporan_model', 'lm', true);
        if(!$this->auth->isSuperAdministrator()){
            access_denied();
        }
    }
    public function index(){
        $data['filter'] = TRUE;
        $this->layout->view('laporan',$data);
    }
    public function laporan_list(){
        $time  = strtotime($this->input->post('month'));
        $month = date('m',$time);
        $year  = date('Y',$time);
        $data['month'] = $this->input->post('month');
        $data['list'] = TRUE;
        $this->layout->view('laporan',$data);
    }
    public function laporan_pdf(){

    }
}
?>