<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrador_model extends CI_Model
{
    public function BuscarPcD($nro_registro)
    {
        $query = $this->db->query("SELECT * FROM sibpdis_personas_discapacidad WHERE nro_registro = '$nro_registro'");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else return null;
    }
    public function ObtenerVariablesCruzadas($nro_registro)
    {
        $query = $this->db->query("SELECT * FROM sibpdis_variables_cruzadas WHERE nro_registro = '$nro_registro'");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else return null;
    }
    public function ObtenerEducacion($nro_registro)
    {
        $query = $this->db->query("SELECT * FROM sibpdis_educacion WHERE nro_registro = '$nro_registro'");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else return null;
    }
    public function ObtenerCarnetizado($nro_registro)
    {
        $query = $this->db->query("SELECT * FROM sibpdis_carnetizados WHERE nro_registro = '$nro_registro'");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else return null;
    }
    public function ObtenerLeenEscriben($nro_registro)
    {
        $query = $this->db->query("SELECT * FROM sibpdis_leen_escriben WHERE nro_registro = '$nro_registro'");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else return null;
    }
    public function ObtenerRehabilitacion($nro_registro)
    {
        $query = $this->db->query("SELECT * FROM sibpdis_rehabilitacion WHERE nro_registro = '$nro_registro'");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else return null;
    }
    public function BuscarRegistro($registro)
    {
        $query = $this->db->query("SELECT * from sibpdis_personas_discapacidad 
        WHERE ap_paterno like '$registro' or  
        ap_materno like '$registro' 
        or 
        nombres like '$registro' 
        or 
        nro_registro like '$registro' 
        or  
        ci like '$registro' 
        ORDER BY ap_paterno,ap_materno,nombres ");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else return null;
    }
}
