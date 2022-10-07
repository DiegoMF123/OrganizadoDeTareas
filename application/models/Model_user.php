<?php
class Model_User extends CI_Model
{

    public function guardar($nombre, $usuario, $password, $correo)
    {
  
      $this->load->database();
  
      $query = $this->db->query("
  
    insert into usuario(
     usuario,
     nombre_usuario,
     correo,
     contrasenia,
     id_estado,
     id_rol
     )values(
       '" . $usuario . "',
       '" . $nombre . "',
       '" . $correo . "',
       '" . $password . "',
       1,
       2
       )
  
    ");
    }

 


}
