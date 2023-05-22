<?php  

	class Inout{
        private $db;

        public function __construct(){
            $this->db = new DataBase;
        }
        
        public function registroEntrada($param){
            if(isset($param)){
                $this->db->query('INSERT INTO plataforma_upro.registros(empleado_id, registrador_id, fecha_entrada) VALUES (:empleado_id, :registrador_id, :fecha)');
            
                $fecha = date('Y-m-d h:i:s.u');
                $this->db->bind(':empleado_id', intval($param['empleado']));
                $this->db->bind(':registrador_id', intval($param['registrador']));
                $this->db->bind(':fecha', $fecha);
                
                if($this->db->execute()){
                    return $fecha;  
                }
            }
        }

        public function getRegistroEntradaId($param){
            
            if(isset($param)){
            $this->db->query('SELECT id FROM plataforma_upro.registros WHERE empleado_id = :empleado_id AND registrador_id = :registro_id AND fecha_entrada = :fecha');
                
                $fecha = new DateTime($param['fecha']);
                $this->db->bind(':empleado_id', intval($param['empleado']));
                $this->db->bind(':registrador_id', intval($param['registrador']));
                $this->db->bind(':fecha', $fecha);
            }

            return $fecha;
        }
    }