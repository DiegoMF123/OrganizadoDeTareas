<?php
class Model_Tablero extends CI_Model
{

    public function datosTablero()
    {

        $this->load->database();
        $query = $this->db->query("
        select a.id_tablero, a.nombre_tablero, a.fecha_creacion, b.descripcion_estado
        from tablero as a inner join estado b 
        on a.id_estado = b.id_estado;
    
          ");
        return $query->result();
    }

    public function guardarTablero($nombTablero, $descTablero, $tipoTablero, $fecha, $usuarioAplicacion)
    {
        $this->load->database();
        $query = $this->db->query("
        insert into tablero(
            nombre_tablero,
            fecha_creacion,
            id_estado,
            usuario_creacion,
            descripcion
            ) values(
            '" . $nombTablero . "',
            STR_TO_DATE('".$fecha."', '%d-%m-%Y %H:%i:%s'),
            '" . $tipoTablero . "',
            '" . $usuarioAplicacion . "',
            '" . $descTablero . "'
            );
  
        ");
    }
    
    public function listaEstados()
    {
        $this->load->database();
        $query = $this->db->query("
        select id_estado, descripcion_estado from estado limit 2,4;
  
        ");
        return $query->result();
    }

    
}
