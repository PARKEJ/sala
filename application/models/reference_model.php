<?php

class Reference_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function gets(){
        return $this->db->query("SELECT * FROM upload_file")->result();
    }

    function insert($title, $contents, $file_name, $file_path){
        $this->db->set('reg_date','NOW()',false);
        return $this->db->insert('upload_file',array(
            'title'=>$title,
            'contents'=>$contents,
            'file_name'=>$file_name,
            'file_path'=>$file_path
        ));
    }
}

