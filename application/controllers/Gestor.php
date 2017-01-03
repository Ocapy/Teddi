<?php

  class Gestor extends CI_Controller {

    public function __construct() {

      parent::__construct();
      if (!isset($_SESSION['logged_in'])) {
        header("location: " . base_url('App'));
      }
    }

    public function index() {

      echo "Hola soy el gestor ".$_SESSION['id']." <a href='" . base_url('App/SignOut') . "'>cerrar</a>";

    }



  }
