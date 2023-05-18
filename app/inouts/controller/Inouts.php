<?php 

	class Inouts extends Controller{
		private $userModel;

		public function __construct(){
			parent::__construct();
			$this->userModel = $this->model('User','users');
		}

		public function index(){
			$users = $this->userModel->getUsers();
			$param = ['users' => $users];
			$this->view('index', $param);
        }

		public function registrarEntrada(){
			echo "entrai";
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