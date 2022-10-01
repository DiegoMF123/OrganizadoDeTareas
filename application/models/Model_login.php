<?php
class Model_Login extends CI_Model
{

  public function login($user,$pass){

    $this->load->database();
    $query = $this->db->query("
        select id_usuario, usuario, nombre_usuario, correo, contrasenia, id_estado, id_rol from usuario
        where correo ='".$user."'
        and contrasenia='".$pass."'
      ");
    return $query->result();

  }

  public function validar_correo($correo)
  {
    $this->load->database();
    $query = $this->db->query("
      select usuario, correo, nombre_usuario
      from usuario
      where correo = '" . $correo . "'
      ");
    return $query->result();
  }

  public function  password_update($pass, $nombre, $correo)
  {
    $this->load->database();
    $query = $this->db->query("
        update usuario
          set
          contrasenia = '" . $pass . "'
          where
          nombre_usuario ='" . $nombre . "'
          and
          correo ='" . $correo . "'
        ");
  }



}
