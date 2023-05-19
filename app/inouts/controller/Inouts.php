<?php 

	class Inouts extends Controller{
		private $userModel;
		private $inoutModel;

		public function __construct(){
			parent::__construct();
			$this->userModel  = $this->model('User','users');
			$this->inoutModel = $this->model('Inout','inouts');
		}

		public function index(){
			$users = $this->userModel->getUsers();
			$param = ['users' => $users];
			$this->view('index', $param);
        }

		public function registrarEntrada(){
			$_POST = json_decode(file_get_contents("php://input") , true);

			$param = [
				'empleado' => $_POST['empleado'],
				'seguridad' => $_POST['registrador']
			];

			return $this->inoutModel->registroEntrada($param);
		}
	
		public function registrarSalida(){
			echo "salis";
		}
		public function create(){}

		public function store(){}

		public function show(){}

		public function edit(){}

		public function update(){}

		public function delete(){}
	}

?>