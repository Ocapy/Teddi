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

    $this->smarty->assign(array(
      'path' => base_url(),
      'statics' => array(
        'scripts' => array(
          'jquery' => base_url('statics/js/jquery-3.1.1.min.js'),
          'custom' => base_url('statics/js/login.js'),
        ),
        'icons' => array(
          'favicon' => base_url('statics/media/favicon.png'),
          'awesome' => base_url('statics/css/font-awesome.min.css'),
        ),
        'css' => array(
          'animate' => base_url('statics/css/animate.css'),
          'app' => base_url('statics/css/app.css'),
        )
      )
    ));
    $this->smarty->view('admin/login.tpl');
  }

  public function SignIn() {

    $this->load->model('ModelUser');
    $result = $this->ModelUser->SignIn($_POST);
    if (isset($result)) {
      $newdata = array(
        'id'        => $result->id,
        'correo'    => $result->correo,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($newdata);
      $alerta['mensaje'] = "Te estamos redireccionado";
      $alerta['titulo'] = "<b><i class=\'fa fa-check\'></i> Correcto:</b>";
      $alerta['clase'] = "alert-success";
    } else {
      $alerta['mensaje'] = "Email o Password incorrecta";
      $alerta['titulo'] = "<b><i class=\'fa fa-exclamation\'></i> Error:</b>";
      $alerta['clase'] = "alert-danger";
    }
    print_r(json_encode($alerta));
  }

  public function SignOut() {

    $items = array('id', 'correo', 'logged_in');
    $this->session->unset_userdata($items);
    header("location: " . base_url('admin'));
  }


}
