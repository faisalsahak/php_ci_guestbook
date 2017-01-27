<?php
class Guestbook extends CI_Controller {
 // function __construct() {
 // parent::Controller();
 // }
 function index() {
   $data = array();
   $data["posted"] = false;
   if( $this->input->post("submit") ) {
    
  //  $data["entries"] = $this->Guestbook_model->view();
   $this->load->view("guestbook.php", $data);
 }
}
