<?php

class Authorize extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }

    public function logout() {
        $wh['admin_login_id'] = $this->session->userdata('admin');
        $data['last_login'] = $this->session->userdata('lastlogin');
        $this->md->my_update('tbl_admin_login', $data, $wh);
        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('lastlogin');
        redirect('Admin-Home');
    }

    public function security() {
        if ($this->session->userdata('admin') == "") {
            redirect('Admin-Home');
        }
    }

    public function index() {
//        echo $this->encryption->decrypt('15170e1d04e9a4e8fcc382f3e46529ac0a35b115f7554dd62471d1a947b26ff6e236686e9606b2ad9120301a0dd41a18b23d00616d45a2c2e2564d3e7e600b6f9PWQ3AswgGRNw6IOmh+beMQLStzNYqrjCtI2pRfLDHM=');
//        die;
        $msg[''] = '';
        if ($this->input->post('login')) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/]', array("required" => "Email Is Required", "regex_match" => "Enter Valid Email Address", "valid_email" => "Invalid Email"));
            $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^([A-Za-z0-9_])+$/]|min_length[8]', array("required" => "Password Is Required", "regex_match" => "Invalid Password", "min_length" => "Password Minimum Length 8 Character"));

            if ($this->form_validation->run() == true) {

                $email = $this->input->post('email');
                $data = $this->md->my_query("select * from tbl_admin_login where email='" . $email . "'");
                $c = count($data);
                if ($c == 1) {
                    $ops = $this->encryption->decrypt($data[0]->password);
                    $ps = $this->input->post('password');
                    if ($ps == $ops) {
                        if ($this->input->post('svp')) {
                            $sec = 60 * 60 * 24 * 365;
                            set_cookie("admin_email", $email, $sec);
                            set_cookie("admin_password", $ops, $sec);
                        } else {
                            if (get_cookie('admin_email')) {
                                delete_cookie('admin_email');
                                delete_cookie('admin_password');
                            }
                        }

                        $this->session->set_userdata('admin', $data[0]->admin_login_id);
                        $this->session->set_userdata('lastlogin', date('Y-m-d h:i:s'));
                        redirect('Admin-Dashboard');
                    } else {
                        $msg['error'] = ' Try Again';
                    }
                } else {
                    $msg['error'] = ' Try Again';
                }
            }
        }
        $this->load->view('admin/index', $msg);
    }

    public function viewparty() {
        $this->load->view('admin/viewparty');
    }

    public function dashboard() {
        $this->security();
        $dt[''] = '';
        $dt['contact'] = $this->md->my_query("select count(c_id) as count from tbl_contact");
        $dt['email'] = $this->md->my_query("select count(es_id) as count from tbl_email_subscriber");
        $dt['feedback'] = $this->md->my_query("select count(f_id) as count from tbl_feedback");
        $dt['news'] = $this->md->my_query("select count(news_id) as count from tbl_news");
        $dt['state'] = $this->md->my_query("select count(l_id) as count from tbl_location where label='state'");
        $dt['city'] = $this->md->my_query("select count(l_id) as count from tbl_location where label='city'");
        $dt['area'] = $this->md->my_query("select count(l_id) as count from tbl_location where label='area'");
        $dt['landmark'] = $this->md->my_query("select count(l_id) as count from tbl_location where label='landmark'");
        $dt['vregistration'] = $this->md->my_query("select count(voter_id) as count from tbl_voter_registration");
        $dt['partyreg'] = $this->md->my_query("select count(party_id) as count from tbl_party_registration");
        $this->load->view('admin/dashboard', $dt);
    }

    public function manageparty() {
        $this->security();
        $msg['partydata'] = $this->md->my_select('tbl_party_registration');
        $this->load->view('admin/manageparty', $msg);
    }

    public function managevoter() {
        $this->security();
        $msg['voterdata'] = $this->md->my_select('tbl_voter_registration');
        $this->load->view('admin/managevoter', $msg);
    }

    public function contact() {
        $this->security();
        $msg['contactdata'] = $this->md->my_select('tbl_contact');
        $this->load->view('admin/contact', $msg);
    }

    public function feedback() {
        $this->security();
        $msg['feedbackdata'] = $this->md->my_select('tbl_feedback');
        $this->load->view('admin/feedback', $msg);
    }

    public function area() {
        $this->security();
        $dt[''] = "";
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('state', 'state', 'required', array("required" => "State Name Is Required"));
            $this->form_validation->set_rules('city', 'city', 'required', array("required" => "City Name Is Required"));
            $this->form_validation->set_rules('area', 'Area', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "Area Name Is Required", "regex_match" => "Area Name Is Invalid"));
            if ($this->form_validation->run() == true) {
                $c = $this->md->my_query("select count(*) as cn from tbl_location where label='area' AND parent_id='" . $this->input->post('city') . "' AND name='" . $this->input->post('area') . "'")[0]->cn;
                if ($c == 0) {

                    $data['name'] = $this->input->post('area');
                    $data['parent_id'] = $this->input->post('city');
                    $data['label'] = 'area';
                    $result = $this->md->my_insert("tbl_location", $data);
                    if ($result == 1) {
                        $dt['success'] = $this->input->post('area') . " Added Successfully";
                    } else {
                        $dt['error'] = $this->input->post('area') . " Is Wrong";
                    }
                } else {

                    $dt['error'] = $this->input->post('area') . " Is Already Exist";
                }
            }
        }


        $dt['state'] = $this->md->my_select('tbl_location', array('label' => 'state'));
        $dt['city'] = $this->md->my_select('tbl_location', array('label' => 'city'));
        $dt['area'] = $this->md->my_select('tbl_location', array('label' => 'area'));

        $this->load->view('admin/area', $dt);
    }

    public function city() {
        $this->security();
        $dt[''] = "";

        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('state', 'state', 'required', array("required" => "State Name Is Required"));
            $this->form_validation->set_rules('city', 'city', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "City Name Is Required", "regex_match" => "City Name Is Invalid"));
            if ($this->form_validation->run() == true) {
                $c = $this->md->my_query("select count(*) as cn from tbl_location where label='city' AND parent_id='" . $this->input->post('state') . "' AND name='" . $this->input->post('city') . "'")[0]->cn;

                if ($c == 0) {

                    $data['name'] = $this->input->post('city');
                    $data['parent_id'] = $this->input->post('state');
                    $data['label'] = "city";
                    $result = $this->md->my_insert("tbl_location", $data);
                    if ($result == 1) {
                        $dt['success'] = $this->input->post('city') . " Added Successfully";
                    } else {
                        $dt['error'] = $this->input->post('city') . " Is Wrong";
                    }
                } else {
                    $dt['error'] = $this->input->post('city') . " Is Already Exist";
                }
            }
        }

        $dt['statedata'] = $this->md->my_select('tbl_location', array('label' => 'state'));
        $dt['citydata'] = $this->md->my_select('tbl_location', array('label' => 'city'));
        $this->load->view('admin/city', $dt);
    }

    public function state() {
        $this->security();
        $dt[''] = "";
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('state', 'state', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "State Name Is Required", "regex_match" => "State Name Is Invalid"));


            if ($this->form_validation->run() == true) {
                $c = $this->md->my_query("select count(*) as cn from tbl_location where label='state' AND name='" . $this->input->post('state') . "'")[0]->cn;
                if ($c == 0) {
                    $data['l_id'] = 0;
                    $data['name'] = $this->input->post('state');
                    $data['parent_id'] = 0;
                    $data['label'] = "state";
                    $result = $this->md->my_insert("tbl_location", $data);
                    if ($result == 1) {
                        $dt['success'] = $this->input->post('state') . " Added Successfully";
                    } else {
                        $dt['error'] = $this->input->post('state') . " Is Wrong";
                    }
                } else {
                    $dt['error'] = $this->input->post('state') . " Is Already Exist";
                }
            }
        }
        $dt['statedata'] = $this->md->my_select('tbl_location', array('label' => 'state'));

        $this->load->view('admin/state', $dt);
    }

    public function landmark() {
        $this->security();
        $dt[''] = "";
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('state', 'state', 'required', array("required" => "State Name Is Required"));
            $this->form_validation->set_rules('city', 'city', 'required', array("required" => "City Name Is Required"));
            $this->form_validation->set_rules('area', 'Area', 'required', array("required" => "Area Name Is Required"));
            $this->form_validation->set_rules('landmark', 'Landmark', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "Landmark Name Is Required", "regex_match" => "Landmark Name Is Invalid"));
            if ($this->form_validation->run() == true) {
                $c = $this->md->my_query("select count(*) as cn from tbl_location where label='landmark' AND parent_id='" . $this->input->post('area') . "' AND name='" . $this->input->post('landmark') . "'")[0]->cn;

                if ($c == 0) {

                    $data['name'] = $this->input->post('landmark');
                    $data['parent_id'] = $this->input->post('area');
                    $data['label'] = 'landmark';
                    $result = $this->md->my_insert("tbl_location", $data);
                    if ($result == 1) {
                        $dt['success'] = $this->input->post('landmark') . " Added Successfully";
                    } else {
                        $dt['error'] = $this->input->post('landmark') . " Is Wrong";
                    }
                } else {
                    $dt['error'] = $this->input->post('landmark') . " Is Already Exist";
                }
            }
        }
        $dt['state'] = $this->md->my_select('tbl_location', array('label' => 'state'));
        $dt['city'] = $this->md->my_select('tbl_location', array('label' => 'city'));
        $dt['area'] = $this->md->my_select('tbl_location', array('label' => 'area'));

        $dt['landmark'] = $this->md->my_select('tbl_location', array('label' => 'landmark'));

        $this->load->view('admin/landmark', $dt);
    }

    public function forgotpassword() {
        $dt[''] = '';
        if ($this->input->post('sendnow')) {
            $this->form_validation->set_rules('email', 'email', 'required', array("required" => "Email Is Required"));
            if ($this->form_validation->run() == true) {
                $query = $this->md->my_query("select count(*) as cn, password,email from tbl_admin_login where email='" . $this->input->post('email') . "'");

                if ($query[0]->cn == 1) {

                    $password = $this->encryption->decrypt($query[0]->password);
                    $email = $query[0]->email;
                    $msg = "MyGovrn Account Password is : " . $password;
                    $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.googlemail.com',
                        'smtp_user' => 'mygovrn@gmail.com',
                        'smtp_pass' => 'mygovrnmygovrn',
                        'smtp_port' => 465,
                        'mailtype' => 'html',
                        'smtp_timeout' => '4',
                        'crlf' => "\r\n",
                        'newline' => "\r\n"
                    );
                    $this->load->library('email', $config);
                    $this->email->from('mygovrn@gmail.com', 'MYGovrn');
                    $this->email->to($email);
                    $this->email->message($msg);

                    $this->email->send();
                } else {
                    $dt['error'] = "Invalid Email Address";
                }
            }
        }

        $this->load->view('admin/forgotpassword', $dt);
    }

    public function emailsubscriber() {
        $this->security();
        $dt[''] = '';
        if ($this->input->post('send')) {

            $this->form_validation->set_rules('subject', 'subject', 'required');
            $this->form_validation->set_rules('msg', 'Message', 'required');

            if ($this->form_validation->run() == true) {

                $subject = $this->input->post('subject');
                $msg = $this->input->post('msg');
                $receiver = $this->input->post('receiver');
                for ($i = 0; $i < count($receiver); $i++) {



                    $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.googlemail.com',
                        'smtp_user' => 'mygovrn@gmail.com',
                        'smtp_pass' => 'mygovrnmygovrn',
                        'smtp_port' => 465,
                        'mailtype' => 'html',
                        'smtp_timeout' => '4',
                        'crlf' => "\r\n",
                        'newline' => "\r\n"
                    );
                    $this->load->library('email', $config);

                    $this->email->from('mygovrn@gmail.com', 'MYGovrn');
                    $this->email->to($receiver[$i]);

                    $this->email->subject($subject);
                    $this->email->message($msg);

                    if ($this->email->send()) {
                        $dt['success'] = "Yeah, Mail Sending Successfully";
                    } else {
                        $dt['error'] = $this->email->print_debugger();
                    }
                }
            }
        }
        $dt['emailsubscriber'] = $this->md->my_select('tbl_email_subscriber');
        $this->load->view('admin/emailsubscriber', $dt);
    }

    public function news() {
        $this->security();
        $msg[''] = '';
        if ($this->input->post('submit')) {
            $config['upload_path'] = './news/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 2048;

            $mx = $this->md->my_query("select max(news_id) as mx from tbl_news")[0]->mx;
            if ($mx != "") {
                $config['file_name'] = "photo_" . $mx;
            } else {
                $config['file_name'] = "photo_0";
            }

            $config['overwrite'] = TRUE;
            $result = $this->md->my_file($config, 'news');
            $this->form_validation->set_rules('title', 'Title', 'required', array("required" => "Title Is Required"));
            $this->form_validation->set_rules('description', 'Description', 'required', array("required" => "News Is Required"));
            if ($this->form_validation->run() == true) {
                if (in_array("file_name", $result)) {
                    $dbpath = "news/" . $result['file_name'];

                    $dt['news_id'] = 0;
                    $dt['name'] = $this->input->post('title');
                    $dt['news'] = $this->input->post('description');
                    $dt['news_path'] = $dbpath;
                    $dt['date'] = date('d-M-Y');

                    $result = $this->md->my_insert("tbl_news", $dt);
                    if ($result == 1) {
                        $msg['success'] = "News Added Successfully";
                    }
                } else {
                    $msg['error'] = $this->upload->display_errors();
                }
            }
        }
        $msg['news'] = $this->md->my_select('tbl_news');

        $this->load->view('admin/news', $msg);
    }

    public function changepassword() {
        $this->security();
        $msg[''] = "";
        if ($this->input->post('changepwd')) {
            if ($this->input->post('cpwd') != "") {
                $data = $this->md->my_select('tbl_admin_login', array('admin_login_id' => $this->session->userdata('admin')));
                $op = $this->encryption->decrypt($data[0]->password);
                if ($this->input->post('cpwd') == $op) {
                    $this->form_validation->set_rules('npwd', 'New password', 'required|min_length[8]|max_length[16]', array("required" => "New Password Is Required", "min_length" => "Only Allowed 8 to 16 Character", "max_length" => "Only Allowed 8 to 16 Character"));
                    $this->form_validation->set_rules('rpwd', 'Retype password', 'required|matches[npwd]', array("required" => "Retype Password is required", "matches" => "New Password  And Retype Password Does Not Match"));
                    if ($this->form_validation->run() == true) {
                        $wh['admin_login_id'] = $this->session->userdata('admin');
                        $ndt['password'] = $this->encryption->encrypt($this->input->post('npwd'));
                        $result = $this->md->my_update('tbl_admin_login', $ndt, $wh);
                        if ($result == 1) {
                            $msg['success'] = ' Password Change Successfully';
                        }
                    }
                } else {
                    $msg['error'] = ' Current Password Is Wrong';
                }
            } else {
                $msg['error'] = 'Current Password Is Required';
            }
        }

        $this->load->view('admin/changepassword', $msg);
    }

    public function banner() {
        $this->security();
        $msg[''] = '';
        if ($this->input->post('submit')) {
            $config['upload_path'] = './banner/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 2048;

            $mx = $this->md->my_query("select max(b_id) as mx from tbl_banner")[0]->mx;
            if ($mx != "") {
                $config['file_name'] = "photo_" . $mx;
            } else {
                $config['file_name'] = "photo_0";
            }

            $config['overwrite'] = TRUE;
            $result = $this->md->my_file($config, 'banner');
            $this->form_validation->set_rules('title', 'title', 'required', array("required" => "Title Is Required"));
            $this->form_validation->set_rules('description', 'Description', 'required', array("required" => "Description Is Required"));
            if ($this->form_validation->run() == true) {
                if (in_array("file_name", $result)) {
                    $dbpath = "banner/" . $result['file_name'];

                    $dt['b_id'] = 0;
                    $dt['banner_path'] = $dbpath;
                    $dt['title'] = $this->input->post('title');
                    $dt['description'] = $this->input->post('description');
                    $result = $this->md->my_insert("tbl_banner", $dt);
                    if ($result == 1) {
                        $msg['success'] = "Banner Added Successfully";
                    }
                } else {
                    $msg['error'] = $this->upload->display_errors();
                }
            }
        }
        $msg['banner'] = $this->md->my_select('tbl_banner');
        $this->load->view('admin/banner', $msg);
    }

    public function category() {
        $this->security();
        $dt[''] = "";
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('category', 'Category', 'required', array("required" => "Category Name Is Required"));
            $this->form_validation->set_rules('description', 'Description', 'required', array("required" => "Description Is Required"));


            if ($this->form_validation->run() == true) {
                $c = $this->md->my_query("select count(*) as cn from tbl_election_category where category='" . $this->input->post('category') . "'")[0]->cn;

                if ($c == 0) {

                    $data['category_id'] = 0;
                    $data['category'] = $this->input->post('category');
                    $data['description'] = $this->input->post('description');
                    $result = $this->md->my_insert("tbl_election_category", $data);
                    if ($result == 1) {
                        $dt['success'] = $this->input->post('category') . " Added Successfully";
                    } else {
                        $dt['error'] = $this->input->post('category') . " Is Wrong";
                    }
                } else {
                    $dt['error'] = $this->input->post('category') . " Is Already Exist";
                }
            }
        }
        $dt['category'] = $this->md->my_select('tbl_election_category');
        $this->load->view('admin/category', $dt);
    }

    public function delete() {
        $this->security();
        $action = $this->uri->segment(2);
        $id = $this->uri->segment(3);
        if ($action == "state") {

            $wh['l_id'] = $id;
            $wh1['parent_id'] = $wh['l_id'];
            $q = $this->md->my_query("select l_id from tbl_location where parent_id=" . $wh1['parent_id']);
            foreach ($q as $query) {

                $wh3['parent_id'] = $query->l_id;
                $q1 = $this->md->my_query("select l_id from tbl_location where parent_id=" . $wh3['parent_id']);
                foreach ($q1 as $query) {
                    $wh4['parent_id'] = $query->l_id;
                    $this->md->my_delete('tbl_location', $wh4);
                }
                $this->md->my_delete('tbl_location', $wh3);
            }
            $this->md->my_delete('tbl_location', $wh);
            $this->md->my_delete('tbl_location', $wh1);
            redirect('Manage-State');
        } else if ($action == "city") {

            $wh['l_id'] = $id;
            $wh1['parent_id'] = $wh['l_id'];
            $q = $this->md->my_query("select l_id from tbl_location where parent_id=" . $wh1['parent_id']);
            foreach ($q as $query) {

                $wh3['parent_id'] = $query->l_id;
                $this->md->my_delete('tbl_location', $wh3);
            }
            $this->md->my_delete('tbl_location', $wh);
            $this->md->my_delete('tbl_location', $wh1);
            redirect('Manage-City');
        } else if ($action == "area") {
            $wh['l_id'] = $id;
            $this->md->my_delete('tbl_location', $wh);
            $wh1['parent_id'] = $wh['l_id'];
            $this->md->my_delete('tbl_location', $wh1);
            redirect('Manage-Area');
        } else if ($action == "landmark") {

            $wh['l_id'] = $id;
            $this->md->my_delete('tbl_location', $wh);
            redirect('Manage-Landmark');
        } else if ($action == "contact") {

            $wh['c_id'] = $id;
            $this->md->my_delete('tbl_contact', $wh);
            redirect('Manage-Contact-Us');
        } else if ($action == "feedback") {

            $wh['f_id'] = $id;
            $this->md->my_delete('tbl_feedback', $wh);
            redirect('Manage-Feedback');
        } else if ($action == "category") {

            $wh['category_id'] = $id;
            $this->md->my_delete('tbl_election_category', $wh);
            $wh1['category_id'] = $wh['category_id'];
            $this->md->my_delete('tbl_schedule', $wh1);
            redirect('Manage-Category');
        } else if ($action == "emailsubscriber") {

            $wh['es_id'] = $id;
            $this->md->my_delete('tbl_email_subscriber', $wh);
            redirect('Manage-Email-Subscriber');
        } else if ($action == "banner") {

            $data = $this->md->my_select('tbl_banner', array("b_id" => $id));
            unlink("./", $data[0]->banner_path);
            $wh['b_id'] = $id;
            $this->md->my_delete('tbl_banner', $wh);
            redirect('Manage-Banner');
        } else if ($action == "news") {
            $data = $this->md->my_select('tbl_news', array("news_id" => $id));
            unlink("./", $data[0]->news_path);
            $wh['news_id'] = $id;
            $this->md->my_delete('tbl_news', $wh);
            redirect('Manage-News');
        } else if ($action == "manageschedule") {
            $wh['s_id'] = $id;
            $this->md->my_delete('tbl_schedule', $wh);
            redirect('Manage-Schedule');
        }
    }

    public function viewproof() {
        $this->security();

        $this->load->view('admin/viewproof');
    }

public function manageschedule() {
        $this->security();
        $dt[''] = "";
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('category', 'category', 'required', array("required" => "Category Name Is Required"));
            $this->form_validation->set_rules('date', 'date', 'required', array("required" => "Date Is Required"));
            $this->form_validation->set_rules('state', 'state', 'required', array("required" => "State Name Is Required"));
            $this->form_validation->set_rules('city', 'city', 'required', array("required" => "City Name Is Required"));


            if ($this->form_validation->run() == true) {
                $c = $this->md->my_query("select count(*) as cn from tbl_schedule where category_id='".$this->input->post('category')."' and location_id='" . $this->input->post('city') . "' and date='".$this->input->post('date')."'")[0]->cn;
                
                if ($c == 0) {
                $st = strtotime($this->input->post('date'));
                $year1=date('Y', $st);
                $year2=date('Y');
                $month1=date('m',$st);
                $month2=date('m');
                $day1=date('d',$st);
                $day2=date('d');
                if($year1<$year2)
                {
                   if($month1<$month2)
                   {
                       if($day1<$day2)
                       {
                            $dt['error1'] = "You can not select previous date!";
                       }
                   }
                }
                else
                {
                    if($month1<$month2)
                   {
                       if($day1<$day2)
                       {
                
                       $dt['error1'] = "you can not select previous date!.";
                       }
                   }
                   else
                   {
                       $data['category_id'] = $this->input->post('category');
                $data['date'] = $this->input->post('date');
                $data['location_id'] = $this->input->post('city');
                $result = $this->md->my_insert("tbl_schedule", $data);
                if ($result == 1) {
                    $dt['success'] = "Schedule Added Successfully";
                } else {
                    $dt['error1'] = "Schedule Is Already Exist";
                }
                   }
                }
                }
                else
                {
                    $dt['error1'] = "Schedule Is Already Exist";
                }
//                $date= explode($this->input->post('date');
              
                
            }
        }
        $dt['state'] = $this->md->my_select('tbl_location', array('label' => 'state'));
        $dt['city'] = $this->md->my_select('tbl_location', array('label' => 'city'));
        $dt['category'] = $this->md->my_select('tbl_election_category');
        $dt['schedule'] = $this->md->my_select('tbl_schedule');
        $this->load->view('admin/manageschedule', $dt);
    }


    public function mailer() {
        $this->load->view('mailer');
    }

    function ckeditor()
    {
        
        $dt[''] = "";
        if ($this->input->post('send')) {
            
            $this->form_validation->set_rules('subject', 'subject', 'required');
            $this->form_validation->set_rules('msg', 'Message', 'required');

            if ($this->form_validation->run() == true) {
                $data['description'] = $this->input->post('msg');
                $msg = $this->input->post('msg');
                $result = $this->md->my_insert("ckeditor", $data);
                if ($result == 1) {
                    $dt['success'] = "Added Successfully";
                } else {
                    $dt['error1'] = "Some problem found";
                }
            }
        }
        $dt['ckeditor'] = $this->md->my_select('ckeditor');
//        
//        echo $this->db->last_query();
//        die;
//       echo "<pre>";
       print_r($dt['ckeditor']);
        $this->load->view('admin/ckeditor',$dt);
    }
    function getpass()
    {
        $op = $this->encryption->decrypt('15170e1d04e9a4e8fcc382f3e46529ac0a35b115f7554dd62471d1a947b26ff6e236686e9606b2ad9120301a0dd41a18b23d00616d45a2c2e2564d3e7e600b6f9PWQ3AswgGRNw6IOmh+beMQLStzNYqrjCtI2pRfLDHM=');
        echo $op;
        die;
    }
}
