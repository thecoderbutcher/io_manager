<?php 

	class Elecciones extends Controller{
		private $eleccionModel;
		public function __construct(){
			parent::__construct();
			$this->eleccionModel = $this->model('Eleccion'); 
		}

		public function index(){
			$param = [
				'gobernador' => $this->eleccionModel->obtenerDatosGobernador(),  
				'diputado' => $this->eleccionModel->obtenerDatosDiputado(), 
				'concejal' => $this->eleccionModel->obtenerDatosConcejal(), 
				'intendente' => $this->eleccionModel->obtenerDatosIntendente(), 
				'contralor' => $this->eleccionModel->obtenerDatosContralor()
			];
			$this->view('index', $param);
        }

		public function guardarGobernador(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['guardarGob'])){
				$param = [
					"csobres" 		=> $_POST['csobres']	 == "" ? 0: intval($_POST['csobres']),
					"mesa" 	 		=> $this->eleccionModel->getMesaId($_POST['mesa'])->id_mesa,
					"lista10" 		=> $_POST['10']	  	 	 == "" ? 0: intval($_POST['10']),
					"lista16"	 	=> $_POST['16']	  	 	 == "" ? 0: intval($_POST['16']),
					"lista27" 		=> $_POST['27']	 	 	 == "" ? 0: intval($_POST['27']),
					"lista48" 		=> $_POST['48']	  	 	 == "" ? 0: intval($_POST['48']),
					"lema801" 		=> $_POST['801']	     == "" ? 0: intval($_POST['801']),
					"lista71" 		=> $_POST['71']	  	 	 == "" ? 0: intval($_POST['71']),
					"lista73" 		=> $_POST['73']  	  	 == "" ? 0: intval($_POST['73']),
					"lema802" 		=> $_POST['802']    	 == "" ? 0: intval($_POST['802']),
					"lista200" 		=> $_POST['200']   	 	 == "" ? 0: intval($_POST['200']),
					"lema803" 		=> $_POST['803']    	 == "" ? 0: intval($_POST['803']),
					"lista201" 		=> $_POST['201']  	 	 == "" ? 0: intval($_POST['201']),
					"lema804" 		=> $_POST['804']       	 == "" ? 0: intval($_POST['804']),
					"tvalidos" 		=> $_POST['tvalidos'] 	 == "" ? 0: intval($_POST['tvalidos']),
					"vnulos" 		=> $_POST['vnulos']      == "" ? 0: intval($_POST['vnulos']),
					"vrecurridos" 	=> $_POST['vrecurridos'] == "" ? 0: intval($_POST['vrecurridos']),
					"viimpugnada" 	=> $_POST['viimpugnada'] == "" ? 0: intval($_POST['viimpugnada']),
					"vblanco" 		=> $_POST['vblanco'] 	 == "" ? 0: intval($_POST['vblanco'])
				];
				$this->eleccionModel->certificarGob($param);
				redirect('elecciones/index');
				return $this->view('index');
			}
		}
		public function guardarDiputado(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['guardarDip'])){
				$param = [
					"csobres" 		=> $_POST['csobres']	 == "" ? 0: intval($_POST['csobres']),
					"mesa" 	 		=> $this->eleccionModel->getMesaId($_POST['mesa'])->id_mesa,
					"lista10" 		=> $_POST['10']	  	 	 == "" ? 0: intval($_POST['10']),
					"lista17"	 	=> $_POST['17']	  	 	 == "" ? 0: intval($_POST['17']),
					"lista21" 		=> $_POST['21']	 	 	 == "" ? 0: intval($_POST['21']),
					"lista27" 		=> $_POST['27']	  	 	 == "" ? 0: intval($_POST['27']),
					"lista28" 		=> $_POST['28']	  	 	 == "" ? 0: intval($_POST['28']),
					"lista30" 		=> $_POST['30']	  	 	 == "" ? 0: intval($_POST['30']),
					"lista38" 		=> $_POST['38']	  	 	 == "" ? 0: intval($_POST['38']),
					"lista48" 		=> $_POST['48']	  	 	 == "" ? 0: intval($_POST['48']),
					"lista53" 		=> $_POST['53']	  	 	 == "" ? 0: intval($_POST['53']),
					"lista59" 		=> $_POST['59']	  	 	 == "" ? 0: intval($_POST['59']),
					"lista70" 		=> $_POST['70']	  	 	 == "" ? 0: intval($_POST['70']),
					"lista85" 		=> $_POST['85']	  	 	 == "" ? 0: intval($_POST['85']),
					"lista98" 		=> $_POST['98']	  	 	 == "" ? 0: intval($_POST['98']),
					"lista110" 		=> $_POST['110']	  	 	 == "" ? 0: intval($_POST['110']),
					"lista118" 		=> $_POST['118']	  	 	 == "" ? 0: intval($_POST['118']),
					"lista120" 		=> $_POST['120']	  	 	 == "" ? 0: intval($_POST['120']),
					"lista140" 		=> $_POST['140']	  	 	 == "" ? 0: intval($_POST['140']),
					"lista148" 		=> $_POST['148']	  	 	 == "" ? 0: intval($_POST['148']),
					"lista194" 		=> $_POST['194']	  	 	 == "" ? 0: intval($_POST['194']),
					"lema801" 		=> $_POST['801']	     == "" ? 0: intval($_POST['801']),					
					"lista71" 		=> $_POST['71']	  	 	 == "" ? 0: intval($_POST['71']),
					"lista73" 		=> $_POST['73']  	  	 == "" ? 0: intval($_POST['73']),
					"lista152" 		=> $_POST['152']  	  	 == "" ? 0: intval($_POST['152']),
					"lista155" 		=> $_POST['155']  	  	 == "" ? 0: intval($_POST['155']),
					"lista156" 		=> $_POST['156']  	  	 == "" ? 0: intval($_POST['156']),
					"lista158" 		=> $_POST['158']  	  	 == "" ? 0: intval($_POST['158']),
					"lista159" 		=> $_POST['159']  	  	 == "" ? 0: intval($_POST['159']),
					"lista160" 		=> $_POST['160']  	  	 == "" ? 0: intval($_POST['160']),
					"lista162" 		=> $_POST['162']  	  	 == "" ? 0: intval($_POST['162']),
					"lista169" 		=> $_POST['169']  	  	 == "" ? 0: intval($_POST['169']),
					"lista191" 		=> $_POST['191']  	  	 == "" ? 0: intval($_POST['191']),
					"lema802" 		=> $_POST['802']	     == "" ? 0: intval($_POST['802']),
					"tvalidos" 		=> $_POST['tvalidos'] 	 == "" ? 0: intval($_POST['tvalidos']),
					"vnulos" 		=> $_POST['vnulos']      == "" ? 0: intval($_POST['vnulos']),
					"vrecurridos" 	=> $_POST['vrecurridos'] == "" ? 0: intval($_POST['vrecurridos']),
					"viimpugnada" 	=> $_POST['viimpugnada'] == "" ? 0: intval($_POST['viimpugnada']),
					"vblanco" 		=> $_POST['vblanco'] 	 == "" ? 0: intval($_POST['vblanco'])
				];
				$this->eleccionModel->certificarDip($param);
				return $this->view('index');
			}
		}

		public function guardarContralor(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['guardarCont'])){
				$param = [
					"csobres" 		=> $_POST['csobres']	 == "" ? 0: intval($_POST['csobres']),
					"mesa" 	 		=> $this->eleccionModel->getMesaId($_POST['mesa'])->id_mesa,
					"lista10"		=> $_POST['10']	  	 	 == "" ? 0: intval($_POST['10']),
					"lista17"	 	=> $_POST['17']	  	 	 == "" ? 0: intval($_POST['17']),
					"lista27" 		=> $_POST['27']	  	 	 == "" ? 0: intval($_POST['27']),
					"lista28" 		=> $_POST['28']	  	 	 == "" ? 0: intval($_POST['28']),
					"lista70" 		=> $_POST['70']	  	 	 == "" ? 0: intval($_POST['70']),
					"lista85" 		=> $_POST['85']	  	 	 == "" ? 0: intval($_POST['85']),
					"lista98" 		=> $_POST['98']	  	 	 == "" ? 0: intval($_POST['98']),
					"lista118" 		=> $_POST['118']	  	 == "" ? 0: intval($_POST['118']),
					"lista120" 		=> $_POST['120']	  	 == "" ? 0: intval($_POST['120']),
					"lista132" 		=> $_POST['132']	  	 == "" ? 0: intval($_POST['132']),
					"lista134" 		=> $_POST['134']	  	 == "" ? 0: intval($_POST['134']),
					"lista140" 		=> $_POST['140']	  	 == "" ? 0: intval($_POST['140']),
					"lema801" 		=> $_POST['801']	     == "" ? 0: intval($_POST['801']),
					"lista71" 		=> $_POST['71']	  	 	 == "" ? 0: intval($_POST['71']),
					"lista73" 		=> $_POST['73']  	  	 == "" ? 0: intval($_POST['73']),
					"lista152" 		=> $_POST['152']  	  	 == "" ? 0: intval($_POST['152']),
					"lista156" 		=> $_POST['156']  	  	 == "" ? 0: intval($_POST['156']),
					"lista158" 		=> $_POST['158']  	  	 == "" ? 0: intval($_POST['158']),
					"lista159" 		=> $_POST['159']  	  	 == "" ? 0: intval($_POST['159']),
					"lista162" 		=> $_POST['162']  	  	 == "" ? 0: intval($_POST['162']),
					"lista164" 		=> $_POST['164']  	  	 == "" ? 0: intval($_POST['164']),
					"lista191" 		=> $_POST['191']  	  	 == "" ? 0: intval($_POST['191']),
					"lema802" 		=> $_POST['802']	     == "" ? 0: intval($_POST['802']),
					"tvalidos" 		=> $_POST['tvalidos'] 	 == "" ? 0: intval($_POST['tvalidos']),
					"vnulos" 		=> $_POST['vnulos']      == "" ? 0: intval($_POST['vnulos']),
					"vrecurridos" 	=> $_POST['vrecurridos'] == "" ? 0: intval($_POST['vrecurridos']),
					"viimpugnada" 	=> $_POST['viimpugnada'] == "" ? 0: intval($_POST['viimpugnada']),
					"vblanco" 		=> $_POST['vblanco'] 	 == "" ? 0: intval($_POST['vblanco'])

				];
				$this->eleccionModel->certificarCont($param);
				return $this->view('index');
			}
		}

		public function guardarConcejal(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['guardarCon'])){
				$param = [
					"csobres" 		=> $_POST['csobres']	 == "" ? 0: intval($_POST['csobres']),
					"mesa" 	 		=> $this->eleccionModel->getMesaId($_POST['mesa'])->id_mesa,
					"lista10" 		=> $_POST['10']	  	 	 == "" ? 0: intval($_POST['10']),
					"lista16"	 	=> $_POST['16']	  	 	 == "" ? 0: intval($_POST['16']),
					"lista17"	 	=> $_POST['17']	  	 	 == "" ? 0: intval($_POST['17']),
					"lista18"	 	=> $_POST['18']	  	 	 == "" ? 0: intval($_POST['18']),
					"lista21" 		=> $_POST['21']	 	 	 == "" ? 0: intval($_POST['21']),
					"lista26" 		=> $_POST['26']	 	 	 == "" ? 0: intval($_POST['26']),
					"lista28" 		=> $_POST['28']	  	 	 == "" ? 0: intval($_POST['28']),
					"lista29" 		=> $_POST['29']	  	 	 == "" ? 0: intval($_POST['29']),
					"lista48" 		=> $_POST['48']	  	 	 == "" ? 0: intval($_POST['48']),
					"lista59" 		=> $_POST['59']	  	 	 == "" ? 0: intval($_POST['59']),
					"lista68" 		=> $_POST['68']	  	 	 == "" ? 0: intval($_POST['68']),
					"lista70" 		=> $_POST['70']	  	 	 == "" ? 0: intval($_POST['70']),
					"lista75" 		=> $_POST['75']	  	 	 == "" ? 0: intval($_POST['75']),
					"lista85" 		=> $_POST['85']	  	 	 == "" ? 0: intval($_POST['85']),
					"lista94" 		=> $_POST['94']	  	 	 == "" ? 0: intval($_POST['94']),
					"lista95" 		=> $_POST['95']	  	 	 == "" ? 0: intval($_POST['95']),
					"lista96" 		=> $_POST['96']	  	 	 == "" ? 0: intval($_POST['96']),
					"lista97" 		=> $_POST['97']	  	 	 == "" ? 0: intval($_POST['97']),
					"lista98" 		=> $_POST['98']	  	 	 == "" ? 0: intval($_POST['98']),
					"lista110" 		=> $_POST['110']	  	 == "" ? 0: intval($_POST['110']),
					"lista118" 		=> $_POST['118']	  	 == "" ? 0: intval($_POST['118']),
					"lista120" 		=> $_POST['120']	  	 == "" ? 0: intval($_POST['120']),
					"lista132" 		=> $_POST['132']	  	 == "" ? 0: intval($_POST['132']),
					"lista134" 		=> $_POST['134']	  	 == "" ? 0: intval($_POST['134']),
					"lista140" 		=> $_POST['140']	  	 == "" ? 0: intval($_POST['140']),
					"lista147" 		=> $_POST['147']	  	 == "" ? 0: intval($_POST['147']),
					"lista148" 		=> $_POST['148']	  	 == "" ? 0: intval($_POST['148']),
					"lista188" 		=> $_POST['188']	  	 == "" ? 0: intval($_POST['188']),
					"lista189" 		=> $_POST['189']	  	 == "" ? 0: intval($_POST['189']),
					"lista194" 		=> $_POST['194']	  	 == "" ? 0: intval($_POST['194']),
					"lema801" 		=> $_POST['801']	     == "" ? 0: intval($_POST['801']),					
					"lista71" 		=> $_POST['71']	  	 	 == "" ? 0: intval($_POST['71']),
					"lista73" 		=> $_POST['73']  	  	 == "" ? 0: intval($_POST['73']),
					"lista152" 		=> $_POST['152']  	  	 == "" ? 0: intval($_POST['152']),
					"lista155" 		=> $_POST['155']  	  	 == "" ? 0: intval($_POST['155']),
					"lista156" 		=> $_POST['156']  	  	 == "" ? 0: intval($_POST['156']),
					"lista158" 		=> $_POST['158']  	  	 == "" ? 0: intval($_POST['158']),
					"lista159" 		=> $_POST['159']  	  	 == "" ? 0: intval($_POST['159']),
					"lista160" 		=> $_POST['160']  	  	 == "" ? 0: intval($_POST['160']),
					"lista162" 		=> $_POST['162']  	  	 == "" ? 0: intval($_POST['162']),
					"lista163" 		=> $_POST['163']  	  	 == "" ? 0: intval($_POST['163']),
					"lista164" 		=> $_POST['164']  	  	 == "" ? 0: intval($_POST['164']),
					"lista165" 		=> $_POST['165']  	  	 == "" ? 0: intval($_POST['165']),
					"lista166" 		=> $_POST['166']  	  	 == "" ? 0: intval($_POST['166']),
					"lista167" 		=> $_POST['167']  	  	 == "" ? 0: intval($_POST['167']),
					"lista168" 		=> $_POST['168']  	  	 == "" ? 0: intval($_POST['168']),
					"lista169" 		=> $_POST['169']  	  	 == "" ? 0: intval($_POST['169']),
					"lista171" 		=> $_POST['171']  	  	 == "" ? 0: intval($_POST['171']),
					"lista172" 		=> $_POST['172']  	  	 == "" ? 0: intval($_POST['172']),
					"lista173" 		=> $_POST['173']  	  	 == "" ? 0: intval($_POST['173']),
					"lista176" 		=> $_POST['176']  	  	 == "" ? 0: intval($_POST['176']),
					"lista179" 		=> $_POST['179']  	  	 == "" ? 0: intval($_POST['179']),
					"lista190" 		=> $_POST['190']  	  	 == "" ? 0: intval($_POST['190']),
					"lista191" 		=> $_POST['191']  	  	 == "" ? 0: intval($_POST['191']),
					"lista192" 		=> $_POST['192']  	  	 == "" ? 0: intval($_POST['192']),
					"lista193" 		=> $_POST['193']  	  	 == "" ? 0: intval($_POST['193']),
					"lema802" 		=> $_POST['802']	     == "" ? 0: intval($_POST['802']),
					"tvalidos" 		=> $_POST['tvalidos'] 	 == "" ? 0: intval($_POST['tvalidos']),
					"vnulos" 		=> $_POST['vnulos']      == "" ? 0: intval($_POST['vnulos']),
					"vrecurridos" 	=> $_POST['vrecurridos'] == "" ? 0: intval($_POST['vrecurridos']),
					"viimpugnada" 	=> $_POST['viimpugnada'] == "" ? 0: intval($_POST['viimpugnada']),
					"vblanco" 		=> $_POST['vblanco'] 	 == "" ? 0: intval($_POST['vblanco'])

				];
				$this->eleccionModel->certificarCons($param);
				return $this->view('index');
			}
		}

		public function guardarIntendente(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['guardarInt'])){
				$param = [
					"csobres" 		=> $_POST['csobres']	 == "" ? 0: intval($_POST['csobres']),
					"mesa" 	 		=> $this->eleccionModel->getMesaId($_POST['mesa'])->id_mesa,
					"lista10" 		=> $_POST['10']	  	 	 == "" ? 0: intval($_POST['10']),
					"lista16"	 	=> $_POST['16']	  	 	 == "" ? 0: intval($_POST['16']),
					"lista17"	 	=> $_POST['17']	  	 	 == "" ? 0: intval($_POST['17']),
					"lista21" 		=> $_POST['21']	 	 	 == "" ? 0: intval($_POST['21']),
					"lista27" 		=> $_POST['27']	  	 	 == "" ? 0: intval($_POST['27']),
					"lista28" 		=> $_POST['28']	  	 	 == "" ? 0: intval($_POST['28']),
					"lista38" 		=> $_POST['38']	  	 	 == "" ? 0: intval($_POST['38']),
					"lista48" 		=> $_POST['48']	  	 	 == "" ? 0: intval($_POST['48']),
					"lista59" 		=> $_POST['59']	  	 	 == "" ? 0: intval($_POST['59']),
					"lista70" 		=> $_POST['70']	  	 	 == "" ? 0: intval($_POST['70']),
					"lista85" 		=> $_POST['85']	  	 	 == "" ? 0: intval($_POST['85']),
					"lista98" 		=> $_POST['98']	  	 	 == "" ? 0: intval($_POST['98']),
					"lista110" 		=> $_POST['110']	  	 == "" ? 0: intval($_POST['110']),
					"lista118" 		=> $_POST['118']	  	 == "" ? 0: intval($_POST['118']),
					"lista120" 		=> $_POST['120']	  	 == "" ? 0: intval($_POST['120']),
					"lista140" 		=> $_POST['140']	  	 == "" ? 0: intval($_POST['140']),
					"lista194" 		=> $_POST['194']	  	 == "" ? 0: intval($_POST['194']),
					"lema801" 		=> $_POST['801']	     == "" ? 0: intval($_POST['801']),

					"lista71" 		=> $_POST['71']	  	 	 == "" ? 0: intval($_POST['71']),
					"lista73" 		=> $_POST['73']  	  	 == "" ? 0: intval($_POST['73']),
					"lista152" 		=> $_POST['152']  	  	 == "" ? 0: intval($_POST['152']),
					"lista156" 		=> $_POST['156']  	  	 == "" ? 0: intval($_POST['156']),
					"lista158" 		=> $_POST['158']  	  	 == "" ? 0: intval($_POST['158']),
					"lista159" 		=> $_POST['159']  	  	 == "" ? 0: intval($_POST['159']),
					"lista160" 		=> $_POST['160']  	  	 == "" ? 0: intval($_POST['160']),
					"lista162" 		=> $_POST['162']  	  	 == "" ? 0: intval($_POST['162']),
					"lista164" 		=> $_POST['164']  	  	 == "" ? 0: intval($_POST['164']),
					"lista169" 		=> $_POST['169']  	  	 == "" ? 0: intval($_POST['169']),
					"lista191" 		=> $_POST['191']  	  	 == "" ? 0: intval($_POST['191']),
					"lema802" 		=> $_POST['802']	     == "" ? 0: intval($_POST['802']),

					"tvalidos" 		=> $_POST['tvalidos'] 	 == "" ? 0: intval($_POST['tvalidos']),
					"vnulos" 		=> $_POST['vnulos']      == "" ? 0: intval($_POST['vnulos']),
					"vrecurridos" 	=> $_POST['vrecurridos'] == "" ? 0: intval($_POST['vrecurridos']),
					"viimpugnada" 	=> $_POST['viimpugnada'] == "" ? 0: intval($_POST['viimpugnada']),
					"vblanco" 		=> $_POST['vblanco'] 	 == "" ? 0: intval($_POST['vblanco'])

				];
				$this->eleccionModel->certificarInt($param);
				return $this->view('index');
			}
		}

		public function update(){}

		public function delete(){}
	}

?>