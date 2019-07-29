<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reference extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('reference_model');
    }

    //디폴트페이지 /reference 다음에 아무것도 없을때
    public function index(){
        $this->load->view('_header');
//        $this->load->view('_menu');
        $this->load->view('_footer');
    }

//    자료실 1
    public function reference_file(){
        $this->load->view('_header');
        $total_reference = $this->reference_model->gets();
        $this->load->view('reference_file',array('total_reference'=>$total_reference));
//        $this->load->view('reference_file');
        $this->load->view('_footer');
    }


    public function insert(){
        $this->load->view('_header');

        //사용자가 입력한 폼의 유효성검증
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title','제목','required');
        $this->form_validation->set_rules('contents','내용','required');


        $config['upload_path'] = './reference/ref1'; // 1. 경로설정 : 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
        $config['allowed_types'] = 'pdf'; // 2. 허용파일확장자 : git,jpg,png 파일만 업로드를 허용한다.

        //FILE업로드 실행
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload("user_upload_file")){ //라이브러리에 있는 do_upload() 실행 후 false라면
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload_receive()->display_errors();
//            $this->load->view('upload_form', $error); //실패한 경우 보여주는 뷰
        }else{
            $data = array('upload_data' => $this->upload->data()); //업로드한 파일에 관련된 모든 데이터를 배열의 형태로 리턴해주는 헬퍼 함수
//            print_r($data);
//            print_r($data['upload_data']['file_path']);
//            print_r($data['upload_data']['file_name']);

            //DB업로드 실행
            if($this->form_validation->run() == FALSE){
                $this->load->view('reference_file');
            }else{
                $this->load->model('reference_model');
                $this->reference_model->insert(
                    $this->input->post('title'),
                    $this->input->post('contents'),
                    $data['upload_data']['file_name'],
                    $data['upload_data']['file_path']
                );
            }
        }
        $this->load->view('_footer');
    }
}
