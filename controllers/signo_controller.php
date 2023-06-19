<?php

//esqueleto de UsuarioController, después rellenaremos las funciones de CRUD
class SignoController
	{	

		public function __construct(){}

        //Para llamar a las vistas
        public function index(){
            header('Location: views/signos/index.php');
        }

        //Funciones para hacer con los objetos
	}



	if(isset($_POST['action'])){
		$signoController = new SignoController();
		require_once('../models/signo.php');
		require_once('../ddbb/connection.php');

        switch ($_POST['action']) {
            case 'buscar':
                break;
            default:
                require_once('views/usuario/error.php');
                break;
        }
		
	}
?>