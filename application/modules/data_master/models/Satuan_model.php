<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Satuan_model extends MY_Model {
    
    function __construct() {
        parent::__construct();
       
    }
    function get_satuan(){
        $this->db->select('*');
        $this->db->from('satuan');
        return $this->db->get()->result();
    }
}  