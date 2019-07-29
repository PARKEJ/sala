<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
    }

    public function main(){ //user뒤에 아무것도 없을 때 호출
        $this->load->view('_header');
        $this->load->view('main');
//        $this->load->view('main', array('topics'=>$data)); //views에 있는 topic.php 파일 호출.
        $this->load->view('_footer');
    }

    public function index()
    {
        $this->load->view('_header');
//        $this->load->view('_menu');
        $total_user = $this->user_model->gets(); //gets()에서 리턴 된 값은$data
        $this->load->view('index',array('total_user'=>$total_user));
//        $this->load->view('index',$total_user);
//        $this->load->view('index',json_decode(json_encode($total_user),true));

        $this->load->view('_footer');
    }

    public function employee()
    {
        $this->load->view('_header');
        $total_user = $this->user_model->gets(); //gets()에서 리턴 된 값은$data
        $this->load->view('employee',array('total_user'=>$total_user));
        $this->load->view('_footer');
    }

    public function myinfo($year=NULL,$month=NULL)
    {
        $this->load->view('_header');
        $this->load->model('user_model');
        $data['calender'] = $this->user_model->getcalender($year,$month);
        $this->load->view('myinfo',  $data);
        $this->load->view('_footer');
    }
}
