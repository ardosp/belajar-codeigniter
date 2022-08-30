<?php 

class Overview extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //load view admin/overview.php
        // $this->load->view('admin/overview');

        $url="36.66.184.26:8002/api/bjtg/rekruitmen/getCardList";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);
        // print_r($data);

        $data_array = array(
        'datalist' => $data
        );
        // $this->load->view('json/json_list',$data_array);
        $this->load->view('admin/overview',$data_array);


    }
}



?>