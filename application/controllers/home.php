<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('pagination');
        $this->load->library('parser');
        $this->load->helper('cookie');
        $this->load->helper('text');
        $this->lang->load('vietnam', 'vietnam');
        $this->load->helper(
                array(
                    'form',
                    'url'
        ));
        $this->load->model('log_model');
        $this->load->model('modules_model');
        $this->load->model('product/product_model');
        $this->load->model('categories/categories_model');
        $this->load->helper("slug");
        $this->load->model('config_model');
        $this->load->model('catenews_model');
        $this->lang->load('home', 'vietnam');
        $this->lang->load('homemenu', 'vietnam');
        $this->load->model('user_model');
        @session_start();
    }

    function index() {
      // Create DOM from URL or file
        $this->load->helper('simple_html_dom');
        $html = $this->simple_html_dom->file_get_html('http://vietgit.com');
        var_dump($html); die;
    }

    function aboutus() {
        $data['site_title_name'] = " " . $this->lang->line('site_name_home');
        // --params
        $this->load->model('page_model');
        $data['homepage_news'] = $this->page_model->get_page_bytype(2);
        $this->load->model('homeowner_model');
        $data['total_job'] = $this->homeowner_model->total();
        $params = $this->config_model->details_config();
        $data['sitename'] = $params['sitename'];
        $data['meta_author'] = $params['meta_author'];
        $data['meta_des'] = $params['meta_des'];
        $data['meta_keyword'] = $params['meta_keyword'];
        $data['address1'] = $params['address1'];
        $data['address2'] = $params['address2'];
        $data['phone1'] = $params['phone1'];
        $data['phone2'] = $params['phone2'];
        $data['codeanalytic'] = $params['codeanalytic'];
        $this->load->model('ads_model');
        $data['list_ads'] = $this->ads_model->list_all_active();
        $this->load->view('home/index', $data);
    }

    function pages($id = 1) {
        $data['site_title_name'] = " - " . $this->lang->line('site_name_home');
        // --params
        $this->load->model('page_model');
        $data['homepage_news'] = $this->page_model->get_page_bytype($id);
        $params = $this->config_model->details_config();
        $data['sitename'] = $params['sitename'];
        $data['meta_author'] = $params['meta_author'];
        $data['meta_des'] = $params['meta_des'];
        $data['meta_keyword'] = $params['meta_keyword'];
        $data['address1'] = $params['address1'];
        $data['address2'] = $params['address2'];
        $data['phone1'] = $params['phone1'];
        $data['phone2'] = $params['phone2'];
        $data['codeanalytic'] = $params['codeanalytic'];
        $this->load->model('ads_model');
        $data['list_ads'] = $this->ads_model->list_all_active();
        $this->load->model('homeowner_model');
        $data['total_job'] = $this->homeowner_model->total();
        $this->load->view('home/index', $data);
    }

    function contactus() {
        $data['site_title_name'] = "Liên hệ với chúng tôi - " . $this->lang->line('site_name_home');
        // --params
        $this->load->model('page_model');
        $data['homepage_news'] = $this->page_model->get_page_bytype(7);

        $params = $this->config_model->details_config();
        $data['sitename'] = $params['sitename'];
        $data['meta_author'] = $params['meta_author'];
        $data['meta_des'] = $params['meta_des'];
        $data['meta_keyword'] = $params['meta_keyword'];
        $data['address1'] = $params['address1'];
        $data['address2'] = $params['address2'];
        $data['phone1'] = $params['phone1'];
        $data['phone2'] = $params['phone2'];
        $data['codeanalytic'] = $params['codeanalytic'];
        $this->load->model('ads_model');
        $data['list_ads'] = $this->ads_model->list_all_active();
        $this->load->model('homeowner_model');
        $data['total_job'] = $this->homeowner_model->total();
        $this->load->view('home/index', $data);
    }

    function cost() {
        $data['site_title_name'] = "Báo giá -" . $this->lang->line('site_name_home');
        // --params
        $this->load->model('page_model');
        $data['homepage_news'] = $this->page_model->get_page_bytype(6);

        $params = $this->config_model->details_config();
        $data['sitename'] = $params['sitename'];
        $data['meta_author'] = $params['meta_author'];
        $data['meta_des'] = $params['meta_des'];
        $data['meta_keyword'] = $params['meta_keyword'];
        $data['address1'] = $params['address1'];
        $data['address2'] = $params['address2'];
        $data['phone1'] = $params['phone1'];
        $data['phone2'] = $params['phone2'];
        $data['codeanalytic'] = $params['codeanalytic'];
        $this->load->model('ads_model');
        $data['list_ads'] = $this->ads_model->list_all_active();
        $this->load->model('homeowner_model');
        $data['total_job'] = $this->homeowner_model->total();
        $this->load->view('home/index', $data);
    }

    function login($val = null) {
        if ($this->session->userdata('job_userid') != null) {
            redirect('panel/profile');
        } else {
            $data['site_title_name'] = "Đăng nhập - " . $this->lang->line('site_name_home');
            $data['list_model'] = $this->modules_model->list_front();
            $data['menus'] = $this->categories_model->list_all_root_active();
            $data['sub_menus'] = $this->categories_model->list_submenu();
            $data['list_slide'] = $this->product_model->list_slide();
            $data['list_catenews'] = $this->catenews_model->list_all_active_root(
                    9);
            $data['list_catenews_2'] = $this->catenews_model->list_all_active_root(
                    10);
            // $data['list_cate'] = $this->categories_model->
            $this->load->model('user_model');
            if (isset($_REQUEST['btt_login'])) {
                $email = $this->input->post('email', true);
                $pass = $this->input->post('password', true);
                $result = $this->user_model->authen($email, $pass, 1);

                if (empty($result)) {
                    redirect('home/login/error');
                } else {
                    if ($result['user_active'] == 2) {
                        redirect('home/login/need_verify');
                    } else {
                        $session_user = array(
                            'job_userid' => $result['user_id'],
                            'job_username' => $result['user_name'],
                            'job_usertype' => $result['user_type'],
                            'job_useractive' => $result['user_active'],
                            'job_userbalance' => $result['user_balance'],
                            'job_pakage' => $result['user_pakage'],
                            'job_active' => $result['user_active']
                        );
                        $this->session->set_userdata($session_user);
                        redirect('panel');
                    }
                }
            }

            if ($val == 'error') {
                $data['result'] = "Đăng nhập thất bại, vui lòng kiểm tra lại !";
            } elseif ($val == "success") {
                $data['result'] = "Bạn đã đăng ký thành công, vui lòng đăng nhập để xem chi tiết !";
            } elseif ($val == "need_verify") {
                $data['result'] = "Bạn chưa kích hoạt tài khoản, vui lòng kiểm tra email đăng nhập để kích hoạt !";
            } elseif ($val == "duplicate") {
                $data['result'] = "Email của bạn đã được sử dụng, vui lòng kiểm tra lại, hoặc đăng ký email khác";
            } else {
                $data['result'] = "";
            }

            // --params
            $params = $this->config_model->details_config();
            $data['sitename'] = $params['sitename'];
            $data['meta_author'] = $params['meta_author'];
            $data['meta_des'] = $params['meta_des'];
            $data['meta_keyword'] = $params['meta_keyword'];
            $data['address1'] = $params['address1'];
            $data['address2'] = $params['address2'];
            $data['phone1'] = $params['phone1'];
            $data['phone2'] = $params['phone2'];
            $data['codeanalytic'] = $params['codeanalytic'];
            $this->load->model('ads_model');
            $data['list_ads'] = $this->ads_model->list_all_active();
            $this->load->model('homeowner_model');
            $data['total_job'] = $this->homeowner_model->total();
            $this->load->view('home/index', $data);
        }
    }

    function forgotpass($val = null) {
        $data['site_title_name'] = "Lấy lại mật khẩu -" . $this->lang->line('site_name_home');
        $data['list_model'] = $this->modules_model->list_front();
        $data['menus'] = $this->categories_model->list_all_root_active();
        $data['sub_menus'] = $this->categories_model->list_submenu();
        $data['list_slide'] = $this->product_model->list_slide();
        $data['list_catenews'] = $this->catenews_model->list_all_active_root(9);
        $data['list_catenews_2'] = $this->catenews_model->list_all_active_root(
                10);
        // $data['list_cate'] = $this->categories_model->
        $userid = 0;

        $this->load->model('user_model');
        if (isset($_REQUEST['btt_forgot'])) {
            $email = $this->input->post('email');
            $userid = $this->user_model->get_id_by_email($email);
            if ($userid == null) {
                redirect('home/forgotpass/false');
            } else {
                $this->user_model->update_password($userid, "timnhathau123");
                $this->restore_pass($userid, $email);
            }
        }
        if ($val == "success") {
            $data['alert'] = "Vui lòng kiểm tra email của bạn để nhận mật khẩu mới !";
        } elseif ($val == "false") {
            $data['alert'] = "Tài khoản email của bạn không tồn tại trên hệ thống !";
        } else {
            $data['alert'] = "";
        }

        // --params
        $params = $this->config_model->details_config();
        $data['sitename'] = $params['sitename'];
        $data['meta_author'] = $params['meta_author'];
        $data['meta_des'] = $params['meta_des'];
        $data['meta_keyword'] = $params['meta_keyword'];
        $data['address1'] = $params['address1'];
        $data['address2'] = $params['address2'];
        $data['phone1'] = $params['phone1'];
        $data['phone2'] = $params['phone2'];
        $data['codeanalytic'] = $params['codeanalytic'];
        $this->load->model('ads_model');
        $data['list_ads'] = $this->ads_model->list_all_active();
        $this->load->model('homeowner_model');
        $data['total_job'] = $this->homeowner_model->total();
        $this->load->view('home/index', $data);
    }

    function restore_pass($userid, $emailrecieve) {
        $this->load->model('config_model');
        $mails = $this->config_model->get_email_verify();
        $emailsent = null;
        $emailsentpass = null;
        $content = null;
        foreach ($mails as $mail) {
            $emailsent = $mail->email;
            $emailsentpass = $mail->mailpass;
        }
        $content = "Mật khẩu mới của bạn là: <b>timnhathau123</b>. Đăng nhập vào tài khoản của bạn và thay đổi mật khẩu mới. Xin vui lòng nhớ kỹ mật khẩu mới của bạn. Trân trọng.";
        $this->load->library('email');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => $emailsent,
            'smtp_pass' => $emailsentpass,
            'mailtype' => 'html',
            'priority' => 1,
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $this->email->from($emailsent, "TIMNHATHAU.VN  - Ho Tro He Thong");
        $this->email->to($emailrecieve);
        $this->email->subject("TIMNHATHAU.VN  - Khoi Phuc Mat Khau");
        $this->email->message(mb_convert_encoding($content, "UTF-8"));
        $this->email->send();
    }

    function account($id = null) {

        if ($this->session->userdata('job_userid') != null) {
            $this->load->model('user_model');
            $this->load->model('homeowner_model');
            $this->load->model('bid_model');
            $this->load->model('contractor_model');
            $this->load->model('jobs_model');
            $this->load->model('location_model');
            $data['userid'] = $id;

            $data['site_title_name'] = "Trang cá nhân -" . $this->lang->line('site_name_home');
            $data['profiles'] = $this->user_model->get_profile($id);
            $data['list_project'] = $this->homeowner_model->list_byworkerid($id);
            $data['list_homeowner'] = $this->user_model->list_homeowner();
            $data['list_rate'] = $this->bid_model->list_rate($id);

            $data['total_job'] = $this->homeowner_model->total_job_worker($id);
            $data['average_point_1'] = $this->bid_model->avarage_totalpoint_rate1($id);
            $data['average_point_2'] = $this->bid_model->avarage_totalpoint_rate2($id);
            $data['average_point_3'] = $this->bid_model->avarage_totalpoint_rate3($id);

            $data['list_location'] = $this->location_model->list_all();
            $data['list_sub_location'] = $this->location_model->list_all_sub();
            $data['list_jobs'] = $this->jobs_model->list_all();
            $data['list_contractor'] = $this->contractor_model->list_all();

            // --params
            $params = $this->config_model->details_config();
            $data['sitename'] = $params['sitename'];
            $data['meta_author'] = $params['meta_author'];
            $data['meta_des'] = $params['meta_des'];
            $data['meta_keyword'] = $params['meta_keyword'];
            $data['address1'] = $params['address1'];
            $data['address2'] = $params['address2'];
            $data['phone1'] = $params['phone1'];
            $data['phone2'] = $params['phone2'];
            $data['codeanalytic'] = $params['codeanalytic'];
            $this->load->model('ads_model');
            $data['list_ads'] = $this->ads_model->list_all_active();
            $this->load->view('home/index', $data);
        } else {
            redirect('home/login');
        }
    }

    function contractor() {
        $data['site_title_name'] = "Trang nhà thầu - " . $this->lang->line('site_name_home');
        // --params
        $this->load->model('page_model');
        $data['homepage_news'] = $this->page_model->get_page_bytype(5);
        $this->load->model('homeowner_model');
        $data['total_job'] = $this->homeowner_model->total();
        $params = $this->config_model->details_config();
        $data['sitename'] = $params['sitename'];
        $data['meta_author'] = $params['meta_author'];
        $data['meta_des'] = $params['meta_des'];
        $data['meta_keyword'] = $params['meta_keyword'];
        $data['address1'] = $params['address1'];
        $data['address2'] = $params['address2'];
        $data['phone1'] = $params['phone1'];
        $data['phone2'] = $params['phone2'];
        $data['codeanalytic'] = $params['codeanalytic'];
        $this->load->model('homeowner_model');
        $data['total_job'] = $this->homeowner_model->total();
        $this->load->view('home/index', $data);
    }

    function logout() {
        if (isset($_REQUEST['btt_logout'])) {
            $this->session->unset_userdata('job_userid');
            $this->session->unset_userdata('job_username');
            $this->session->unset_userdata('job_usertype');
            $this->session->unset_userdata('job_useractive');
            $this->session->unset_userdata('job_userbalance');
            redirect('home/index');
        }
    }

    function register() {
        if ($this->session->userdata('job_userid') != null) {
            redirect('panel');
        } else {
            $data['site_title_name'] = "Đăng ký thành viên - " .
                    $this->lang->line('site_name_home');
            $data['list_model'] = $this->modules_model->list_front();
            $data['menus'] = $this->categories_model->list_all_root_active();
            $data['sub_menus'] = $this->categories_model->list_submenu();
            $data['list_slide'] = $this->product_model->list_slide();
            $data['list_catenews'] = $this->catenews_model->list_all_active_root(
                    9);
            $data['list_catenews_2'] = $this->catenews_model->list_all_active_root(
                    10);

            if (isset($_REQUEST['btt_reg'])) {
                $firstname = $this->input->post('first_name', true);
                $lastname = $this->input->post('last_name', true);
                $companyname = $this->input->post('company_name', true);
                $companyid = $this->input->post('uen_number', true);
                $personal_id = $this->input->post('personal_id', true);
                $email = $this->input->post('email', true);
                $phone = $this->input->post('phonenumber');
                if ($this->user_model->check_exit_email($email) == 0) {
                    redirect('home/login/duplicate');
                } else {
                    $password = $this->input->post('password', true);
                    $user_pakage = $this->input->post('pakage_name');
                    if ($user_pakage == null || $user_pakage == 0) {
                        redirect('home/register');
                    } else {
                        if ($personal_id != null) {
                            $companyid = $personal_id;
                        } else {
                            $companyid = $companyid;
                        }
                        $array = array(
                            'uemail' => $email,
                            'ufirstname' => $firstname,
                            'ulastname' => $lastname,
                            'ucompany' => $companyname,
                            'ucompany_id' => $companyid,
                            'udate' => date('d-m-Y'),
                            'upass' => md5(
                                    $this->config->item('key') . '+-*%' .
                                    $password),
                            'utype' => 1,
                            'uactive' => 2,
                            'uphone'=>$phone,
                            'upakage' => $user_pakage
                        );
                        $userid = $this->user_model->insert($array);
                        if ($userid == null) {
                            redirect('');
                        } else {
                            $this->verify_account($userid, $email);
                            if ($user_pakage == 2) {
                                redirect('home/cost');
                            } else {
                                redirect('home/login/success');
                            }
                        }
                    }
                }
            }
            $this->load->model('homeowner_model');
            $data['total_job'] = $this->homeowner_model->total();
            //
            // --params
            $params = $this->config_model->details_config();
            $data['sitename'] = $params['sitename'];
            $data['meta_author'] = $params['meta_author'];
            $data['meta_des'] = $params['meta_des'];
            $data['meta_keyword'] = $params['meta_keyword'];
            $data['address1'] = $params['address1'];
            $data['address2'] = $params['address2'];
            $data['phone1'] = $params['phone1'];
            $data['phone2'] = $params['phone2'];
            $data['codeanalytic'] = $params['codeanalytic'];
            $this->load->model('homeowner_model');
            $data['total_job'] = $this->homeowner_model->total();
            $this->load->model('ads_model');
            $data['list_ads'] = $this->ads_model->list_all_active();
            $this->load->view('home/index', $data);
        }
    }

    function verify_account($userid, $emailrecieve) {
        $this->load->model('config_model');
        $mails = $this->config_model->get_email_verify();
        $emailsent = null;
        $emailsentpass = null;
        $content = null;
        foreach ($mails as $mail) {
            $emailsent = $mail->email;
            $emailsentpass = $mail->mailpass;
            $content = $mail->emailcontent;
        }
        $this->load->library('email');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.zoho.com',
            'smtp_port' => 465,
            'smtp_user' => $emailsent,
            'smtp_pass' => $emailsentpass,
            'mailtype' => 'html',
            'priority' => 1,
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );
        $link_verify = site_url(
                'home/verify/' . $userid . '/' . md5($emailrecieve));
        $content = $content . '<br/>' . $link_verify;
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $this->email->from($emailsent, "VGLANCER");
        $this->email->to($emailrecieve);
        $this->email->subject("Confirm Member of VGLANCER.VIETGIT.COM");
        $this->email->message(mb_convert_encoding($content, "UTF-8"));
        $this->email->send();
    }

    function verify($userid, $emailverify) {
        $this->load->model('user_model');
        $get_email = $this->user_model->get_email($userid);
        $email = null;
        if (md5($get_email) == $emailverify) {
            $this->user_model->update_active($userid);
            redirect('home/login/success');
        } else {
            redirect('home/login/need_verify');
        }
    }

    function post_job() {
        $data['site_title_name'] = "Tạo công việc  - " .
                $this->lang->line('site_name_home');
        $data['list_model'] = $this->modules_model->list_front();
        $data['menus'] = $this->categories_model->list_all_root_active();
        $data['sub_menus'] = $this->categories_model->list_submenu();
        $data['list_slide'] = $this->product_model->list_slide();
        $data['list_catenews'] = $this->catenews_model->list_all_active_root(9);
        $data['list_catenews_2'] = $this->catenews_model->list_all_active_root(
                10);

        if (isset($_REQUEST['btt_add_jobs'])) {
            $contractorid = $this->input->post('jobs_skill');
            $jobid = $this->input->post('jobid');
            $job_budget = $this->input->post('job_budget');
            $job_start_time = $this->input->post('job_time');
            $locationid = $this->input->post('location');
            $sublocationid = $this->input->post('sublocationid');
            $job_phone = $this->input->post('job_phone');
            $job_contact_time = $this->input->post('job_contact_time');
            $job_description = $this->input->post('job_description');

            // ---- thong tin cua homowner
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');
            if ($this->user_model->check_exit_email($email) == 0) {
                redirect('home/login/duplicate');
            } else {
                $password = $this->input->post('password');
                $array = array(
                    'uemail' => $email,
                    'ufirstname' => $first_name,
                    'ulastname' => $last_name,
                    'udate' => date('d-m-Y'),
                    'upass' => md5(
                            $this->config->item('key') . '+-*%' . $password),
                    'utype' => 2,
                    'uactive' => 1,
                    'uphone' => $job_phone
                );
                $userid = $this->user_model->insert($array);
                $master_id = $userid;
                // thong tin job

                $this->load->model('homeowner_model');
                $data = array(
                    'contractor_id' => $contractorid,
                    'job_id' => $jobid,
                    'cost' => $job_budget,
                    'jobstart' => $job_start_time,
                    'locationid' => $locationid,
                    'sub_locationid' => $sublocationid,
                    'phone_contact' => $job_phone,
                    'jobcontacttime' => $job_contact_time,
                    'job_requirements' => $job_description,
                    'post_date' => date('d-m-Y h:m:s'),
                    'master_id' => $master_id
                );
                $post_id = $this->homeowner_model->insert($data);

                $imageid = $this->input->post('file_image');
                $count = count($this->input->post('file_image'));
                for ($i = 0; $i < $count; $i++) {
                    $this->homeowner_model->updateimagepro($imageid[$i], $post_id);
                }


                redirect('home/login');
            }
        }
        $this->load->model('cost_model');
        $data['list_cost'] = $this->cost_model->list_all();
        $this->load->model('contractor_model');
        $data['list_contractor'] = $this->contractor_model->list_all();
        $this->load->model('location_model');
        $data['list_location'] = $this->location_model->list_all();
        //
        // --params
        $this->load->model('homeowner_model');
        $data['total_job'] = $this->homeowner_model->total();
        $params = $this->config_model->details_config();
        $data['sitename'] = $params['sitename'];
        $data['meta_author'] = $params['meta_author'];
        $data['meta_des'] = $params['meta_des'];
        $data['meta_keyword'] = $params['meta_keyword'];
        $data['address1'] = $params['address1'];
        $data['address2'] = $params['address2'];
        $data['phone1'] = $params['phone1'];
        $data['phone2'] = $params['phone2'];
        $data['codeanalytic'] = $params['codeanalytic'];
        $this->load->model('homeowner_model');
        $data['total_job'] = $this->homeowner_model->total();
        $this->load->model('ads_model');
        $data['list_ads'] = $this->ads_model->list_all_active();
        $this->load->view('home/index', $data);
    }

}
