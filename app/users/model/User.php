<?php  

	class User{
		private $db;
		
		public function __construct(){
			$this->db = new DataBase;
		}

		public function getByEmail($email){
			$email =  $this->db->deleteSpecialChars($email,'email'); 
			$this->db->query('SELECT * FROM  plataforma_upro.empleados WHERE email = :email');
			$this->db->bind(':email', $email);

			$response = $this->db->getRecord();
			return $response;
		}

		public function userRecord($param){
			$this->db->query('INSERT INTO user (user_nick, user_email, user_password) VALUES (:user_nick, :user_email, :user_password)');
			# Link values
			$this->db->bind(':user_nick', $param['user-nick']);
			$this->db->bind(':user_email', $param['user-email']);
			$this->db->bind(':user_password', $param['user-password']);
			# Run
			if($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		}

		public function getUsers(){
			$this->db->query('SELECT  empleado.documento as "documento", empleado.apellido as "apellido", empleado.nombres as "nombres", empleado.telefono as "telefono", empleado.email as "email", empleado.status as "status", areas.nombre as "areas_nombre"
								FROM  plataforma_upro.empleados empleado
								JOIN plataforma_upro.areas areas on areas.id = empleado.area_id
								order by apellido asc');
			$response = $this->db->getRecords();
			return $response;
		}

		public function getUserId($documento){
			$this->db->query('SELECT empleado.id, empleado.documento FROM plataforma_upro.empleados empleado WHERE empleado.documento = :documento');
			$this->db->bind(':documento', $documento);
			
			return ($this->db->getRecord())->id;
		}
	}