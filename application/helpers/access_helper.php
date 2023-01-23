<?php

if (!function_exists('access')) {

	function check_login() {
        $ci=  &get_instance();
        if (!$ci->session->userdata('email')) {
            redirect('auth');
        }
	}
}