<?php 

	class Areas extends Controller{
		private $areaModel;

		public function __construct(){
			parent::__construct();
			$this->areaModel = $this->model('Area');
		}

		public function index(){
			$areas = $this->areaModel->getAreas();
			$param = ['areas' => $areas];
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