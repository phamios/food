<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class admincp extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('pagination');
        $this->load->library('parser');
        $this->load->helper('cookie');
        $this->load->helper('text');
        $this->lang->load("login", "vietnam");
        $this->load->helper(array(
            'form',
            'url'
        ));
        @session_start();
    }

    function index() {
        if ($this->session->userdata('admin_id') == null) {
            redirect('admincp/login');
        } else {
            $this->load->view('admincp/dashboard');
        }
    }

    function login() {
        if ($this->session->userdata('admin_id') == null) {
            if (isset($_REQUEST['submitlogin'])) {
                $username = $this->input->post('username', true);
                $password = $this->input->post('password', true);
                $this->load->model('user_model');
                $result = $this->user_model->checklogin($username,$password);
                if (empty($result)) {
                    redirect('admincp/login');
                } else {
                  if($result['status'] == 0){
                    redirect('admincp/login');
                  } else {
                    $session_user = array(
                        'userid' => $result['id'],
                        'username' => $result['username'],
                        'usertype' => $result['usertype'],
                        'status' => $result['status']
                    );
                    $this->session->set_userdata($session_user);
                    redirect('admincp/index');
                  }
                }
            }
            $this->load->view('admincp/login');
        } else {
            redirect('admincp/index');
        }
    }

    function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_type');
        $this->session->unset_userdata('admin_active');
        redirect('dang-nhap');
    }




    /*
     * ---------------------------------------------------------
     */

    function timeauto() {
        if ($this->session->userdata('admin_id') == null) {
            redirect('admincp/login');
        } else {
            $data['list_time'] = $this->config_model->details_timeauto();
            if (isset($_REQUEST['btt_edit'])) {
                $hour = $this->input->post('timeauto');
                $min = $this->input->post('minuteauto');
                $this->config_model->update_timeauto($hour, $min);

                $output = shell_exec('crontab -l');
                file_put_contents('/tmp/crontab.txt', $min . ' ' . $hour . ' * * * curl http://timnhathau.vn/system/sendmaildaily' . PHP_EOL);
                echo exec('crontab /tmp/crontab.txt');
                $output = shell_exec('crontab -l');
                echo $output;
                redirect('admincp/timeauto');
            }
            $data['list_menu'] = $this->modules_model->list_all_active();
            $this->load->view('admincp/dashboard', $data);
        }
    }

}
