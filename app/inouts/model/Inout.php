<?php  

	class Inout{
        private $db;

        public function __construct(){
            $this->db = new DataBase;
        }
        
        public function registroEntrada($param){
            if(isset($param)){
                $this->db->query(
                    'INSERT INTO registros (empleado_id, registrador_id) VALUES (:empleado_id, :registrador_id)'
                );
                $this->db->bind(':empleado_id', $param['empleado']);
                $this->db->bind(':registrador_id', $param['registrador']);
                return $this->db->execute();
            }
        }
    }