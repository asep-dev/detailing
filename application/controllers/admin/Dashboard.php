<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('Mail_model');
    }


    public function index()
    {

        $data['list_total'] = $this->Mail_model->count();
        $data['title'] = 'Dashboard';
        render_template_admin('backend/dashboard', $data);
    }
}

/* End of file Dashboard.php */
