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
    public function ListarBeneficios()
    {
        $query = $this->db->query("SELECT * FROM sibpdis_beneficios");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else return array();
    }
    public function AgregarBeneficio($Beneficio)
    {
        if ($this->db->insert('sibpdis_beneficios', $Beneficio)) {
            return true;
        } else return false;
    }
    public function AgregarBeneficioPcD($Beneficio)
    {
        if ($this->db->insert('sibpdis_PcD_beneficios', $Beneficio)) {
            return true;
        } else return false;
    }
    public function BeneficiosPcD($nro_registro)
    {
        $query = $this->db->query("SELECT beneficio.nombre_beneficio, beneficio.descripcion_beneficio, bene.fecha_beneficio,bene.costo_estimado
        FROM sibpdis_PcD_beneficios bene, sibpdis_beneficios beneficio
        WHERE bene.id_beneficio = beneficio.id_beneficio and bene.nro_registro = '$nro_registro'");
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else return array();
    }
}
