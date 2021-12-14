<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Employee_aplication extends CI_Model {
    public function add_application($details){
        $this->db->insert('employees', $details);

    }
}