<?php  

	class Area{
        private $db;

        public function __construct(){
            $this->db = new DataBase;
        }

        public function getAreas(){
            $this->db->query('SELECT * FROM plataforma_upro.areas');
            return $this->db->getRecords();
        }
    }
