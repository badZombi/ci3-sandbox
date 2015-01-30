<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Template{
      var $ci;

      function __construct()
      {
         $this->ci =& get_instance();
      }


   function load($data){

        if(!isset($data['template'])){
            $template = $this->ci->config->item('template');
        } else {
            $template = $data['template'];
        }

        $body_view = $data['view'];

       if ( ! is_null( $body_view ) ){
          if ( file_exists( VIEWPATH.'/'.$template.'/'.$body_view.'.php' ) ) {
             $body_view_path = $template.'/'.$body_view;
          } else {
             show_error('Unable to load the requested file: *views*/' .$template.'/'.$body_view.'.php');
          }

          $data['body'] = $this->ci->load->view($body_view_path, $data, TRUE);
          $data['tpl_path'] = 'templates/'.$template.'/';
          $data['tpl_files'] = $template.'/';

        } else {
            show_error("You didn't include a view");
        }

       $this->ci->load->view( $data['tpl_path'].'tpl' , $data);

    }

}