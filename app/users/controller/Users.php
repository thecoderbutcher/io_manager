<?php 

	class Users extends Controller{
		private $userModel;
		private $areaModel;
		private $rolModel;

		public function __construct(){
			parent::__construct();
			$this->userModel = $this->model('User');
			$this->areaModel = $this->model('Area','areas');
			$this->rolModel = $this->model('Rol', 'roles');
		}

		public function index(){
			$param = [
				'users' => $this->userModel->getUsers(), 
				'areas' => $this->areaModel->getAreas(),
				'roles' => $this->rolModel->getRoles()
			];
			$this->view('index', $param);
			
		}

		public function create(){}

		public function store(){
			if($_SERVER['REQUEST_METHOD'] == 'POST' ){
				$_POST = json_decode(file_get_contents("php://input") , true); 		
				return $this->userModel->create($_POST);  
			}
		}

		public function show(){}

		public function edit(){}

		public function update(){}

		public function delete(){}
	}

?>