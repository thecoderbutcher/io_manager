<?php  

	class Rol{
        private $db;

        public function __construct(){
            $this->db = new DataBase;
        }

        public function getRoles(){
            $this->db->query('SELECT * FROM plataforma_upro.roles');
            return $this->db->getRecords();
        }
    }
