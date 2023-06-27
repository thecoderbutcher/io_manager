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
				'empleado'    => $this->userModel->getUserId(intval($_POST['empleado'])),
				'registrador' => $this->userModel->getUserId(intval($_POST['registrador']))
			];

			$param['fecha']      = $this->inoutModel->registroEntrada($param);
			$param['id_entrada'] = $this->inoutModel->getRegistroEntradaId($param);
			
			$this->inoutModel->changeStatus($param);
			
			echo $param['id_entrada'];
		}
	
		public function registrarSalida(){
			$_POST = json_decode(file_get_contents("php://input") , true);
			
			$param = [
				'empleado'    => $this->userModel->getUserId(intval($_POST['empleado'])),
				'registrador' => $this->userModel->getUserId(intval($_POST['registrador'])),
				'id_entrada'  => intval($_POST['dataStatus'])
			];			
			$this->inoutModel->registroSalida($param);

			$param['id_entrada'] =  0;
			$this->inoutModel->changeStatus($param);
			
			echo 0;
		}

		public function create(){}

		public function store(){}

		public function show(){}

		public function edit(){}

		public function update(){}

		public function delete(){}
	}

?>