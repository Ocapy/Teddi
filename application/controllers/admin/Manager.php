<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (!isset($_SESSION['logged_in'])) {
      header("location: " . base_url('admin'));
    }
  }

  public function index() {
    $this->smarty->assign(array(
      'path' => base_url(),
      'statics' => array(
        'scripts' => array(
          'jquery' => base_url('statics/js/jquery-3.1.1.min.js'),
          'custom' => base_url('statics/js/manager.js')
        ),
        'icons' => array(
          'favicon' => base_url('statics/media/favicon.png'),
          'awesome' => base_url('statics/css/font-awesome.min.css')
        ),
        'css' => array(
          'animate' => base_url('statics/css/animate.css'),
          'app' => base_url('statics/css/app.css')
        )
      )
    ));
    $this->smarty->view('admin/manager.tpl');
  }

  public function menuArray() {

  }

}
