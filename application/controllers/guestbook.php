<?php
class Guestbook extends CI_Controller {
 // function __construct() {
 // parent::Controller();
 // }
 function index() {
   $data = array();
   $data["posted"] = false;
   if( $this->input->post("submit") ) {
     $data = array(
     "name" => $this->input->post("name"),
     "email" => $this->input->post("email"),
     "comment" => $this->input->post("comment")
     );
     if( $this->Guestbook_model->insert( $data ) ) {
       $data["posted"] = true;
     }
   }
  //  $data["entries"] = $this->Guestbook_model->view();
   $this->load->view("guestbook.php", $data);
 }
}
