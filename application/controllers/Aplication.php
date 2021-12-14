<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Aplication extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_aplication');
    }

    public function add_emp(){
        $this->load->view('admin/add_job');
    }

    public function fill_details(){
        if($this->input->post('add_ap')){
            $f_name = $this->input->post('f_name');
            $l_name = $this->input->post('l_name');
            $position = $this->input->post('position');
            $salary = $this->input->post('salary');

            $emp_data = array(
                'f_name' => $f_name,
                'l_name' => $l_name,
                'position' => $position,
                'salary' => $salary
            );

            $this->Employee_aplication->add_application($emp_data);
            redirect('aplication/add_emp', 'refresh');

        } else{
            echo "Not working";
        }
    }

    /////// List of employees
    public function list_emp(){
        $this->load->view('admin/list');
    }


    //Update employees
    public function update_emp($id){
        $this->load->view('admin/update_emp', $id);
    }

    public function update_process($id){
        if($this->input->post('update_emp')){
            $f_name = $this->input->post('f_name');
            $l_name = $this->input->post('l_name');
            $position = $this->input->post('position');
            $salary = $this->input->post('salary');

            $update_details = array(
                'f_name' => $f_name,
                'l_name' => $l_name,
                'position' => $position,
                'salary' => $salary
            );

            $this->db->where('id', $id);
            $this->db->update('employees', $update_details);
            redirect('admin/list', 'refresh');
        }
    }

    //Delete
    public function delete_job($id){
        $this->db->where('id', $id);
        $this->db->delete('employees');
        redirect('admin', 'refresh');
    }



}