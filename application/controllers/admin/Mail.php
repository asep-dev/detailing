<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mail_model');
    }
    

    public function index()
    {
        check_login();
        $this->load->library('pagination');
        $total_row = $this->Mail_model->count();

        $config['base_url'] = base_url('/admin/mail');
        $config['total_rows'] = $total_row['total_email'];
        $config['page_query_string'] = TRUE;
        $config['per_page'] = 5;

        // Styling
        $config['full_tag_open'] = '<nav class="mt-3"><ul class="pagination justify-content-end">';
        $config['full_tag_close'] = '</ul></nav>';
    
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li class="page-item next">';
        $config['next_tag_close']   = '</li>';
        $config['prev_tag_open']    = '<li class="page-item prev">';
        $config['prev_tag_close']   = '</li>';
        $config['first_tag_open']   = '<li class="page-item first">';
        $config['first_tag_close']  = '</li>';
        $config['last_tag_open']    = '<li class="page-item last">';
        $config['last_tag_close']   = '</li>';

        $config['next_link'] = '<i class="tf-icon bx bx-chevrons-right"></i>';
        $config['prev_link'] = '<i class="tf-icon bx bx-chevrons-left"></i>';
        $config['first_link'] = '<i class="tf-icon bx bx-chevron-right"></i>';
        $config['last_link'] = '<i class="tf-icon bx bx-chevron-left"></i>';

        $this->pagination->initialize($config);

        $limit = $config['per_page'];
        $offset = html_escape($this->input->get('per_page'));
    
        $data['list_email'] = $this->Mail_model->get($limit, $offset);
        $data['title'] = 'Mail Box';
        render_template_admin('backend/mail', $data);
    }

    public function send_mail(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('message', 'Message Body', 'trim');

        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            if ($this->form_validation->run() == false) {
                $message = [
                    'status' => 'error',
                    'error' => [
                        'email' => form_error('email','<small class="text-danger">', '</small>'),
                        'subject' => form_error('subject','<small class="text-danger">', '</small>'),
                        'body' => form_error('message','<small class="text-danger">', '</small>'),
                        'csrf' => $this->security->get_csrf_hash()
                    ]
                ];
            } else {

                $email      = $this->input->post('email', TRUE);
                $subject    = $this->input->post('subject', TRUE);
                $body       = $this->input->post('message', TRUE);

                $data = [
                    'email' => strip_tags(htmlspecialchars($email)),
                    'subject' => strip_tags(htmlspecialchars($subject)),
                    'message_body' => strip_tags(htmlspecialchars($body)),
                    'is_read' => 0
                ];
                $this->Mail_model->insert($data);
                $message = [
                    'status' => 'success',
                    'data' => [
                        'message' => 'Thank you for sending us a message, we will get back to you as soon as possible.',
                        'csrf' => $this->security->get_csrf_hash()
                    ]
                ];
            }
            echo json_encode($message);
        }
    }

    public function action_mail($type = 'baca', $id = ''){
        check_login();
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $target = $this->Mail_model->get_mail_by_id($id);
            if ($type == 'remove') {
                if ($target) {
                    $this->Mail_model->delete($id);
                    $message = [
                        'status' => 'success',
                        'data' => [
                            'title' => 'Berhasil',
                            'pesan' => 'Pesan berhasil dihapus.'
                        ]
                    ];
                } else {
                    $message = [
                        'status' => 'error',
                        'error' => [
                            'title' => 'Gagal',
                            'pesan' => 'Gagal menghapus pesan atau pesan tidak ada.'
                        ]
                    ];
                }
            } else if($type == 'baca') {
                if ($target) {
                    $this->Mail_model->update($id, ['is_read' => 1]);
                    $message = [
                        'status' => 'success',
                        'data' => [
                            'title' => 'Berhasil',
                            'pesan' => 'Pesan berhasil dibaca.'
                        ]
                    ];
                } else {
                    $message = [
                        'status' => 'error',
                        'error' => [
                            'title' => 'Gagal',
                            'pesan' => 'Gagal pesan tidak ada.'
                        ]
                    ];
                }
            }
            echo json_encode($message);
        }
    }

}

/* End of file Mail.php */
