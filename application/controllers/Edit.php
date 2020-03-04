<?php

class Edit extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('admin') == "") {
            redirect('Admin-Home');
        }
    }

    public function state() {
        $data[''] = "";
        $wh['l_id'] = $this->uri->segment(3);
        if ($this->input->post('update')) {
            $this->form_validation->set_rules('upstate', 'state', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "State name is required", "regex_match" => "State name is invalid"));
            if ($this->form_validation->run() == true) {
                $c = $this->md->my_query("select count(*) as cn from tbl_location where label='state' AND name='" . $this->input->post('upstate') . "' and parent_id !=" . $this->uri->segment(3) . "")[0]->cn;
                if ($c == 0) {
                    $data1['name'] = $this->input->post('upstate');
                    $result = $this->md->my_update('tbl_location', $data1, $wh);
                    if ($result == 1) {
                        redirect('Manage-State');
                    }
                } else {
                    $data['error'] = $this->input->post('upstate') . " is already exist";
                }
            }
        }

        $data['statedt'] = $this->md->my_select('tbl_location', $wh);
        $data['statedata'] = $this->md->my_select('tbl_location', array('label' => 'state'));
        $this->load->view('admin/state', $data);
    }

    public function city() {
        $data[''] = "";

        $wh['l_id'] = $this->uri->segment(3);
        if ($this->input->post('update')) {


            $this->form_validation->set_rules('upstate', 'state', 'required', array("required" => "State name is required"));
            $this->form_validation->set_rules('upcity', 'city', 'required', array("required" => "City name is required"));

            if ($this->form_validation->run() == true) {

                $c = $this->md->my_query("select count(*) as cn from tbl_location where label='city' AND name='" . $this->input->post('upcity') . "' AND parent_id !=" . $this->uri->segment(3) . "")[0]->cn;

                if ($c == 0) {
                    $data1['name'] = $this->input->post('upcity');
                    $data1['parent_id'] = $this->input->post('upstate');

                    $result = $this->md->my_update('tbl_location', $data1, $wh);
                    if ($result == 1) {
                        redirect('Manage-City');
                    }
                } else {
                    $data['error'] = $this->input->post('upcity') . " is already exist";
                }
            }
        }
        $data['updatecity'] = $this->md->my_select('tbl_location', $wh);
        $data['statedata'] = $this->md->my_select('tbl_location', array('label' => 'state'));
        $data['citydata'] = $this->md->my_select('tbl_location', array('label' => 'city'));
        $this->load->view('admin/city', $data);
    }

    public function category() {
        $dt[''] = "";
        $wh['category_id'] = $this->uri->segment(3);
        if ($this->input->post('update')) {
            $this->form_validation->set_rules('upcategory', 'Category', 'required', array("required" => "Category name is required"));
            $this->form_validation->set_rules('updescription', 'Description', 'required', array("required" => "Description is required"));

            if ($this->form_validation->run() == true) {

                $c = $this->md->my_query("select count(*) as cn from tbl_election_category where  category='" . $this->input->post('upcategory') . "' and category_id!=" . $this->uri->segment(3) . "")[0]->cn;


                if ($c == 0) {
                    $data1['category'] = $this->input->post('upcategory');
                    $data1['description'] = $this->input->post('updescription');

                    $result = $this->md->my_update('tbl_election_category', $data1, $wh);
                    if ($result == 1) {
                        redirect('Manage-Category');
                    }
                } else {
                    $dt['error'] = $this->input->post('upcategory') . " is already exist";
                }
            }
        }
        $dt['category'] = $this->md->my_select('tbl_election_category');
        $dt['categorydata'] = $this->md->my_select('tbl_election_category', $wh);
        $this->load->view('admin/category', $dt);
    }

    public function area() {
        $dt[''] = "";
        $wh['l_id'] = $this->uri->segment(3);
        if ($this->input->post('update')) {

            $this->form_validation->set_rules('upstate', 'state', 'required', array("required" => "State name is required"));
            $this->form_validation->set_rules('upcity', 'city', 'required', array("required" => "City name is required"));
            $this->form_validation->set_rules('uparea', 'Area', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "Area name is required", "regex_match" => "Area name is invalid"));
            if ($this->form_validation->run() == true) {
                $c = $this->md->my_query("select count(*) as cn from tbl_location where label='area' AND name='" . $this->input->post('uparea') . "' and parent_id!=" . $this->uri->segment(3) . "")[0]->cn;

                if ($c == 0) {

                    $data['name'] = $this->input->post('uparea');
                    $data['parent_id'] = $this->input->post('upcity');
                    $result = $this->md->my_update("tbl_location", $data, $wh);

                    if ($result == 1) {
                        redirect('Manage-Area');
                    }
                } else {
                    $dt['error'] = $this->input->post('uparea') . " is already exist";
                }
            }
        }
        $dt['updatearea'] = $this->md->my_select('tbl_location', $wh);
        $dt['city'] = $this->md->my_select('tbl_location', array('l_id' => $dt['updatearea'][0]->parent_id));
        $dt['statedata'] = $this->md->my_select('tbl_location', array('l_id' => $dt['city'][0]->parent_id));
        $dt['state'] = $this->md->my_select('tbl_location', array('label' => 'state'));
        $dt['area'] = $this->md->my_select('tbl_location', array('label' => 'area'));

        $this->load->view('admin/area', $dt);
    }

}
