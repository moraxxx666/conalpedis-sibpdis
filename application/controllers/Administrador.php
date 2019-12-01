<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Administrador extends CI_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->load->model('administrador_model', '', TRUE);
    }
    public function login()
    {
        $usuario =  $this->input->post('usuario');
        $contrasena = $this->input->post('contrasena');
        if ($this->ion_auth->login($usuario, $contrasena, false) && $this->ion_auth->is_admin()) {
            redirect('Administrador/Buscar');
        } else {
            $this->session->set_flashdata('mensaje', 'Usuario o Contraseña incorrecta intentalo de nuevo');
            redirect('/Inicio');
        }
    }
    public function logout()
    {

        $this->ion_auth->logout();
        redirect('/Inicio');
    }
    public function Buscar()
    {


        if ($this->ion_auth->logged_in()) {
            $query = $this->input->get('query');
            if (isset($query)) {
                $data['personas_discapacidad'] = $this->administrador_model->BuscarRegistro($query);
            }
            $data['usuario'] = $this->ion_auth->user()->row();


            $this->load->view('administrador/Header', $data);
            $this->load->view('administrador/Styles');
            $this->load->view('administrador/NavBar');
            $this->load->view('administrador/Inicio', $data);
            $this->load->view('publico/Footer');
            $this->load->view('administrador/Scripts');
        } else {
            $this->session->set_flashdata('mensaje', 'Necesitas Iniciar Sesion');
            redirect('/Inicio');
        }
    }
    public function PcD($nro_registro)
    {
        if ($this->ion_auth->logged_in()) {

            if (isset($nro_registro) && $this->administrador_model->BuscarPcD($nro_registro) != null) {
                $data['usuario'] = $this->ion_auth->user()->row();
                $data['PcD'] = $this->administrador_model->BuscarPcD($nro_registro);
                $data['extra'] = $this->administrador_model->ObtenerVariablesCruzadas($nro_registro);
                $data['carnetizado'] = $this->administrador_model->ObtenerCarnetizado($nro_registro);
                $data['educacion'] = $this->administrador_model->ObtenerEducacion($nro_registro);
                $data['leen'] = $this->administrador_model->ObtenerLeenEscriben($nro_registro);
                $data['rehabilitacion'] = $this->administrador_model->ObtenerRehabilitacion($nro_registro);
                $data['beneficios'] = $this->administrador_model->BeneficiosPcD($nro_registro);
                
                $this->load->view('administrador/Header', $data);
                $this->load->view('administrador/Styles');
                $this->load->view('administrador/NavBar');
                $this->load->view('administrador/PcD', $data);
                $this->load->view('publico/Footer');
                $this->load->view('administrador/Scripts');
            } else {
                $this->session->set_flashdata('mensaje', 'No se Encuentra el Registro');
                redirect('Administrador/Buscar');
            }
        } else {
            $this->session->set_flashdata('mensaje', 'Necesitas Iniciar Sesion');
            redirect('/Inicio');
        }
    }
    public function Beneficios()
    {
        if ($this->ion_auth->logged_in()) {
            $data['usuario'] = $this->ion_auth->user()->row();
            $data['beneficios'] = $this->administrador_model->ListarBeneficios();
            $this->load->view('administrador/Header', $data);
            $this->load->view('administrador/Styles');
            $this->load->view('administrador/NavBar');
            $this->load->view('administrador/AgregarBeneficio', $data);
            $this->load->view('publico/Footer');
            $this->load->view('administrador/Scripts');
        } else {
            $this->session->set_flashdata('mensaje', 'Necesitas Iniciar Sesion');
            redirect('/Inicio');
        }
    }
    public function NuevoBeneficio()
    {
        if ($this->ion_auth->logged_in()) {
            $NombreBeneficio = $this->input->post('NombreBeneficio');
            $DescripcionBeneficio = $this->input->post('DescripcionBeneficio');
            if (empty($NombreBeneficio) || empty($DescripcionBeneficio)) {
                $this->session->set_flashdata('mensaje', 'Todos los Campos Son Obligatorios');
                redirect('/Administrador/Beneficios');
            } else {
                $Beneficio = array(
                    "nombre_beneficio" => $NombreBeneficio,
                    "descripcion_beneficio" => $DescripcionBeneficio
                );
                if ($this->administrador_model->AgregarBeneficio($Beneficio)) {
                    $this->session->set_flashdata('mensaje', 'Beneficio Agregado Correctamente');
                    redirect('/Administrador/Beneficios');
                }else{
                    $this->session->set_flashdata('mensaje', 'Error al Agregar el Beneficio');
                    redirect('/Administrador/Beneficios');
                }
            }
        } else {
            $this->session->set_flashdata('mensaje', 'Necesitas Iniciar Sesion');
            redirect('/Inicio');
        }
    }
    public function AgregarBeneficioPcD()
    {
        if ($this->ion_auth->logged_in()) {
            $nro_registro = $this->input->post("nro_registro");
            $fecha_beneficio = $this->input->post("fecha_beneficio");
            $costo_estimado = $this->input->post("costo_estimado");
            $id_beneficio = $this->input->post("id_beneficio");
            if (empty($nro_registro) || empty($fecha_beneficio) || empty($id_beneficio)) {
                $this->session->set_flashdata('mensaje', 'Todos los Campos Son Obligatorios');
                redirect('/Administrador/Beneficios');
            } else {
                $Beneficio = array(
                    "nro_registro" => $nro_registro,
                    "fecha_beneficio" => $fecha_beneficio,
                    "costo_estimado" =>$costo_estimado,
                    "id_beneficio" => $id_beneficio
                );
                if ($this->administrador_model->AgregarBeneficioPcD($Beneficio)) {
                    $this->session->set_flashdata('mensaje', 'Beneficio Agregado a PcD Correctamente');
                    redirect('/Administrador/Beneficios');
                }else{
                    $this->session->set_flashdata('mensaje', 'Error al Agregar el Beneficio a PcD');
                    redirect('/Administrador/Beneficios');
                }
            }
        } else {
            $this->session->set_flashdata('mensaje', 'Necesitas Iniciar Sesion');
            redirect('/Inicio');
        }
    }
}
