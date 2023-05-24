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
                
                if($this->db->execute()){ return $fecha; }
            }
        }

        public function getRegistroEntradaId($param){
            if(isset($param)){
                $this->db->query('SELECT id FROM plataforma_upro.registros WHERE empleado_id = :empleado_id AND registrador_id = :registrador_id AND fecha_entrada = :fecha');
                
                $this->db->bind(':empleado_id', $param['empleado']);
                $this->db->bind(':registrador_id', $param['registrador']);
                $this->db->bind(':fecha', $param['fecha']);
        
                return ($this->db->getRecord())->id;
            }
        }

        public function changeStatus($param){
            if(isset($param)){
                $this->db->query('UPDATE plataforma_upro.empleados SET status = :status WHERE id = :empleado_id');
                $this->db->bind(':empleado_id', $param['empleado']);
                $this->db->bind(':status', $param['id_entrada']);

                return $this->db->execute();
            }
        }

        public function registroSalida($param){
            if(isset($param)){
                $this->db->query('UPDATE plataforma_upro.registros SET fecha_salida = :fecha WHERE empleado_id = :empleado_id AND id = :id');
            
                $fecha = date('Y-m-d h:i:s.u');
                $this->db->bind(':empleado_id', intval($param['empleado'])); 
                $this->db->bind(':id', intval($param['id_entrada']));
                $this->db->bind(':fecha', $fecha);
                
                return $this->db->execute();
            }
        }
    }