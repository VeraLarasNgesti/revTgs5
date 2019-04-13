<?php
use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
 
class pelanggan extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data pelanggan
    function index_get() {
        $id_pel = $this->get('id_pel');
        if ($id_pel == '') {
            $pelanggan = $this->db->get('pelanggan')->result();
        } else {
            $this->db->where('id_pel', $id_pel);
            $pelanggan = $this->db->get('pelanggan')->result();
        }
        $this->response($pelanggan, 200);
    }
 
    // insert new data to pelanggan
    function index_post() {
        $data = array(
                    'id_pel'           => $this->post('id_pel'),
                    'nama_pel'          => $this->post('nama_pel'),
                    'nama_pel'    => $this->post('nama_pel'),
                    'no_hp'        => $this->post('no_hp'));
        $insert = $this->db->insert('pelanggan', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data pelanggan
    function index_put() {
        $id_pel = $this->put('id_pel');
        $data = array(
                    'id_pel'       => $this->put('id_pel'),
                    'nama_pel'      => $this->put('nama_pel'),
                    'nama_pel'=> $this->put('nama_pel'),
                    'no_hp'    => $this->put('no_hp'));
        $this->db->where('id_pel', $id_pel);
        $update = $this->db->update('pelanggan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete pelanggan
    function index_delete() {
        $id_pel = $this->delete('id_pel');
        $this->db->where('id_pel', $id_pel);
        $delete = $this->db->delete('pelanggan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}