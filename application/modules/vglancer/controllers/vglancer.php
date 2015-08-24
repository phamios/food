<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vglancer extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('pagination');
        $this->load->library('parser');
        $this->load->helper('cookie');
        $this->load->helper('text');
        $this->load->model('modules_model');
        $lang = $this->config->item('language_site');
        $this->lang->load($lang, $lang);
        $this->load->helper(array('form', 'url'));
        $this->load->model('log_model');
        @session_start();
    }

    public function index() {
		 
    }
    
   

}
