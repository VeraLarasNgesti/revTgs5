<?php
Class pelanggan extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="https://mayaaul.000webhostapp.com/server/server/index.php";
    }
    
    // menampilkan data pelanggan
    function index(){
        $data['pelanggan'] = json_decode($this->curl->simple_get($this->API.'/pelanggan'));
        $this->load->view('pelanggan/list',$data);
    }
    
    // insert data pelanggan
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_pel'       =>  $this->input->post('id_pel'),
                'nama_pel'      =>  $this->input->post('nama_pel'),
                'no_hp'=>  $this->input->post('no_hp'),
			
                'alamat_pel'    =>  $this->input->post('alamat_pel'));
            $insert =  $this->curl->simple_post($this->API.'/pelanggan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('pelanggan');
        }else{
            $data['no_hp'] = json_decode($this->curl->simple_get($this->API.'/no_hp'));
            $this->load->view('pelanggan/create',$data);
        }
    }
    
    // edit data pelanggan
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_pel'       =>  $this->input->post('id_pel'),
                'nama_pel'      =>  $this->input->post('nama_pel'),
                'no_hp'=>  $this->input->post('no_hp'),
				
                'alamat_pel'    =>  $this->input->post('alamat_pel'));
            $update =  $this->curl->simple_put($this->API.'/pelanggan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('pelanggan');
        }else{
            $data['no_hp'] = json_decode($this->curl->simple_get($this->API.'/no_hp'));
            $params = array('id_pel'=>  $this->uri->segment(3));
            $data['pelanggan'] = json_decode($this->curl->simple_get($this->API.'/pelanggan',$params));
            $this->load->view('pelanggan/edit',$data);
        }
    }
    
    // delete data pelanggan
    function delete($id_pel){
        if(empty($id_pel)){
            redirect('pelanggan');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/pelanggan', array('id_pel'=>$id_pel), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('pelanggan');
        }
    }
}