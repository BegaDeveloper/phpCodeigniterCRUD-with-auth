<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Members extends CI_Model {
    public function get_members($data){
        $this->db->insert('member', $data);
    }
}