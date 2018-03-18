<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 13/03/2018
 * Time: 10:37
 */
class domains extends CI_Controller {

    public function index()
    {
        $this->load->model('domain_model');
        $tab = $this->domain_model->domainData();
        $return = array('code' => 200,
            'message' => 'success',
            'dat' => $tab);
        echo json_encode($return, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
    }

    public function help()
    {
        $this->load->helper('Help');
        connect();
    }

}