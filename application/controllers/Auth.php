<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
    public function index(){
		
		if ($this->session->userdata('email')) {
			redirect('admin/dashboard');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$email = strip_tags(html_escape($this->input->post('email', TRUE)));
			$password = strip_tags(html_escape($this->input->post('password', TRUE)));
			$user = $this->db->get_where('users', ['email' => $email])->row_array();

			if ($user) {
				if (password_verify($password, $user['password'])) {
					$this->session->set_userdata('email', $user['email']);
					redirect('admin/dashboard');
				} else {
					$this->session->set_flashdata(
						'message', 
						'<div class="alert alert-danger alert-dismissible fs-7 py-2_5" role="alert">
							Password salah, ulangi lagi.
						</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata(
                    'message', 
                    '<div class="alert alert-danger alert-dismissible fs-7 py-2_5" role="alert">
                        Alamat email tidak ada.
                    </div>');
				redirect('auth');
			}
		}
	}

	public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata(
			'message', 
			'<div class="alert alert-primary alert-dismissible fs-7 py-2_5" role="alert">
				Anda berhasil logout.
			</div>');
        redirect('auth');
    }

	public function blocked()
    {
        $this->load->view('blocked');
    }

}

/* End of file Auth.php */
