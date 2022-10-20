<?php
defined('BASEPATH') or exit('No direct script access allowed');
// esta función hace referencia para poder mandar a llamar la vista que
// le queremos mandar.

class Tareas extends CI_Controller
{

    public function index()
	{
		// Hace referencia para que pueda cargar la url que se va a usar en el proyecto, si no, no funciona
		$this->load->helper('url');
		// Tenemos esta libreria session para poder mantener cierto tiempo la session abierta
		$this->load->library('session');
		$usuario = $_SESSION["username"];
		$this->load->model('model_tablero');

		// Esta varaible rol, almacena el tipo de rol que se va a estar logeando en el switch con los cases, dependiendo el rol,
		// mostrará las vistas respectivas.
		$rol = $_SESSION["role"];

		if (isset($usuario)) {

			switch ($rol) {

				case '1':
					$data["response"]=trim(isset($_REQUEST["response"]));
					$data["datosTablero"] = $this->model_tablero->datosTablero();
					$this->load->view('administrador/tareas', $data);
					break;

				case '2':
					$data["response"]=trim(isset($_REQUEST["response"]));
					$data["datosTablero"] = $this->model_tablero->datosTablero();
					$this->load->view('administrador/tareas', $data);
					break;



				default:
					// si se ingresa un rol no creado, no mostrara pantalla principal
					$redirect = base_url() . "/index.php/welcome/login";
					// code...
					redirect('/login');
					break;
			}
		} else {
			// Si no se cumple, seguirá mostrando el login
			header("Location: http://127.0.0.1:8888/OrganizadoDeTareas/");
			die();
		}
	}


    public function nuevaTarea()
	{
		// Hace referencia para que pueda cargar la url que se va a usar en el proyecto, si no, no funciona
		$this->load->helper('url');
		// Tenemos esta libreria session para poder mantener cierto tiempo la session abierta
		$this->load->library('session');
		$usuario = $_SESSION["username"];
		$this->load->model('model_tablero');
		// Esta varaible rol, almacena el tipo de rol que se va a estar logeando en el switch con los cases, dependiendo el rol,
		// mostrará las vistas respectivas.
		$rol = $_SESSION["role"];

		if (isset($usuario)) {

			switch ($rol) {

				case '1':

					$data["listaEstados"] = $this->model_tablero->listaEstados();
					$data["response"]=trim(isset($_REQUEST["response"]));
					$this->load->view('administrador/crearTarea', $data);
					break;

				case '2':
					$data["datosmuestra"] = $this->Model_Muestra->datosmuestra();
					$this->load->view('usuinterno/principal', $data);
					break;



				default:
					// si se ingresa un rol no creado, no mostrara pantalla principal
					$redirect = base_url() . "/index.php/welcome/login";
					// code...
					redirect('/login');
					break;
			}
		} else {
			// Si no se cumple, seguirá mostrando el login
			header("Location: http://127.0.0.1:8888/OrganizadoDeTareas/");
			die();
		}
	}

    public function listarTareas()
	{
		// Hace referencia para que pueda cargar la url que se va a usar en el proyecto, si no, no funciona
		$this->load->helper('url');
		// Tenemos esta libreria session para poder mantener cierto tiempo la session abierta
		$this->load->library('session');
		$usuario = $_SESSION["username"];
		$this->load->model('model_tablero');
		// Esta varaible rol, almacena el tipo de rol que se va a estar logeando en el switch con los cases, dependiendo el rol,
		// mostrará las vistas respectivas.
		$rol = $_SESSION["role"];

		if (isset($usuario)) {

			switch ($rol) {

				case '1':

					$data["listaEstados"] = $this->model_tablero->listaEstados();
					$data["response"]=trim(isset($_REQUEST["response"]));
					$this->load->view('administrador/listadoDeTareas', $data);
					break;

				case '2':
					$data["listaEstados"] = $this->model_tablero->listaEstados();
					$data["response"]=trim(isset($_REQUEST["response"]));
					$this->load->view('administrador/listadoDeTareas', $data);
					break;



				default:
					// si se ingresa un rol no creado, no mostrara pantalla principal
					$redirect = base_url() . "/index.php/welcome/login";
					// code...
					redirect('/login');
					break;
			}
		} else {
			// Si no se cumple, seguirá mostrando el login
			header("Location: http://127.0.0.1:8888/OrganizadoDeTareas/");
			die();
		}
	}

}
