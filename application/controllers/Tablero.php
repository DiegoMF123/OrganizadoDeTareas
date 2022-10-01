<?php
defined('BASEPATH') or exit('No direct script access allowed');
// esta función hace referencia para poder mandar a llamar la vista que
// le queremos mandar.

class Tablero extends CI_Controller
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
					$this->load->view('administrador/tablero', $data);
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
			header("Location: http://192.168.0.8:8888/OrganizadoDeTareas/");
			die();
		}
	}



	public function nuevoTablero()
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
					$this->load->view('administrador/nuevoTablero', $data);
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
			header("Location: http://192.168.0.8:8888/OrganizadoDeTareas/");
			die();
		}
	}


	public function guardar()
	{
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('model_tablero');
		//$correlativo = $this->model_solicitud->codigosolisoporte();
		//foreach ($correlativo as $key) {

		//	$rs = $key->idSolicitud;
			// code...
		//}

		$nombTablero = trim($_REQUEST["nombTablero"]);
		$descTablero = trim($_REQUEST["descTablero"]);
		$tipoTablero = trim($_REQUEST["tipoTablero"]);
		$usuarioAplicacion = 1;
		$fecha = date('d-m-Y H:i:s');


		if (empty($usuario)) {

			$data["guardar"] = $this->model_tablero->guardarTablero($nombTablero, $descTablero, $tipoTablero, $fecha, $usuarioAplicacion);

			header("Location:  http://192.168.0.8:8888/OrganizadoDeTareas/index.php/tablero/nuevoTablero?response=1");
			die();
		} else {
			//$data["guardar"] = $this->model_tablero->guardarTablero($nombTablero, $descTablero, $tipoTablero, $fecha, $usuario);
			header("Location:  http://192.168.0.8:8888/OrganizadoDeTareas/index.php/tablero/nuevoTablero?response=1");
			die();
		}
	}

	public function correo()
	{
		$this->load->helper('url');
		$this->load->library('session');
		//$this->load->model('model_tablero');
		//$correlativo = $this->model_solicitud->codigosolisoporte();
		//foreach ($correlativo as $key) {

		//	$rs = $key->idSolicitud;
			// code...
		//}

		$correo = trim($_REQUEST["correo"]);
		
		//$this->solicitud_correo($correo);


		if (empty($usuario)) {

			$data["correoInvitadoCorreo"] = $this->solicitud_correo($correo);

			header("Location:  http://192.168.0.8:8888/OrganizadoDeTareas/index.php/tablero?response=1");
			die();
		} else {
			header("Location:  http://192.168.0.8:8888/OrganizadoDeTareas/index.php/tablero?response=2");
			die();
		}
	}


	public function  solicitud_correo($correo){

		$config = array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.gmail.com',
		  'smtp_port' => 465,
		  'smtp_user' => 'diegisseb@gmail.com',
		  'smtp_pass' => 'bciswelwulsyjqmk',
		  'mailtype' => 'html',
		  'charset' => 'utf-8',
		  'newline' => "\r\n"

	  );


	 $this->load->library('email',$config);

	  $this->load->library('parser');

	//  $correo='diegisseb@gmail.com';

	  $asunto="INVITACIÓN UNIÓN AL TABLERO BOARD_APP";
	  $data ['correlativo'] = 1;

	  $enviar = $this->load->view('plantilla_correo',$data,TRUE);

	//  $enviar= "Señor cuentahabiente,  agradecemos su comunicación,  le informamos que su queja ha sido recibida exitosamente. Para el seguimiento o cualquier consulta relacionada, no olvide que el número de su queja es QMS-Correlativo-Añoactual".$rs;
	  $this->email->from('boarapp@dtech.com.gt');

	  $this->email->to($correo);

	  $this->email->subject($asunto);

	  $this->email->message($enviar);

	  $this->email->send();

	  //echo $this->email->print_debugger();

	  //$this->load->mail();



  }



}
