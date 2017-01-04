<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (isset($_SESSION['logged_in'])) {
      header("location: " . base_url('admin/Manager'));
    }
  }

  public function index() {

    $this->load->view('templates/header');
    $this->load->view('admin/login');
    $data['script'] = base_url('statics/js/login.js');
    $this->load->view('templates/footer',$data);

  }

  public function Sign() {

    $this->load->model('ModelUser');
    $result = $this->ModelUser->SignIn($_POST);
    if (isset($result)) {
      $newdata = array(
        'id'        => $result->id,
        'correo'    => $result->correo,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($newdata);
      $alerta['mensaje'] = "<span><b><i class=\'fa fa-check\'></i> Correcto:</b> Te estamos redireccionado</span>";
      $alerta['clase'] = "green black-text";
    } else {
      $alerta['mensaje'] = "<span><b><i class=\'fa fa-exclamation\'></i> Error:</b> No coinciden el email o la Password</span>";
      $alerta['clase'] = "red black-text";
    }
    print_r(json_encode($alerta));
  }

  public function SignOut() {

    $items = array('id', 'correo', 'logged_in');
    $this->session->unset_userdata($items);
    header("location: " . base_url('admin'));
  }


}
