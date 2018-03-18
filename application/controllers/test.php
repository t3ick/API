<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 14/03/2018
 * Time: 09:03
 */


class test extends CI_Controller {

    public function vue()
    {
        $this->load->view('Welcome_message');
    }

}