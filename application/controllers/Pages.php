<?php

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }

    public function logout() {
        $wh['voter_id'] = $this->session->userdata('voter');
        $data['lastlogin'] = $this->session->userdata('lastlogin');
        $q = $this->md->my_update('tbl_voter_registration', $data, $wh);
        $this->session->unset_userdata('voter');
        $this->session->unset_userdata('lastlogin');
        $this->session->unset_userdata('value');
        $this->session->unset_userdata('type');
        $this->session->unset_userdata('schedule_id');
        $this->session->unset_userdata('candidate_id');
        redirect('Home');
    }

    public function partylogout() {
        $wh['party_id'] = $this->session->userdata('party');
        $data['lastlogin'] = $this->session->userdata('lastlogin');
        $q = $this->md->my_update('tbl_party_registration', $data, $wh);
        $this->session->unset_userdata('party');
        $this->session->unset_userdata('lastlogin');
        $this->session->unset_userdata('value');
        $this->session->unset_userdata('type');
        redirect('Home');
    }

    public function votersecurity() {
        if ($this->session->userdata('voter') == "") {
            redirect('Home');
        }
    }

    public function partysecurity() {
        if ($this->session->userdata('party') == "") {
            redirect('Home');
        }
    }

    public function index() {
        $dt[''] = '';
        $dt['toppage'] = 'index';
        $dt['voter'] = $this->md->my_query("select count(voter_id) as count from tbl_voter_registration");
        $dt['party'] = $this->md->my_query("select count(party_id) as count from tbl_party_registration");
        $dt['candidate'] = $this->md->my_query("select count(candidate_id) as count from tbl_candidate_registration");
        $dt['election'] = $this->md->my_query("select count(v_id) as count from tbl_voting");

        $this->load->view('index', $dt);
    }

    public function contactus() {

        $msg[''] = "";
        $msg['toppage'] = 'contactus';
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('name', 'name', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "Name Is Required", "regex_match" => "Name Is Invalid"));
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|regex_match[/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/]', array("required" => "Email Is Required", "valid_email" => "Invalid Email", "regex_match" => "Enter Valid Email Address"));
            $this->form_validation->set_rules('phone', 'phone', 'required|numeric|max_length|is_unique|exact_length[10]', array("required" => "Phone No Is Required", "numeric" => "Alpha Not Allowed", "max_length" => "Valid Phono Number", "is_unique" => "Phone Number Is Exist", "exact_length" => "Invalid Phone Number"));
            $this->form_validation->set_rules('subject', 'subject', 'required', array("required" => "Subject Is Required"));
            $this->form_validation->set_rules('message', 'message', 'required', array("required" => "Message Is Required"));
            $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
            if ($this->form_validation->run() == true) {
                $data['c_id'] = 0;
                $data['name'] = $this->input->post('name');
                $data['email'] = $this->input->post('email');
                $data['phone'] = $this->input->post('phone');
                $data['subject'] = $this->input->post('subject');
                $data['message'] = $this->input->post('message');
                $result = $this->md->my_insert("tbl_contact", $data);
                if ($result == 1) {
                    $msg['success'] = "Submitted";
                } else {
                    $msg['error'] = "Something Is Wrong";
                }
            }
        }
        $this->load->view('contact', $msg);
    }

    public function aboutus() {
        $dt[''] = '';
        $dt['toppage'] = 'aboutus';
        $dt['voter'] = $this->md->my_query("select count(voter_id) as count from tbl_voter_registration");
        $dt['party'] = $this->md->my_query("select count(party_id) as count from tbl_party_registration");
        $dt['candidate'] = $this->md->my_query("select count(candidate_id) as count from tbl_candidate_registration");
        $dt['election'] = $this->md->my_query("select count(v_id) as count from tbl_voting");
        $this->load->view('aboutus', $dt);
    }

    public function news() {
        $dt[''] = '';
        $dt['toppage'] = 'news';
        $this->load->view('news', $dt);
    }

    public function forgot() {
        $msg1[''] = '';
        
        $msg1['toppage'] = 'forgotpwd';
        if ($this->input->post('change')) {
//            if ($this->input->post('npwd') != "") {

            $this->form_validation->set_rules('npwd', 'New password', 'required|regex_match[/^([A-Za-z0-9_])+$/]|min_length[8]|max_length[16]', array("required" => "New Password Is Required", "min_length" => "Only Allowed 8 to 16 Character", "max_length" => "Only Allowed 8 to 16 Character", "regex_match" => "Invalid Password"));
            $this->form_validation->set_rules('rpwd', 'Retype password', 'required|matches[npwd]', array("required" => "Confirm Password Is Required", "matches" => "New Password  And Confirm Password Does Not Match"));

            if ($this->form_validation->run() == true) {
                if ($this->session->userdata('forgotphone') != "") {
                    $wh['phone'] = $this->session->userdata('phone');
                    $pwd = $this->encryption->encrypt($this->input->post('npwd'));
                    $ndt['password'] = $pwd;
                    $result = $this->md->my_update('tbl_voter_registration', $ndt, $wh);
                    if ($result == 1) {
                        $this->session->unset_userdata('phone');
                        $msg1['success'] = ' Password Change Successfully';
                    }
                } else {
                    $msg1['success'] = ' Not Valid';
                }
            }
//            } else {
//                $msg1['error'] = ' New Password Is Required';
//            }
        }
        $this->load->view('forgot', $msg1);
    }

    public function receiveotp() {

        $data[''] = "";
        $data['toppage'] = "receiveotp";
        if ($this->input->post('verify')) {
            $this->form_validation->set_rules('code', 'code', 'required', array("required" => "Code Is Required"));
            if ($this->form_validation->run() == true) {
                $code = $this->input->post('code');
                $oldcode = $this->input->post('oldcode');
                if ($code == $oldcode) {

                    if ($this->session->userdata('forgotphone') != "") {
//                        $this->session->unset_userdata('passrecover');
//                        $this->session->unset_userdata('voter');
//                        $this->session->unset_userdata('smscode');

                        redirect('ChangePassword');
                    } elseif ($this->session->userdata('email') != "") {
                        $this->session->unset_userdata('email');
                    } elseif ($this->session->userdata('phone') != "") {
//                        $this->session->unset_userdata('phone');
//                        $this->session->unset_userdata('voter');
//                        $this->session->unset_userdata('smscode');

                        redirect('Registration-Success');
                    }
                } else {

                    $data['error'] = "Invalid OTP Entered.Try Again";
                }
            }
        }
        if ($this->input->post('resend')) {
            $phone = $this->session->userdata('phone');
            $msg = $this->session->userdata('code');

            $this->demosms($phone, $msg);
        }
        $this->load->view('receiveotp', $data);
    }

    public function demosms($phone, $msg) {
        $uid = "8141053182";
        $pass = "mygovrnmygovrn";
        $phone = $phone;
        $this->session->set_userdata('code', $msg);
//        $votername=$this->session->userdata('voter_name');
        $message = "MyGovrn Account Verification Code : " . $msg;
        $client = new WAY2SMSClient();
        $client->login($uid, $pass);
        $result = $client->send($phone, $message);
//        $client->logout();
        redirect('Verify');
        echo "Message Send successfully";
    }

    public function election() {
        $dt[''] = '';
        $dt['toppage'] = 'election';

        $this->load->view('election', $dt);
    }

    public function result($id) {
        $dt[''] = '';
        $dt['toppage'] = 'election';
        $arrParty = [];
        $arrResult = [];
        $vote_location = $this->md->my_query("SELECT C.location_id,L.name as area,CT.name AS city,ST.name as state FROM `tbl_voting` AS V JOIN `tbl_candidate_registration` AS C ON C.candidate_id = V.candidate_id JOIN `tbl_party_registration` as P ON P.party_id = C.party_id JOIN `tbl_location` as L ON L.l_id = C.location_id JOIN `tbl_location` as CT ON L.parent_id = CT.l_id JOIN `tbl_location` as ST ON CT.parent_id = ST.l_id WHERE V.s_id = " . $id . " GROUP BY C.location_id ORDER BY C.location_id");
        foreach ($vote_location as $arrLocation) {
            $location_result = [];
            $location_result['location'] = $arrLocation;
            $result = $this->md->my_query("SELECT  P.party_id,P.p_name,P.p_logo, C.candidate_name,C.profile_pic,C.gender, V.candidate_id, COUNT(voter_id) AS vote_count FROM `tbl_voting` AS V JOIN `tbl_candidate_registration` AS C ON C.candidate_id = V.candidate_id JOIN `tbl_party_registration` AS P ON P.party_id = C.party_id WHERE V.s_id = " . $id . " AND location_id = " . $arrLocation->location_id . " GROUP BY C.candidate_id ORDER BY vote_count DESC");
            $max_vote = isset($result[0]) ? $result[0]->vote_count : 0;
            foreach ($result as $key => &$value) {
                if (!array_key_exists($value->party_id, $arrParty)) {
                    $arrParty[$value->party_id] = [];
                    $arrParty[$value->party_id]['party_id'] = $value->party_id;
                    $arrParty[$value->party_id]['p_name'] = $value->p_name;
                    $arrParty[$value->party_id]['p_logo'] = $value->p_logo;
                    $arrParty[$value->party_id]['sets'] = 0;
                }

                if ($value->vote_count == $max_vote) {
                    $value->winner = true;
                    $arrParty[$value->party_id]['sets'] ++;
                } else {
                    $value->winner = false;
                }
            }
            $location_result['result'] = $result;
            $arrResult[] = $location_result;
        }
        $max_sets = max(array_column($arrParty, 'sets'));

        foreach ($arrParty as &$party) {
            if ($party['sets'] == $max_sets) {
                $party['winner'] = true;
            } else {
                $party['winner'] = false;
            }
        }

        $dt['arrParty'] = $arrParty;
        $dt['arrResult'] = $arrResult;
        $this->load->view('result', $dt);
    }

    public function castvote() {

        $msg[''] = '';
        $msg['toppage'] = 'castvote';
        if ($this->input->post('confirm') == TRUE) {

            $v = $this->session->userdata('voter');
            $c1 = $this->session->userdata('candidate_id');
            $s = $this->session->userdata('schedule');
            $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
            if ($this->form_validation->run() == true) {
//               echo "select count(*) as cn from tbl_voting where voter_id ='" . $v . "' and s_id='" . $s . "'";die();
                $c = $this->md->my_query("select count(*) as cn from tbl_voting where voter_id ='" . $v . "' and s_id='" . $s . "' ")[0]->cn;

                if ($c == 0) {

                    $dt['candidate_id'] = $c1;
                    $dt['voter_id'] = $v;
                    $dt['s_id'] = $s;
                    $result = $this->md->my_insert("tbl_voting", $dt);
                    if ($result == 1) {
                        //$msg['success'] = "Your Vote Is Successfully Give";
                        $query = $this->md->my_query("select * from tbl_voter_registration where voter_id='" . $this->session->userdata('voter') . "'");
                        $email = $query[0]->email;
                        $msg = "<p style='font-size:18px';><b>THANK YOU FOR VOTING.</b><br>We Really Appreciate It.</p>";
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

                        if ($this->email->send()) {
                            redirect('Success-Vote');
                        }
                    } else {
                        $msg['error'] = "You Have Given Already Vote";
                    }
                } else {
                    $msg['error'] = "You Have Given Already Vote";
                }
            }
        }
        $voter = $this->session->userdata('voter');
        $msg['voter'] = $this->md->my_select('tbl_voter_registration', array('voter_id' => $voter))[0];

        if ($this->session->userdata('schedule') == "") {
            redirect('Dashboard');
        } else {

            $this->load->view('castvote', $msg);
        }
    }

    public function giveelection() {
        $msg['toppage'] = 'giveelection';
        $this->load->view('giveelection', $msg);
    }

    public function editcandidate() {
        $this->partysecurity();
        $msg[''] = '';
        $msg['toppage'] = 'editcandidate';
        if ($this->input->post('change') == true) {

            $this->form_validation->set_rules('cname', 'cname', 'required', array("required" => "Candidate Is Required"));
            $this->form_validation->set_rules('gender', 'gender', 'required', array("required" => "Gender Is Required"));
            $this->form_validation->set_rules('email', 'email', 'required|regex_match[/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/]|valid_email', array("required" => "Email Is Required"));
            $this->form_validation->set_rules('day', 'day', 'required', array("required" => "Day Is Required"));
            $this->form_validation->set_rules('month', 'month', 'required', array("required" => "Month Is Required"));
            $this->form_validation->set_rules('year', 'year', 'required', array("required" => "Year Is Required"));
            $this->form_validation->set_rules('state', 'state', 'required', array("required" => "State Name Is Required"));
            $this->form_validation->set_rules('city', 'city', 'required', array("required" => "City Name Is Required"));
            $this->form_validation->set_rules('area', 'Area', 'required', array("required" => "Area Name Is Required"));
            $this->form_validation->set_rules('description', 'description', 'required', array("required" => "Description Is Required"));
            $this->form_validation->set_rules('address', 'address', 'required', array("required" => "Address Is Required"));
            if ($this->form_validation->run() == true) {
                $wh['candidate_id'] = $this->uri->segment(2);
                $data['candidate_name'] = $this->input->post('cname');
                $day = $this->input->post('day');
                $month = $this->input->post('month');
                $year = $this->input->post('year');
                $dob = $day . "-" . $month . "-" . $year;
                $data['dob'] = $dob;
                $data['location_id'] = $this->input->post('area');
                $data['description'] = $this->input->post('description');
                $data['email_id'] = $this->input->post('email');
                $data['office_address'] = $this->input->post('address');
                $data['gender'] = $this->input->post('gender');
                $result = $this->md->my_update("tbl_candidate_registration", $data, $wh);
                if ($result == 1) {
                    $msg['success'] = "Update Successfully";
                } else {
                    $msg['error'] = "Something Is Wrong";
                }
            }
        }
        $candidate = $this->uri->segment(2);
        $msg['candidate'] = $this->md->my_select('tbl_candidate_registration', array('candidate_id' => $candidate))[0];
        $msg['state'] = $this->md->my_select('tbl_location', array('label' => 'state'));
        $this->load->view('editcandidate', $msg);
    }

    public function faq() {
        $msg['toppage'] = 'faq';
        $this->load->view('faq', $msg);
    }

    public function partyinfo() {
        $dt['toppage'] = 'partyinfo';
        $this->load->view('partyinfo', $dt);
    }

    public function feedback() {
        $msg[''] = "";
        $msg['toppage'] = 'feedback';
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('name', 'name', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "Name Is Required", "regex_match" => "Name Is Invalid"));
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|regex_match[/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/]', array("required" => "Email Is Required", "valid_email" => "Invalid Email", "regex_match" => "Enter Valid Email Address"));
            $this->form_validation->set_rules('subject', 'subject', 'required', array("required" => "Subject Is Required"));
            $this->form_validation->set_rules('message', 'message', 'required', array("required" => "Message Is Required"));
            $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
            if ($this->form_validation->run() == true) {
                $data['f_id'] = 0;
                $data['name'] = $this->input->post('name');
                $data['email'] = $this->input->post('email');
                $data['subject'] = $this->input->post('subject');
                $data['message'] = $this->input->post('message');
                $result = $this->md->my_insert("tbl_feedback", $data);
                if ($result == 1) {
                    $msg['success'] = "Submitted";
                } else {
                    $msg['error'] = "Something Is Wrong";
                }
            }
        }
        $this->load->view('feedback', $msg);
    }

    public function login() {

        if ($this->session->userdata('party') != "") {
            redirect('Home');
        }
        if ($this->session->userdata('voter') != "") {
            redirect('Home');
        }
        $msg[''] = '';
        $msg['v'] = 1;
        $msg['toppage'] = 'login';

        if ($this->input->post('submit')) {

            $this->session->set_userdata('type', $this->input->post('login'));
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/]', array("required" => "Email Is Required", "regex_match" => "Enter Valid Email Address", "valid_email" => "Invalid Email"));
            $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^([A-Za-z0-9_])+$/]|min_length[8]', array("required" => "Password Is Required", "regex_match" => "Invalid Password", "min_length" => "Password Minimum Length 8 Character"));
            $this->form_validation->set_rules('login', 'login', 'required', array("required" => "Please Select Any One Value."));
            if ($this->form_validation->run() == true) {
                if ($this->input->post('login') == 'party') {
                    $email = $this->input->post('email');
                    $data = $this->md->my_query("select * from tbl_party_registration where email='" . $email . "' and password='" . $this->input->post('password') . "'");

                    $c = count($data);
                    if ($c == 1) {
                        $ops = $data[0]->password;
                        $ps = $this->input->post('password');
                        if ($ps == $ops) {
                            if ($this->input->post('svp')) {
                                $sec = 60 * 60 * 24 * 365;
                                set_cookie("email", $email, $sec);
                                set_cookie("password", $ops, $sec);
                            } else {
                                if (get_cookie('email')) {
                                    delete_cookie('email');
                                    delete_cookie('password');
                                }
                            }

                            $this->session->set_userdata('party', $data[0]->party_id);
                            $this->session->set_userdata('lastlogin', date('Y-m-d h:i:s'));
                            $msg['v'] = 2;
                            $this->session->set_userdata('value', $msg['v']);
                            $query = $this->md->my_query("select * from tbl_party_registration where party_id='" . $this->session->userdata('party') . "'");
                            $email = $query[0]->email;
                            $msg = "You Are Currently Login In MyGovrn Website";
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

                            if ($this->email->send()) {
                                redirect('Party-Dashboard');
                            }
                        } else {
                            $msg['error'] = ' Password Is Wrong';
                        }
                    } else {
                        $msg['error'] = 'Party Not Found.';
                    }
                } else if ($this->input->post('login') == 'voter') {

                    $email = $this->input->post('email');
                    $pwd = $this->input->post('password');
                    $data1 = $this->md->my_query("select * from tbl_voter_registration where email='" . $email . "'");
                    $password = $this->encryption->decrypt($data1[0]->password);
                    if ($password == $pwd) {
                        $data = $this->md->my_query("select * from tbl_voter_registration where email='" . $email . "'");
                        $c = count($data);
                        if ($c == 1) {
                            $ops = $this->encryption->decrypt($data[0]->password);
                            $ps = $this->input->post('password');
                            if ($ps == $ops) {
                                if ($this->input->post('svp')) {
                                    $sec = 60 * 60 * 24 * 365;
                                    set_cookie("email", $email, $sec);
                                    set_cookie("password", $ops, $sec);
                                } else {
                                    if (get_cookie('email')) {
                                        delete_cookie('email');
                                        delete_cookie('password');
                                    }
                                }

                                $this->session->set_userdata('voter', $data[0]->voter_id);
                                $this->session->set_userdata('lastlogin', date('Y-m-d h:i:s'));

                                $msg['v'] = 2;
                                $this->session->set_userdata('value', $msg['v']);
                                $query = $this->md->my_query("select * from tbl_voter_registration where voter_id='" . $this->session->userdata('voter') . "'");
                                $email = $query[0]->email;
                                $msg = "You Are Currently Login In MyGovrn Website";
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

                                if ($this->email->send()) {
                                    redirect('Dashboard');
                                }
                            } else {

                                $msg['error'] = 'Password Is Wrong';
                            }
                        } else {
                            $msg['error'] = 'User Not Found';
                        }
                    } else {


                        $msg['error'] = 'Password Is Wrong';
                    }
                }
            }
        }
        $this->load->view('login', $msg);
    }

    public function privacypolicy() {
        $msg['toppage'] = 'login';
        $this->load->view('privacypolicy', $msg);
    }

    public function termsandcondition() {
        $msg['toppage'] = 'termsandcondition';
        $this->load->view('termsandcondition', $msg);
    }

    public function registration() {
        if ($this->session->userdata('party') != "") {
            redirect('Home');
        }
        if ($this->session->userdata('voter') != "") {
            redirect('Home');
        }
        $msg[''] = "";
        $msg['v'] = 1;
        $msg['toppage'] = "registration";
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('name', 'name', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "Name Is Required", "regex_match" => "Name Is Invalid"));
            $this->form_validation->set_rules('email', 'email', 'required|regex_match[/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/]|valid_email|is_unique[tbl_voter_registration.email]', array("required" => "Email is required", "regex_match" => "Enter Valid Email Address", "valid_email" => "Invalid Email", "is_unique" => "Email Exist"));
            $this->form_validation->set_rules('phone', 'phone', 'required|numeric|is_unique[tbl_voter_registration.phone]|exact_length[10]', array("required" => "Phone No Is Required", "numeric" => "Alpha Not Allowed", "is_unique" => "Phone Number Exist", "exact_length" => "Invalid Phone Number"));
            $this->form_validation->set_rules('password', 'password', 'required|regex_match[/^([A-Za-z0-9_])+$/]|min_length[8]', array("required" => "Password Is Required", "regex_match" => "Invalid Password", "min_length" => "Password Minimum Length 8 Character"));
            if ($this->form_validation->run() == TRUE) {
                $c = $this->md->my_query("select count(*) as cn from tbl_voter_registration where email='" . $this->input->post('email') . "' and password='" . $this->input->post('password') . "'")[0]->cn;
                if ($c == 0) {
                    $data['voter_id'] = 0;
                    $data['voter_name'] = $this->input->post('name');
                    $data['email'] = $this->input->post('email');
                    $data['phone'] = $this->input->post('phone');
                    $data['password'] = $this->encryption->encrypt($this->input->post('password'));
                    $result = $this->md->my_insert("tbl_voter_registration", $data);
                    if ($result == 1) {
                        $q = $this->md->my_query("select max(voter_id) as mx ,phone,voter_name from tbl_voter_registration group by phone order by mx desc limit 0,1");
                        $this->session->set_userdata('voter', $q[0]->mx);
                        $msg['v'] = 2;
                        $this->session->set_userdata('value', $msg['v']);
                        $this->session->set_userdata('phone', $q[0]->phone);

                        $this->session->set_userdata('voter_name', $q[0]->voter_name);
                        $phone = $this->input->post('phone');
                        $msg = rand(100000, 999999);
                        $this->demosms($phone, $msg);
//                        redirect('Registration-Success');
                    } else {
                        $msg['error'] = "Something Is Wrong";
                    }
                } else {

                    $msg['error'] = "Already Exist";
                }
            }
        }
        $this->load->view('registration', $msg);
    }

    public function dashboard() {

        $this->votersecurity();
        $msg['toppage'] = 'dashboard';
        $this->load->view('dashboard', $msg);
    }

    public function partydashboard() {
        $this->partysecurity();
        $dt[''] = '';
        $dt['toppage'] = 'partyddata';
        $dt['actcandidate'] = $this->md->my_query("select count(candidate_id) as count from tbl_candidate_registration where status=0");
        $dt['dactcandidate'] = $this->md->my_query("select count(candidate_id) as count from tbl_candidate_registration where status=1");
        $dt['actreview'] = $this->md->my_query("select count(review_id) as count from tbl_review where status=1");
        $dt['dactreview'] = $this->md->my_query("select count(review_id) as count from tbl_review where status=0");
        $this->load->view('partydashboard', $dt);
    }

    public function changepassword() {
        $this->votersecurity();
        $msg1[''] = "";
        $msg1['toppage'] = "changepassword";
        if ($this->input->post('changepwd')) {

//            if ($this->input->post('npwd') != "") {

            $this->form_validation->set_rules('npwd', 'New password', 'required|regex_match[/^([A-Za-z0-9_])+$/]|min_length[8]|max_length[16]', array("required" => "New Password Is Required", "min_length" => "Only Allowed 8 to 16 Character", "max_length" => "Only Allowed 8 to 16 Character", "regex_match" => "Invalid Password"));
            $this->form_validation->set_rules('rpwd', 'Retype password', 'required|matches[npwd]', array("required" => "Confirm Password Is Required", "matches" => "New Password  And Confirm Password Does Not Match"));

            if ($this->form_validation->run() == true) {
                $wh['voter_id'] = $this->session->userdata('voter');
                $ndt['password'] = $this->input->post('npwd');
                $result = $this->md->my_update('tbl_voter_registration', $ndt, $wh);
                if ($result == 1) {
                    $msg1['success'] = ' Password Change Successfully';
                }
            }
//            } else {
//                $msg1['error'] = ' New Password Is Required';
//            }
        }
        if ($this->input->post('changeprofile')) {
            $config['upload_path'] = './voter/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 2048;
            $mx = $this->md->my_query("select max(voter_id) as mx from tbl_voter_registration")[0]->mx;
            if ($mx != "") {
                $config['file_name'] = "photo_" . $mx . "_" . time('h:i:s');
            } else {
                $config['file_name'] = "photo_0";
            }
            $config['overwrite'] = TRUE;
            $result = $this->md->my_file($config, 'profile');
            if (in_array("file_name", $result)) {
                $dbpath = "voter/" . $result['file_name'];
                $wh['voter_id'] = $this->session->userdata('voter');
                $dt['profile'] = $this->encryption->encrypt($dbpath);
                $result = $this->md->my_update("tbl_voter_registration", $dt, $wh);
            } else {
                $msg1['error1'] = $this->upload->display_errors();
            }
        }
        $this->load->view('changepwd', $msg1);
//        $this->load->view('changepwd', $msg1);
    }

    public function idproof() {
        $this->votersecurity();
        $msg[''] = '';
        $msg['toppage'] = 'idproof';
        if ($this->input->post('submit')) {
            $image=$this->input->post('image');
                echo $image;
                die;
            $this->form_validation->set_rules('type', 'Type', 'required', array("required" => "Id Proof Is Required"));
            if ($this->form_validation->run() == true) {
                $config['upload_path'] = './idproof/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = 2048;
                $mx = $this->md->my_query("select max(voter_id) as mx from tbl_voter_registration")[0]->mx;
                if ($mx != "") {

                    $config['file_name'] = "photo_" . $mx . "_" . time('h:i:s');
                }
                $config['overwrite'] = TRUE;
                $result = $this->md->my_file($config, 'proof');
                if (in_array("file_name", $result)) {
                    $dbpath = "idproof/" . $result['file_name'];
                    $dt['voter_id'] = $this->session->userdata('voter');
                    $dt['type'] = $this->input->post('type');
                    $dt['path'] = $this->encryption->encrypt($dbpath);

                    $result = $this->md->my_insert("tbl_idproof", $dt);
                    if ($result == 1) {
                        $msg['success'] = "Upload Successfully";
                    }
                } else {
                    $msg['error'] = $this->upload->display_errors();
                }
            }
        }
        $this->load->view('idproof', $msg);
    }

    public function basicinfo() {
        $this->votersecurity();
        $dt[''] = "";
        $msg[''] = "";
        $msg['toppage'] = 'basicinfo';
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('gender', 'gender', 'required', array("required" => "Gender Is Required"));
            $this->form_validation->set_rules('id', 'id', 'required|exact_length[10]|regex_match[/^([A-Z][A-Z][A-Z])+([0-9]{0,7})+$/]', array("required" => "Voting Id Is Required", "exact_length" => "Voting Id Only 10 Digit", "regex_match" => "Invalid Voting Id Number"));
            $this->form_validation->set_rules('day', 'day', 'required', array("required" => "Day Is Required"));
            $this->form_validation->set_rules('month', 'month', 'required', array("required" => "Month Is Required"));
            $this->form_validation->set_rules('year', 'year', 'required', array("required" => "Year Is Required"));
            $this->form_validation->set_rules('state', 'state', 'required', array("required" => "State Name Is Required"));
            $this->form_validation->set_rules('city', 'city', 'required', array("required" => "City Name Is Required"));
            $this->form_validation->set_rules('area', 'Area', 'required', array("required" => "Area Name Is Required"));
            $this->form_validation->set_rules('address', 'address', 'required', array("required" => "Address Is Required"));

            if ($this->form_validation->run() == true) {
                $c = $this->md->my_query("select count(*) as cn from tbl_voter_registration where email='" . $this->input->post('email') . "' and password='" . $this->input->post('password') . "'")[0]->cn;
                if ($c == 0) {
                    $wh['voter_id'] = $this->session->userdata('voter');

                    $data['voting_id'] = $this->input->post('id');
                    $day = $this->input->post('day');
                    $month = $this->input->post('month');
                    $year = $this->input->post('year');
                    $dob = $day . "-" . $month . "-" . $year;
                    $data['dob'] = $dob;
                    $data['location_id'] = $this->input->post('area');
                    $data['address'] = $this->input->post('address');
                    $data['gender'] = $this->input->post('gender');
                    $result = $this->md->my_update("tbl_voter_registration", $data, $wh);
                    if ($result == 1) {
                        $msg['success'] = "Update Successfully";
                    } else {
                        $msg['error'] = "Something Is Wrong";
                    }
                } else {

                    $msg['error'] = "Already exist";
                }
            }
        }

        $voter = $this->session->userdata('voter');
        $msg['voter'] = $this->md->my_select('tbl_voter_registration', array('voter_id' => $voter))[0];
        $msg['state'] = $this->md->my_select('tbl_location', array('label' => 'state'));

        $this->load->view('basicinfo', $msg);
    }

    public function addenhance() {
        $msg[''] = '';
        $msg['toppage'] = 'addenhance';
        $this->partysecurity();
        if ($this->input->post('submit')) {
            $dt['enhancement_id'] = 0;
            $dt['party_id'] = $this->session->userdata('party');
            $dt['description'] = $this->input->post('editor1');
            $result = $this->md->my_insert("tbl_enhancement", $dt);
            if ($result == 1) {
                $msg['success'] = "Add Successfully";
            } else {
                $msg['error'] = "Something Is Wrong";
            }
        }
        $this->load->view('addenhance', $msg);
    }

    public function forgotpassword() {
        $msg[''] = '';
        $msg['toppage'] = 'forgotpwd';
        if ($this->input->post('send')) {
            $this->form_validation->set_rules('phone', 'phone', 'required', array("required" => "Phone No Is Required"));

            if ($this->form_validation->run() == true) {
//                echo "select count(*) as cn,phone from tbl_voter_registration where phone='" . $this->input->post('phone')."'";die();
                $q = $this->md->my_query("select count(*) as cn,phone from tbl_voter_registration where phone=" . $this->input->post('phone'));


                if ($q[0]->cn == 1) {
//                    echo $q[0]->phone;die();
                    $this->session->set_userdata('forgotphone', $q[0]->phone);
                    $phone = $this->input->post('phone');
                    $msg = rand(100000, 999999);
                    $this->demosms($phone, $msg);
                } else {
                    $msg['error'] = "Phone Number Doesn't Match";
                }
            }
        }
        if ($this->input->post('sendotp')) {
            $this->form_validation->set_rules('email', 'email', 'required', array("required" => "Email Address Is Required"));

            if ($this->form_validation->run() == true) {

                $query = $this->md->my_query("select count(*) as cn, password,email from tbl_party_registration where email='" . $this->input->post('email') . "'");
                if ($query[0]->cn == 1) {
                    $password = $query[0]->password;
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
                    $msg['error'] = "Email Address Doesn't Match";
                }
            }
        }
        $this->load->view('forgotpwd', $msg);
    }

    public function verifyemail() {
        $this->load->view('verifyemail');
    }

    public function partyprofile() {

        $msg[''] = '';
        $msg['toppage'] = 'partyprofile';

        $msg['val'] = 1;
        $msg['v'] = 1;

        if ($this->input->post('next1')) {

            $this->form_validation->set_rules('pname', 'Party name', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "Party Name Is Required", "regex_match" => "Party Name Is Invalid"));
            $this->form_validation->set_rules('since', 'Since', 'required|regex_match[/^[0-9]+$/]|exact_length[4]', array("required" => "Since Is Required", "regex_match" => "Since Is Invalid", "exact_length" => "Since Is Invalid"));
            $this->form_validation->set_rules('slogan', 'Slogan', 'required', array("required" => "Slogan Is Required"));
            if ($this->form_validation->run() == true) {

                $config['upload_path'] = './party/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = 2048;
                $mx = $this->md->my_query("select max(party_id) as mx from tbl_party_registration")[0]->mx;
                if ($mx != "") {
                    $config['file_name'] = "logo_" . $mx;
                } else {
                    $config['file_name'] = "logo_0";
                }
                $config['overwrite'] = TRUE;
                $result = $this->md->my_file($config, 'plogo');

                if (in_array("file_name", $result)) {
                    $dbpath = "party/" . $result['file_name'];
                    $this->session->set_userdata('pname', $this->input->post('pname'));
                    $this->session->set_userdata('plogo', $dbpath);
                    $this->session->set_userdata('since', $this->input->post('since'));
                    $this->session->set_userdata('slogan', $this->input->post('slogan'));
                    $msg['val'] = 2;
                } else {
                    $msg['error'] = $this->upload->display_errors();
                }
            } else {
                $msg['val'] = 1;
            }
        }

        if ($this->input->post('next2')) {
            $this->form_validation->set_rules('cname', 'Chairman name', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "Chairman Name Is Required", "regex_match" => "Chairman Name Is Invalid"));
            $this->form_validation->set_rules('description', 'Description', 'required', array("required" => "Description Is Required"));
            if ($this->form_validation->run() == true) {

                $config['upload_path'] = './party/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = 2048;
                $mx = $this->md->my_query("select max(party_id) as mx from tbl_party_registration")[0]->mx;
                if ($mx != "") {
                    $config['file_name'] = "photo_" . $mx;
                } else {
                    $config['file_name'] = "photo_0";
                }
                $config['overwrite'] = TRUE;
                $result = $this->md->my_file($config, 'cphoto');

                if (in_array("file_name", $result)) {

                    $dbpath = "party/" . $result['file_name'];
                    $this->session->set_userdata('cname', $this->input->post('cname'));
                    $this->session->set_userdata('cphoto', $dbpath);
                    $this->session->set_userdata('description', $this->input->post('description'));


                    $msg['val'] = 3;
                } else {
                    $msg['error'] = $this->upload->display_errors();
                    $msg['val'] = 2;
                }
            } else {
                $msg['val'] = 2;
            }
        }

        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('email', 'Email', 'required|regex_match[/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/]|valid_email|is_unique[tbl_party_registration.email]', array("required" => "Email Is Required", "regex_match" => "Enter Valid Email Address", "valid_email" => "Invalid Email", "is_unique" => "Email Exist"));
            $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^([A-Za-z0-9_])+$/]|min_length[8]', array("required" => "Password Is Required", "regex_match" => "Invalid Password", "min_length" => "Password Minimum Length 8 Character"));
            if ($this->form_validation->run() == true) {
                $dtt['party_id'] = '0';
                $dtt['p_name'] = $this->session->userdata('pname');
                $dtt['p_logo'] = $this->session->userdata('plogo');
                $dtt['since'] = $this->session->userdata('since');
                $dtt['p_chairman_name'] = $this->session->userdata('cname');
                $dtt['chairman_photo'] = $this->session->userdata('cphoto');
                $dtt['description'] = $this->session->userdata('description');
                $dtt['email'] = $this->input->post('email');
                $dtt['password'] = $this->input->post('password');
                $dtt['slogan'] = $this->session->userdata('slogan');
                $dtt['status'] = '0';
                $result = $this->md->my_insert("tbl_party_registration", $dtt);
                if ($result == 1) {

                    $this->session->unset_userdata('pname');
                    $this->session->unset_userdata('plogo');
                    $this->session->unset_userdata('since');
                    $this->session->unset_userdata('cname');
                    $this->session->unset_userdata('cphoto');
                    $this->session->unset_userdata('description');
                    $this->session->unset_userdata('slogan');
                    $q = $this->md->my_query("select max(party_id) as mx from tbl_party_registration")[0]->mx;
                    $this->session->set_userdata('party', $q);
                    $msg['v'] = 2;
                    $this->session->set_userdata('value', $msg['v']);
//                    $msg['success'] = "Add Successfully";
                    redirect('Party-Success');
                }
            } else {
                $msg['val'] = 3;
            }
        }

        $this->load->view('partyprofile', $msg);
    }

    public function candidate() {
        $this->partysecurity();
        $msg['toppage'] = 'candidate';
        $this->load->view('candidate', $msg);
    }

    public function candidatedata() {
        $dt[''] = '';
        $dt['toppage'] = 'candidatedata';
        $this->load->view('candidatedata', $dt);
    }

    public function addcandidate() {
        $this->partysecurity();
        $msg[''] = '';
        $dt[''] = '';
        $msg['val1'] = 1;
        $msg['toppage'] = 'addcandidate';
        if ($this->input->post('next1')) {

            $this->form_validation->set_rules('party', 'Party name', 'required', array("required" => "Party Name Is Required"));
            $this->form_validation->set_rules('candidate', 'candidate', 'required|regex_match[/^[A-Za-z ]+$/]', array("required" => "Candidate Is Required", "regex_match" => "Invalid Candidate Name"));
            $this->form_validation->set_rules('gender', 'gender', 'required', array("required" => "Gender Is Required"));
            $this->form_validation->set_rules('day', 'day', 'required', array("required" => "Day Is Required"));
            $this->form_validation->set_rules('month', 'month', 'required', array("required" => "Month Is Required"));
            $this->form_validation->set_rules('year', 'year', 'required', array("required" => "Year Is Required"));
            $this->form_validation->set_rules('description', 'description', 'required', array("required" => "Description Is Required"));
            if ($this->form_validation->run() == true) {

                $this->session->set_userdata('partyname', $this->input->post('party'));
                $this->session->set_userdata('candidatename', $this->input->post('candidate'));
                $this->session->set_userdata('gender', $this->input->post('gender'));


                $day = $this->input->post('day');
                $month = $this->input->post('month');
                $year = $this->input->post('year');
                $dob = $day . "-" . $month . "-" . $year;
                $this->session->set_userdata('dob', $dob);
                $this->session->set_userdata('description', $this->input->post('description'));
                $msg['val1'] = 2;
            } else {
                $msg['val1'] = 1;
            }
        }


        if ($this->input->post('next2')) {
            $this->form_validation->set_rules('category', 'category', 'required', array("required" => "Category Name Is Required"));
            $this->form_validation->set_rules('address', 'address', 'required', array("required" => "Office Address Is Required"));
            if ($this->form_validation->run() == true) {

                $config['upload_path'] = './candidate/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = 2048;
                $mx = $this->md->my_query("select max(candidate_id) as mx from tbl_candidate_registration")[0]->mx;
                if ($mx != "") {
                    $config['file_name'] = "photo_" . $mx . "_" . time('h:i:s');
                } else {
                    $config['file_name'] = "photo_0";
                }
                $config['overwrite'] = TRUE;
                $result = $this->md->my_file($config, 'profile');
                if (in_array("file_name", $result)) {

                    $dbpath = "candidate/" . $result['file_name'];
                    $this->session->set_userdata('categoryname', $this->input->post('category'));
                    $this->session->set_userdata('profile', $dbpath);
                    $this->session->set_userdata('officeaddress', $this->input->post('address'));
                    $msg['val1'] = 3;
                } else {
                    $msg['error'] = $this->upload->display_errors();
                    $msg['val1'] = 2;
                }
            } else {
                $msg['val1'] = 2;
            }
        }


        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('state', 'state', 'required', array("required" => "State Name Is Required"));
            $this->form_validation->set_rules('city', 'city', 'required', array("required" => "City Name Is Required"));
            $this->form_validation->set_rules('area', 'Area', 'required', array("required" => "Area Name Is Required"));
            $this->form_validation->set_rules('email', 'Email', 'required|regex_match[/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/]|valid_email|is_unique[tbl_candidate_registration.email_id]', array("required" => "Email Is Required", "regex_match" => "Enter Valid Email Address", "valid_email" => "Invalid Email", "is_unique" => "Email Exist"));
            $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^([A-Za-z0-9_])+$/]|min_length[8]', array("required" => "Password Is Required", "regex_match" => "Invalid Password", "min_length" => "Password Minimum Length 8 Character"));
            if ($this->form_validation->run() == true) {

                $dtt['party_id'] = $this->session->userdata('partyname');
                $dtt['location_id'] = $this->input->post('area');
                $dtt['candidate_name'] = $this->session->userdata('candidatename');
                $dtt['gender'] = $this->session->userdata('gender');
                $dtt['profile_pic'] = $this->session->userdata('profile');
                $dtt['email_id'] = $this->input->post('email');
                $dtt['password'] = $this->input->post('password');
                $dtt['description'] = $this->session->userdata('description');
                $dtt['status'] = 0;
                $dtt['r_date'] = date('Y-m-d');
                $dtt['category_id'] = $this->session->userdata('categoryname');
                $dtt['dob'] = $this->session->userdata('dob');
                $dtt['office_address'] = $this->session->userdata('officeaddress');

                $result = $this->md->my_insert("tbl_candidate_registration", $dtt);
                if ($result == 1) {

                    $this->session->unset_userdata('partyname');
                    $this->session->unset_userdata('candidatename');
                    $this->session->unset_userdata('gender');
                    $this->session->unset_userdata('profile');
                    $this->session->unset_userdata('description');
                    $this->session->unset_userdata('categoryname');
                    $this->session->unset_userdata('officeaddress');
                    $msg['success'] = "Add Successfully";
                    redirect('Add-Candidate');
                }
            } else {
                $msg['val1'] = 3;
            }
        }


        $msg['state'] = $this->md->my_select('tbl_location', array('label' => 'state'));
        $msg['city'] = $this->md->my_select('tbl_location', array('label' => 'city'));
        $msg['area'] = $this->md->my_select('tbl_location', array('label' => 'area'));

        $this->load->view('addcandidate', $msg);
    }

    public function candidateinfo() {

        $msg[''] = '';
        $msg['toppage'] = 'candidateinfo';
        if ($this->input->post('submit')) {

            //echo date('Y-m-d h:i:s');die();
            $data = $this->md->my_query("select * from tbl_voter_registration where voter_id='" . $this->session->userdata('voter') . "'");
            $this->form_validation->set_rules('review', 'review', 'required', array("required" => "Review Is Required"));

            if ($this->form_validation->run() == true) {

                if ($data[0]->status == '1') {


                    $dt['candidate_id'] = $this->uri->segment(2);
                    $dt['voter_id'] = $this->session->userdata('voter');
                    $dt['review'] = $this->input->post('review');
                    $dt['datetime'] = date('Y-m-d');
                    $dt['status'] = 0;
                    $result = $this->md->my_insert("tbl_review", $dt);
                    if ($result == 1) {
                        $msg['success'] = "Your Review Is Under Process. Thank You.";
                    }
                } else {
                    $msg['error'] = "You Are Not Activated Voter.";
                }
            } else {
                $msg['error'] = "Review Is Required.";
            }
        }

        $this->load->view('candidateinfo', $msg);
    }

    public function partychangepassword() {
        $this->partysecurity();
        $msg[''] = "";
        $msg['toppage'] = 'partychangepassword';

        if ($this->input->post('changepwd')) {

//            if ($this->input->post('npwd') != "") {

            $this->form_validation->set_rules('npwd', 'New password', 'required|regex_match[/^([A-Za-z0-9_])+$/]|min_length[8]|max_length[16]', array("required" => "New Password Is Required", "min_length" => "Only Allowed 8 to 16 Character", "max_length" => "Only Allowed 8 to 16 Character", "regex_match" => "Invalid Password"));
            $this->form_validation->set_rules('rpwd', 'Retype password', 'required|matches[npwd]', array("required" => "Confirm Password Is Required", "matches" => "New Password  And Confirm Password Does Not Match"));
            if ($this->form_validation->run() == true) {
                $wh['party_id'] = $this->session->userdata('party');
                $ndt['password'] = $this->input->post('npwd');
                $result = $this->md->my_update('tbl_party_registration', $ndt, $wh);
                if ($result == 1) {
                    $msg['success'] = ' Password Change Successfully';
                }
            }
//            } else {
//                $msg['error'] = ' New Password Is Required';
//            }
        }
        if ($this->input->post('changeprofile')) {


            $config['upload_path'] = './party/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 2048;

            $mx = $this->md->my_query("select max(party_id) as mx from tbl_party_registration")[0]->mx;
            if ($mx != "") {
                $config['file_name'] = "logo_" . $mx . "_" . time('h:i:s');
            } else {
                $config['file_name'] = "logo_0";
            }

            $config['overwrite'] = TRUE;
            $result = $this->md->my_file($config, 'logo');
            if (in_array("file_name", $result)) {
                $dbpath = "party/" . $result['file_name'];

                $wh['party_id'] = $this->session->userdata('party');
                $dt['p_logo'] = $dbpath;

                $result = $this->md->my_update("tbl_party_registration", $dt, $wh);
            } else {
                $msg['error1'] = $this->upload->display_errors();
            }
        }
        $this->load->view('partychangepassword', $msg);
    }

    public function party() {
        $dt['toppage'] = 'party';
        $this->load->view('party', $dt);
    }

    public function partysuccess() {
        $dt['toppage'] = 'partysuccess';
        if ($this->input->post('submit')) {
            redirect('Party-Dashboard', $dt);
        }

        $this->load->view('partysuccess');
    }

    public function registrationsuccess() {
        $dt['toppage'] = 'registrationsuccess';
        if ($this->input->post('submit')) {
            redirect('Dashboard');
        }

        $this->load->view('registrationsuccess', $dt);
    }

    public function successvote() {
        $dt['toppage'] = 'successvote';
        if ($this->input->post('submit')) {
            $this->session->unset_userdata('schedule');
            redirect('Dashboard');
        }

        $this->load->view('successvote', $dt);
    }

    public function shedulecandidate() {
        $this->partysecurity();
        $msg['toppage'] = 'schedulecandidate';
        $this->load->view('shedulecandidate', $msg);
    }

    public function showschedule() {
        $dt[''] = "";
        $dt['toppage'] = 'showschedule';
        $dt['state'] = $this->md->my_select('tbl_location', array('label' => 'state'));
        $dt['city'] = $this->md->my_select('tbl_location', array('label' => 'city'));
        $dt['category'] = $this->md->my_select('tbl_election_category');

        $this->load->view('showschedule', $dt);
    }

    public function candidatereview() {
        $this->partysecurity();
        $msg[''] = '';
        $msg['toppage'] = 'candidatereview';
        //$msg['candidatedata'] = $this->md->my_select('tbl_review');
        $this->load->view('candidatereview', $msg);
    }

    public function partybasicinfo() {
        $this->partysecurity();
        $dt[''] = "";
        $msg[''] = "";
        $msg['toppage'] = 'partybasicinfo';
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('president', 'president', 'required', array("required" => "President Is Required"));
            $this->form_validation->set_rules('description', 'description', 'required', array("required" => "Description Is Required"));

            if ($this->form_validation->run() == true) {
                $c = $this->md->my_query("select count(*) as cn from tbl_party_registration where email='" . $this->input->post('email') . "' and password='" . $this->input->post('password') . "'")[0]->cn;
                if ($c == 0) {
                    $wh['party_id'] = $this->session->userdata('party');
                    $data['president'] = $this->input->post('president');
                    $data['parliamentary_chairperson'] = $this->input->post('chairman');
                    $data['lok_sabha_leader'] = $this->input->post('lokleader');
                    $data['rajya_sabha_leader'] = $this->input->post('rajyaleader');
                    $data['headquarters'] = $this->input->post('headquarters');
                    $data['newspaper'] = $this->input->post('newspaper');
                    $data['youth_wing'] = $this->input->post('youthwing');
                    $data['women_wing'] = $this->input->post('womenwing');
                    $data['minority_wing'] = $this->input->post('minoritywing');
                    $data['membership'] = $this->input->post('membership');
                    $data['ideology'] = $this->input->post('ideology');
                    $data['political_position'] = $this->input->post('politicalposition');
                    $data['international_affiliation'] = $this->input->post('internationalaffiliation');
                    $data['colours'] = $this->input->post('colours');
                    $data['eci_status'] = $this->input->post('ecistatus');
                    $data['alliance'] = $this->input->post('alliance');
                    $data['seats_in_lok_sabha'] = $this->input->post('seatsrajyasabha');
                    $data['seats_in_rajya_sabha'] = $this->input->post('seatsloksabha');
//                    echo "<pre>";
//                    print_r($data);die();
                    $result = $this->md->my_update("tbl_party_registration", $data, $wh);
                    if ($result == 1) {
                        $msg['success'] = "Update Successfully";
                    } else {
                        $msg['error'] = "Something Is Wrong";
                    }
                } else {

                    $msg['error'] = "Already Exist";
                }
            }
        }
        $this->load->view('partybasicinfo', $msg);
    }

    public function blockcandidate() {
        $this->partysecurity();
        $msg['toppage'] = 'blockcandidate';
        $this->load->view('blockcandidate', $msg);
    }

    public function unblockcandidate() {
        $this->partysecurity();
        $msg['toppage'] = 'unblockcandidate';
        $this->load->view('unblockcandidate', $msg);
    }

    public function delete() {
        $this->partysecurity();
        $action = $this->uri->segment(2);
        $id = $this->uri->segment(3);
        if ($action == "enhance") {

            $wh['enhancement_id'] = $id;
            $this->md->my_delete('tbl_enhancement', $wh);
            redirect('Add-Enhanced');
        }
    }

}

class WAY2SMSClient {
    /* ------------ Way2sms code by GoProHost.In -----
      |  Find More Scripts @ MobGyan.Com
     * -------------------------------------------- */

    var $curl;
    var $timeout = 30;
    var $jstoken;
    var $way2smsHost;
    var $refurl;

    function login($username, $password) {
        /* ------------ Way2sms code by GoProHost.In -----
          |  Find More Scripts @ MobGyan.Com
         * -------------------------------------------- */
        $this->curl = curl_init();

        $uid = urlencode($username);
        $pwd = urlencode($password);

        // Go where the server takes you :P
        curl_setopt($this->curl, CURLOPT_URL, "http://way2sms.com");
        curl_setopt($this->curl, CURLOPT_HEADER, true);
        curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, TRUE);
        $a = curl_exec($this->curl);
        if (preg_match('#Location: (.*)#', $a, $r))
            $this->way2smsHost = trim($r[1]);

        // Setup for login
        curl_setopt($this->curl, CURLOPT_URL, $this->way2smsHost . "Login1.action");
        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, "username=" . $uid . "&password=" . $pwd . "&button=Login");
        curl_setopt($this->curl, CURLOPT_COOKIESESSION, 1);
        curl_setopt($this->curl, CURLOPT_COOKIEFILE, "cookie_way2sms");
        curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($this->curl, CURLOPT_MAXREDIRS, 20);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36");
        curl_setopt($this->curl, CURLOPT_CONNECTTIMEOUT, $this->timeout);
        curl_setopt($this->curl, CURLOPT_REFERER, $this->way2smsHost);
        $text = curl_exec($this->curl);

        // Check if any error occured
        if (curl_errno($this->curl))
            return "access error : " . curl_error($this->curl);

        // Check for proper login
        $pos = stripos(curl_getinfo($this->curl, CURLINFO_EFFECTIVE_URL), "main.action");
        if ($pos === "FALSE" || $pos == 0 || $pos == "")
            return "invalid login";

        // Set the home page from where we can send message
        $this->refurl = curl_getinfo($this->curl, CURLINFO_EFFECTIVE_URL);
        /* $newurl = str_replace("ebrdg.action?id=", "main.action?section=s&Token=", $this->refurl);
          curl_setopt($this->curl, CURLOPT_URL, $newurl); */

        // Extract the token from the URL
        $tokenLocation = strpos($this->refurl, "Token");
        $this->jstoken = substr($this->refurl, $tokenLocation + 6, 37);
        //Go to the homepage
        //$text = curl_exec($this->curl);

        return true;
    }

    function send($phone, $msg) {
        $result = array();

        // Check the message
        if (trim($msg) == "" || strlen($msg) == 0)
            return "invalid message";

        // Take only the first 140 characters of the message
        $msg = substr($msg, 0, 140);
        // Store the numbers from the string to an array
        $pharr = explode(",", $phone);

        // Send SMS to each number
        foreach ($pharr as $p) {
            if (strlen($p) != 10 || !is_numeric($p) || strpos($p, ".") != false) {
                $result[] = array('phone' => $p, 'msg' => $msg, 'result' => "invalid number");
                continue;
            }

            // Setup to send SMS
            curl_setopt($this->curl, CURLOPT_URL, $this->way2smsHost . 'smstoss.action');
            curl_setopt($this->curl, CURLOPT_REFERER, curl_getinfo($this->curl, CURLINFO_EFFECTIVE_URL));
            curl_setopt($this->curl, CURLOPT_POST, 1);

            curl_setopt($this->curl, CURLOPT_POSTFIELDS, "ssaction=ss&Token=" . $this->jstoken . "&mobile=" . $p . "&message=" . $msg . "&button=Login");
            $contents = curl_exec($this->curl);

            //Check Message Status
            $pos = strpos($contents, 'Message has been submitted successfully');
            $res = ($pos !== false) ? true : false;
            $result[] = array('phone' => $p, 'msg' => $msg, 'result' => $res);
        }
        return $result;
    }

    function logout() {
        curl_setopt($this->curl, CURLOPT_URL, $this->way2smsHost . "LogOut");
        curl_setopt($this->curl, CURLOPT_REFERER, $this->refurl);
        $text = curl_exec($this->curl);
        curl_close($this->curl);
    }

}
