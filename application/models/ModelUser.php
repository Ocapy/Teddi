<?php

class ModelUser extends CI_Model {

  private $tabla = 'usuarios';

  public function __construct() {
    parent::__construct();
  }

  // consulta de inicio de sesion
  public function SignIn($datos) {
    // cada where se concatena como si fuera AND
    $this->db->where('correo', $datos['correo']);
    $this->db->where('clave', $datos['clave']);
    // ejecutamos la consulta a usuarios donde correo y clave coincidan
    $query = $this->db->get($this->tabla);
    $row = $query->row();

    // $this->db->close();
    return $row;
    // retornamos los valores de el usuario

  }

}
