<?php


class MY_Controller extends CI_Controller {

    function __construct(){
        parent::__construct();

        if($this->config->item('offline_mode') == TRUE){
             redirect('offline');
        }

        if($this->config->item('block_by_ip') == TRUE){
            $this->load->model('ipblock');

            if($this->ipblock->check_ip() == FALSE){
                redirect('ip_block');
            }
        }

        //$this->pages_menu = $this->cache->model('general_m', 'get_menu', array(), 900); //cache for 15 min

        $dont_remember = array(
            'auth', 'login', 'signin', 'signup', 'forgot', 'logout'
        );

        if(!in_array($this->uri->segment(1), $dont_remember)){
            //$this->session->set_flashdata('last_page', $this->uri->uri_string());
        }
        /*
        foreach($this->config->item('css') as $css){
            $this->carabiner->css( $css );
        }

        foreach($this->config->item('js') as $js){
            $this->carabiner->js( $js );
        }
        */

    }


}
