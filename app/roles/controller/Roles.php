<?php 

	class Roles extends Controller{
		private $rolesModel;

		public function __construct(){
			parent::__construct();
			$this->rolesModel = $this->model('Rol', 'roles');
		}

		public function index(){ 
			$param = ['roles' => $this->rolesModel->getRoles()];
			$this->view('index', $param);
			
		}

		public function create(){}

		public function store(){}

		public function show(){}

		public function edit(){}

		public function update(){}

		public function delete(){}
	}

?>