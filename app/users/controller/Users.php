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
		public function search(){
			if($_SERVER['REQUEST_METHOD'] == 'POST' ){
				$_POST = json_decode(file_get_contents("php://input") , true);
				
				foreach ($this->userModel->searchUser($_POST['value']) as $result){
					$text = "<tr>
								<th scope='row'>$result->documento</th>
								<td>$result->apellido, $result->nombres</td>
								<td class='hidden'>$result->telefono</td>
								<td class='hidden'>$result->email</td>
								<td class='hidden'>$result->area</td>	
								";
					
					if($result->status == 0){
						$text .= "<td class='text-center'><button class='io-actions btn btn-primary entrada' id='registrar-entrada' data-empleado='$result->documento' data-registrador='$_SESSION[userdoc]' data-url='".URL_ROUTE."Inouts/' data-action='registrarEntrada' data-status='0' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Registrar entrada'>Entrada</button></td></tr>"; 
					}
					else{
						$text .= "<td class='text-center'><button class='io-actions btn btn-primary' id='registrar-salida' data-empleado='$result->documento' data-registrador='$_SESSION[userdoc]' data-url='".URL_ROUTE."Inouts/' data-action='registrarSalida' data-status='$result->status' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Registrar salida'>Salida</button></td></tr>";
					} 
					echo $text;
				} 
			}
		}

		public function show(){}

		public function edit(){}

		public function update(){}

		public function delete(){}
	}

?>