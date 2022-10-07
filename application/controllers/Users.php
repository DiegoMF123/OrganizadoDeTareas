<?php
defined('BASEPATH') or exit('No direct script access allowed');
// esta función hace referencia para poder mandar a llamar la vista que
// le queremos mandar.
class Users extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $usuario = $_SESSION["username"];
        $id = trim($_REQUEST["id"]);
        $rol = $_SESSION["role"];
        $this->load->model('model_user');

        if (isset($usuario)) {

            switch ($rol) {
                case '1':
                    redirect('restrinct');
                    break;
                case '2':

                    redirect('restrinct');

                    break;
                case '3':
                    redirect('restrinct');
                    break;
                case '4':

                    redirect('restrinct');

                    break;
                case '5':

                    redirect('restrinct');
                    break;

                default:
                    redirect('restrinct');
                    // code...
                    break;
            }
        }
    }

    public function nuevos()
    {
        // Hace referencia para que pueda cargar la url que se va a usar en el proyecto, si no, no funciona
        $this->load->helper('url');
        // Tenemos esta libreria session para poder mantener cierto tiempo la session abierta
        $this->load->library('session');
        // Cargamos el modelo que vamos a utilizar para esta función nuevo
        $this->load->model('model_user');
        $rol = $_SESSION["role"];
        $usuario = $_SESSION["username"];

        $data["response"] = trim(isset($_REQUEST["response"]));
        $this->load->view('nuevoUsuario', $data);
    }

   

    // Función para guardar los datos del formulario de la vista nuevoasusu
    public function guardardos()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('model_user');

        // Estas variables vienen de las vista nuevoasusu, las letras verdes son los datos quue viene de la vista y las variables CON el signo $ son para declarar las nuevas variables donde mandaras los datos a tu consulta
        $nombre = trim($_REQUEST["nombre"]);
        $usuario = trim($_REQUEST["usuario"]);
        $password = trim($_REQUEST["password"]);
        $correo = trim($_REQUEST["correo"]);
        // si se cumple la funicón para poder guardar los datos, mandamos los respectivos  datos
        if (empty($usuario)) {
            header("Location: http://192.168.0.8:8888/OrganizadoDeTareas");
            die();
        } else {

            $data["guardar"] = $this->model_user->guardar($nombre, $usuario, $password, $correo);
            $this->send($correo);
            // El header es para poder decirle que si se ejecuta lo anterior cambia la url y le agrega la variable respose 1 que
            // es el mensaje de exito que se insertaron los datos
            header("Location: http://192.168.0.8:8888/OrganizadoDeTareas/index.php/users/nuevos?response=1");
            die();
        }
    }


    public function  send($correo)
    {
        /* ================================================= */
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
        $this->load->library('email', $config);
        $this->load->library('parser');

        $correouno = $correo;
        $data['codigoSolicitud'] = "USUARIO";

        $enviar = $this->load->view('plantilla_creacionUsuario', $data, TRUE);

        $this->email->from('boarapp@dtech.com.gt', 'BoardApp');
        $this->email->to($correouno);
        $this->email->subject('USUARIO CREADO CON EXITO');
        $this->email->message($enviar);
        $this->email->send();
        //$this->load->mail();
    }
}
