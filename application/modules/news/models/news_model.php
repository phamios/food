<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    function list_all() {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('tbl_news');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }

    function list_all_by_page($num = null, $offset = null){
        $this->db->order_by("id", "desc");
        $query = $this->db->get('tbl_news', $num, $offset);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }
    
    function list_all_by_category($id,$num = null, $offset = null){
        $this->db->where('news_cateid',$id);
        $this->db->order_by("id", "desc");
        $query = $this->db->get('tbl_news', $num, $offset);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }

    function list_image() {
        $this->db->order_by("id", "desc");  
        $query = $this->db->get('tbl_images');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }
    
    function search_keyword($keyword = null,$num = null, $offset = null){
        $this->db->or_like('news_title',$keyword);
        $this->db->or_like('news_short',$keyword);
        $this->db->or_like('news_des',$keyword);
        $this->db->order_by("id", "desc");
        $query = $this->db->get('tbl_news', $num, $offset);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }

    function list_all_bycate($cateid) {
        $this->db->where(array(
            'news_cateid' => $cateid,
            'news_active' => 1, 
        ));
        $this->db->order_by("id", "desc");
        $query = $this->db->get('tbl_news');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }

    function return_imageid($newsid=null){
        $this->db->where('newsid',$newsid); 
        $query = $this->db->get('tbl_images');
        if($query->num_rows() > 0){
            foreach($query->result() as $value){
                return $value->id;
            }
        } else {
            return 0;
        }
    }
    
     

    function details($id = null) {
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_news');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }

    function insert($values) {
        $this->db->insert('tbl_news', $values);
        $value = $this->db->insert_id(); 
      
        return $value;
    }

    function update($values) {
        $this->db->where('id', $values['id']);
        $this->db->update('tbl_news', $values);
    }

    function delete($id) {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('tbl_news');
    }

    function insert_image($imagelink, $newid = null) {
        $data = array(
            'imagelink' => $imagelink,
            'newsid' => $newid,
        );
        $this->db->insert('tbl_images', $data);
        return $this->db->insert_id();
    }

    function delete_another($newsid) { 
        $this->db->where('newsid', $newsid);
        $this->db->delete('tbl_images');
    }

    function updateimagepro($id, $newid) {
        $this->delete_another($newid);
        $data = array(
            'newsid' => $newid,
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_images', $data);
    }

    function total(){ 
        return $this->db->count_all('tbl_news');
    }

}
