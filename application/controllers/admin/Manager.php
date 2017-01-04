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
    $this->load->view('templates/header');
    // $this->load->view('templates/navbar');
    $this->load->view('admin/manager');
    $this->load->view('templates/footer');
  }

}
