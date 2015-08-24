<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    function list_all() {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('tbl_users');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }


    function get_profile($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_users');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }

    function checklogin($username,$password){
      $this->db->where(array(
          'username'=>$username,
          'password'=>$password,
        ));
      $query = $this->db->get('tbl_users');
      if($query->num_rows > 0){
          return $query->result();
      }else{
        return null;
      }

    }



    function authen($username, $password, $usertype = null, $status = null) {
        if ($usertype == 1) {
            $this->db->where(
                    array(
                        'uemail' => trim($username),
                        'upass' => md5(
                                $this->config->item('key') . '+-*%' .
                                $password)
            ));
        } else {
            $this->db->where(
                    array(
                        'uname' => trim($username),
                        'upass' => md5(
                                $this->config->item('key') . '+-*%' .
                                $password)
            ));
        }

        $query = $this->db->get('tbl_users');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $result = array(
                    'user_id' => $value->id,
                    'user_name' => $value->uname,
                    'user_type' => $value->utype,
                    'user_active' => $value->uactive,
                    'user_balance' => $value->balance,
                    'user_pakage' => $value->upakage,
                    'user_active' => $value->uactive
                );
                return $result;
            }
        } else {
            return null;
        }
    }

    function check_exit($username) {
        $this->db->where(array(
            'uname' => $username
        ));
        $query = $this->db->get("tbl_users");
        if ($query->num_rows() > 0) {
            return 0;
        } else {
            return 1;
        }
    }

    function check_exit_email($email = null) {
        $this->db->where(array(
            'uemail' => $email
        ));
        $query = $this->db->get('tbl_users');
        if ($query->num_rows() > 0) {
            return 0;
        } else {
            return 1;
        }
    }

    /*
     * Praram Array to insert
     */

    function insert($values) {
        if ($this->check_exit($values['uname']) == 1) {
            // $this->db->trans_start();
            $this->db->insert('tbl_users', $values);
            // $this->db->trans_complete();
            return $this->db->insert_id();
        } else {
            return null;
        }
    }

    function update_password($userid, $newpass) {
        $data = array(
            'upass' => md5($this->config->item('key') . '+-*%' . $newpass)
        );
        $this->db->where('id', $userid);
        $this->db->update('tbl_users', $data);
    }



    function update_active($id) {
        $data = array(
            'uactive' => 1
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_users', $data);
    }



    function delete($id = null) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_users');
    }


}
