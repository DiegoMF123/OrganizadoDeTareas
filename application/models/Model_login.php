<?php
class Model_Login extends CI_Model
{

  public function login($user,$pass){

    $this->load->database();
    $query = $this->db->query("
        select id_usuario, usuario, nombre_usuario, correo, contrasenia, id_estado, id_rol from usuario
        where usuario ='".$user."'
        and contrasenia='".$pass."'
      ");
    return $query->result();

  }



}


 ?>
