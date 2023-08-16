<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Bunglon Steel - Professional Structural Steel Detailing Services';
        $data['description'] = 'Bunglon Steel is a specialized company producing detailed Structural Steel and Miscellaneous Erection and Fabrication Shop Drawings located in Indonesia.';
        render_template('pages/home', $data);
    }

    // public function view($page = 'home'){
    //     if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
    //             show_404();
    //     }

    //     switch ($page) {
    //         case 'services':
    //             render_template('pages/services');
    //             break;
    //         case 'about':
    //             render_template('pages/about');
    //             break;
    //         default:
    //             redirect('','refresh');
    //             break;
    //     }
    // }

}

/* End of file Page.php */
