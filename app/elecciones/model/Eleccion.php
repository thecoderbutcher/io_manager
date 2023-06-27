<?php  

	class Eleccion{
        private $db;

        public function __construct(){
            $this->db = new DataBase;
        }

        public function getcircuitos($id){
            $this->db->query('SELECT * FROM elecciones.circuito WHERE id_circuito = :id');
            $this->db->bind(':id', $id);
            return $this->db->getRecord();
        }

        public function getMesaId($mesanro){ 
            $this->db->query('
                SELECT id_mesa FROM elecciones.mesa WHERE numero_mesa = :mesa');
            $this->db->bind(':mesa', $mesanro);
            return $this->db->getRecord();
        }
        public function obtenerDatosGobernador(){
            $this->db->query('
                SELECT * FROM elecciones.vw_resultados_gobernador 
            ');
            return $this->db->getRecords();
        } 

        public function obtenerDatosDiputado(){
            $this->db->query('
                SELECT * FROM elecciones.vw_resultados_diputados
            ');
            return $this->db->getRecords();
        } 

        public function obtenerDatosConcejal(){
            $this->db->query('
                SELECT * FROM elecciones.vw_resultados_concejal 
            ');
            return $this->db->getRecords();
        } 

        public function obtenerDatosIntendente(){
            $this->db->query('
                SELECT * FROM elecciones.vw_resultados_intendente 
            ');
            return $this->db->getRecords();
        } 

        public function obtenerDatosContralor(){
            $this->db->query('
                SELECT * FROM elecciones.vw_resultados_contralor 
            ');
            return $this->db->getRecords();
        } 
         public function obtenerDatosGobernador_lema(){
            $this->db->query('
                SELECT * FROM elecciones.vw_resultados_lemas_gobernador;
            ');
            return $this->db->getRecords();
        } 
        public function obtenerDatosDiputado_lema(){
            $this->db->query('
                SELECT * FROM elecciones.vw_resultados_lemas_diputados;
            ');
            return $this->db->getRecords();
        } 
        public function obtenerDatosIntendente_lema(){
            $this->db->query('
                SELECT * FROM elecciones.vw_resultados_lemas_intendente;
            ');
            return $this->db->getRecords();
        } 
        public function obtenerDatosConcejal_lema(){
            $this->db->query('
                SELECT * FROM elecciones.vw_resultados_lemas_concejal;
            ');
            return $this->db->getRecords();
        } 
        public function obtenerDatosContralor_lema(){
            $this->db->query('
                SELECT * FROM elecciones.vw_resultados_contralor  WHERE id.lista in ("801","802","803","804")
            ');
            return $this->db->getRecords();
        } 

        public function insertVotosVarios($param){
            $this->db->query('
                INSERT INTO elecciones.votos_otros (votos_blanco, votos_validos, votos_nulos, votos_recurridos, votos_impugnados, id_mesa, cantidad_sobres) 
                VALUES (:vblanco, :bvalido, :vnulo, :vrecurrido, :vimpugnado, :idmesa, :cantidad_sobres)'); 
            
            $this->db->bind(':vblanco', $param['vblanco']);
            $this->db->bind(':bvalido', $param['tvalidos']);
            $this->db->bind(':vnulo', $param['vnulos']);
            $this->db->bind(':vrecurrido', $param['vrecurridos']);
            $this->db->bind(':vimpugnado', $param['viimpugnada']);
            $this->db->bind(':idmesa', $param['mesa']);
            $this->db->bind(':cantidad_sobres', $param['csobres']); 
            
            return $this->db->execute();
        }

        public function getIdVotosVarios($mesa){
            $this->db->query('
                SELECT id_votos FROM elecciones.votos_otros WHERE id_mesa = :mesa');
            $this->db->bind(':mesa', $mesa);
            return $this->db->getRecord();
        }

        public function certificarGob($param){
            $this->insertVotosVarios($param); 
            $id_votos = $this->getIdVotosVarios($param['mesa'])->id_votos;

            $this->db->query('
                INSERT INTO elecciones.certificado 
                        (id_mesa, id_categoria, id_lista, votos, id_votos) 
                VALUES (:id_mesa, :id_categoria, :id_lista, :votos, :id_votos)');

            $this->db->bind(':id_mesa', $param['mesa']);
            $this->db->bind(':id_categoria', 1);

            #--------
            $this->db->bind(':id_lista', 10);
            $this->db->bind(':votos', $param['lista10']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            #--------
            $this->db->bind(':id_lista', 16);
            $this->db->bind(':votos', $param['lista16']);
            $this->db->bind(':id_votos', $id_votos);
			$this->db->execute();

            #--------
            $this->db->bind(':id_lista', 27);
            $this->db->bind(':votos', $param['lista27']);
            $this->db->bind(':id_votos', $id_votos);
			$this->db->execute();

            #--------
            $this->db->bind(':id_lista', 48);
            $this->db->bind(':votos', $param['lista48']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            #--------
            $this->db->bind(':id_lista', 801);
            $this->db->bind(':votos', $param['lema801']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            #--------
            $this->db->bind(':id_lista', 71);
            $this->db->bind(':votos', $param['lista71']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            #--------
            $this->db->bind(':id_lista', 73);
            $this->db->bind(':votos', $param['lista73']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            #--------
            $this->db->bind(':id_lista', 802);
            $this->db->bind(':votos', $param['lema802']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            #--------
            $this->db->bind(':id_lista', 200);
            $this->db->bind(':votos', $param['lista200']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            #--------
            $this->db->bind(':id_lista', 803);
            $this->db->bind(':votos', $param['lema803']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            #--------
            $this->db->bind(':id_lista', 201);
            $this->db->bind(':votos', $param['lista201']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            #--------
            $this->db->bind(':id_lista', 804);
            $this->db->bind(':votos', $param['lema804']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
        }

        public function certificarDip($param){
            
            $this->insertVotosVarios($param); 
            $id_votos = $this->getIdVotosVarios($param['mesa'])->id_votos;

            $this->db->query('
                INSERT INTO elecciones.certificado 
                        (id_mesa, id_categoria, id_lista, votos, id_votos) 
                VALUES (:id_mesa, :id_categoria, :id_lista, :votos, :id_votos)');

            $this->db->bind(':id_mesa', $param['mesa']);
            $this->db->bind(':id_categoria', 2);


            $this->db->bind(':votos', $param['lista10']);
            $this->db->bind(':id_lista', 10);
            $this->db->bind(':id_votos', $id_votos);
            
            $this->db->execute();
            $this->db->bind(':id_lista', 17);
            $this->db->bind(':votos', $param['lista17']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 21);
            $this->db->bind(':votos', $param['lista21']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 27);
            $this->db->bind(':votos', $param['lista27']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            $this->db->bind(':id_lista', 28);
            $this->db->bind(':votos', $param['lista28']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 30);
            $this->db->bind(':votos', $param['lista38']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 48);
            $this->db->bind(':votos', $param['lista48']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 53);
            $this->db->bind(':votos', $param['lista53']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 59);
            $this->db->bind(':votos', $param['lista59']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            $this->db->bind(':id_lista', 70);
            $this->db->bind(':votos', $param['lista70']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 85);
            $this->db->bind(':votos', $param['lista85']);           
            
            $this->db->bind(':id_lista', 801);
            $this->db->bind(':votos', $param['lema801']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 85);
            $this->db->bind(':votos', $param['lista85']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 98);
            $this->db->bind(':votos', $param['lista98']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 110);
            $this->db->bind(':votos', $param['lista118']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 120);
            $this->db->bind(':votos', $param['lista120']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            $this->db->bind(':id_lista', 801);
            $this->db->bind(':votos', $param['lema801']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 140);
            $this->db->bind(':votos', $param['lista140']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 148);
            $this->db->bind(':votos', $param['lista148']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 194);
            $this->db->bind(':votos', $param['lista194']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 71);
            $this->db->bind(':votos', $param['lista71']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 73);
            $this->db->bind(':votos', $param['lista73']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 152);
            $this->db->bind(':votos', $param['lista152']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 155);
            $this->db->bind(':votos', $param['lista155']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 158);
            $this->db->bind(':votos', $param['lista158']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 159);
            $this->db->bind(':votos', $param['lista159']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 160);
            $this->db->bind(':votos', $param['lista160']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 162);
            $this->db->bind(':votos', $param['lista162']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 169);
            $this->db->bind(':votos', $param['lista169']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 191);
            $this->db->bind(':votos', $param['lista191']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

            $this->db->bind(':id_lista', 801);
            $this->db->bind(':votos', $param['lema801']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            #--------
            $this->db->bind(':id_lista', 802);
            $this->db->bind(':votos', $param['lema802']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 803);
            $this->db->bind(':votos', $param['lema803']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            #-----
            $this->db->bind(':id_lista', 804);
            $this->db->bind(':votos', $param['lema804']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

        }

        public function certificarCont($param){
            $this->insertVotosVarios($param); 
            $id_votos = $this->getIdVotosVarios($param['mesa'])->id_votos;

            $this->db->query('
                INSERT INTO elecciones.certificado 
                        (id_mesa, id_categoria, id_lista, votos, id_votos) 
                VALUES (:id_mesa, :id_categoria, :id_lista, :votos, :id_votos)');

            $this->db->bind(':id_mesa', $param['mesa']);
            $this->db->bind(':id_categoria', 5);


            $this->db->bind(':id_lista', 10);
            $this->db->bind(':votos', $param['lista10']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 17);
            $this->db->bind(':votos', $param['lista17']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 27);
            $this->db->bind(':votos', $param['lista27']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 28);
            $this->db->bind(':votos', $param['lista28']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 70);
            $this->db->bind(':votos', $param['lista70']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 85);
            $this->db->bind(':votos', $param['lista85']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 98);
            $this->db->bind(':votos', $param['lista98']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 118);
            $this->db->bind(':votos', $param['lista118']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 120);
            $this->db->bind(':votos', $param['lista120']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 132);
            $this->db->bind(':votos', $param['lista132']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 134);
            $this->db->bind(':votos', $param['lista134']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 140);
            $this->db->bind(':votos', $param['lista140']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 71);
            $this->db->bind(':votos', $param['lista71']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 73);
            $this->db->bind(':votos', $param['lista73']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 152);
            $this->db->bind(':votos', $param['lista152']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 156);
            $this->db->bind(':votos', $param['lista156']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 158);
            $this->db->bind(':votos', $param['lista158']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 159);
            $this->db->bind(':votos', $param['lista159']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 162);
            $this->db->bind(':votos', $param['lista162']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 164);
            $this->db->bind(':votos', $param['lista164']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 191);
            $this->db->bind(':votos', $param['lista191']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 801);
            $this->db->bind(':votos', $param['lema801']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            #--------
            $this->db->bind(':id_lista', 802);
            $this->db->bind(':votos', $param['lema802']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 803);
            $this->db->bind(':votos', $param['lema803']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            #-----
            $this->db->bind(':id_lista', 804);
            $this->db->bind(':votos', $param['lema804']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
        }

        public function certificarCons($param){
            $this->insertVotosVarios($param); 
            $id_votos = $this->getIdVotosVarios($param['mesa'])->id_votos;

            $this->db->query('
                INSERT INTO elecciones.certificado 
                        (id_mesa, id_categoria, id_lista, votos, id_votos) 
                VALUES (:id_mesa, :id_categoria, :id_lista, :votos, :id_votos)');

            $this->db->bind(':id_mesa', $param['mesa']);
            $this->db->bind(':id_categoria', 4);

            $this->db->bind(':id_lista', 10);
            $this->db->bind(':votos', $param['lista10']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 16);
            $this->db->bind(':votos', $param['lista16']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 17);
            $this->db->bind(':votos', $param['lista17']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 18);
            $this->db->bind(':votos', $param['lista18']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 21);
            $this->db->bind(':votos', $param['lista21']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 26);
            $this->db->bind(':votos', $param['lista26']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 28);
            $this->db->bind(':votos', $param['lista28']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 29);
            $this->db->bind(':votos', $param['lista29']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 48);
            $this->db->bind(':votos', $param['lista48']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 59);
            $this->db->bind(':votos', $param['lista59']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 68);
            $this->db->bind(':votos', $param['lista68']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 70);
            $this->db->bind(':votos', $param['lista70']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 75);
            $this->db->bind(':votos', $param['lista75']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 85);
            $this->db->bind(':votos', $param['lista85']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 94);
            $this->db->bind(':votos', $param['lista94']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 95);
            $this->db->bind(':votos', $param['lista95']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 96);
            $this->db->bind(':votos', $param['lista96']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 97);
            $this->db->bind(':votos', $param['lista97']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 98);
            $this->db->bind(':votos', $param['lista98']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 110);
            $this->db->bind(':votos', $param['lista110']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 118);
            $this->db->bind(':votos', $param['lista118']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 120);
            $this->db->bind(':votos', $param['lista120']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 132);
            $this->db->bind(':votos', $param['lista132']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 134);
            $this->db->bind(':votos', $param['lista134']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 140);
            $this->db->bind(':votos', $param['lista140']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 147);
            $this->db->bind(':votos', $param['lista147']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 148);
            $this->db->bind(':votos', $param['lista148']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 188);
            $this->db->bind(':votos', $param['lista188']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 189);
            $this->db->bind(':votos', $param['lista189']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 194);
            $this->db->bind(':votos', $param['lista194']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 71);
            $this->db->bind(':votos', $param['lista71']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 73);
            $this->db->bind(':votos', $param['lista73']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 152);
            $this->db->bind(':votos', $param['lista152']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 155);
            $this->db->bind(':votos', $param['lista155']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 156);
            $this->db->bind(':votos', $param['lista156']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 158);
            $this->db->bind(':votos', $param['lista158']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 159);
            $this->db->bind(':votos', $param['lista159']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 160);
            $this->db->bind(':votos', $param['lista160']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 162);
            $this->db->bind(':votos', $param['lista162']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 163);
            $this->db->bind(':votos', $param['lista163']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 164);
            $this->db->bind(':votos', $param['lista164']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 165);
            $this->db->bind(':votos', $param['lista165']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 166);
            $this->db->bind(':votos', $param['lista166']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 167);
            $this->db->bind(':votos', $param['lista167']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 168);
            $this->db->bind(':votos', $param['lista168']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 169);
            $this->db->bind(':votos', $param['lista169']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 171);
            $this->db->bind(':votos', $param['lista171']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 172);
            $this->db->bind(':votos', $param['lista172']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 173);
            $this->db->bind(':votos', $param['lista173']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 176);
            $this->db->bind(':votos', $param['lista176']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 179);
            $this->db->bind(':votos', $param['lista179']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 190);
            $this->db->bind(':votos', $param['lista190']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 191);
            $this->db->bind(':votos', $param['lista191']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 192);
            $this->db->bind(':votos', $param['lista192']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 193);
            $this->db->bind(':votos', $param['lista193']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 801);
            $this->db->bind(':votos', $param['lema801']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            #--------
            $this->db->bind(':id_lista', 802);
            $this->db->bind(':votos', $param['lema802']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 803);
            $this->db->bind(':votos', $param['lema803']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            #-----
            $this->db->bind(':id_lista', 804);
            $this->db->bind(':votos', $param['lema804']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();

        }
        
        public function certificarInt($param){
            $this->insertVotosVarios($param); 
            $id_votos = $this->getIdVotosVarios($param['mesa'])->id_votos;

            $this->db->query('
                INSERT INTO elecciones.certificado 
                        (id_mesa, id_categoria, id_lista, votos, id_votos) 
                VALUES (:id_mesa, :id_categoria, :id_lista, :votos, :id_votos)');

            $this->db->bind(':id_mesa', $param['mesa']);
            $this->db->bind(':id_categoria', 3);


            $this->db->bind(':id_lista', 10);
            $this->db->bind(':votos', $param['lista10']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 16);
            $this->db->bind(':votos', $param['lista16']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 17);
            $this->db->bind(':votos', $param['lista17']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 21);
            $this->db->bind(':votos', $param['lista21']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 27);
            $this->db->bind(':votos', $param['lista27']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 28);
            $this->db->bind(':votos', $param['lista28']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 38);
            $this->db->bind(':votos', $param['lista38']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 48);
            $this->db->bind(':votos', $param['lista48']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 59);
            $this->db->bind(':votos', $param['lista59']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 70);
            $this->db->bind(':votos', $param['lista70']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 85);
            $this->db->bind(':votos', $param['lista85']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 98);
            $this->db->bind(':votos', $param['lista98']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 110);
            $this->db->bind(':votos', $param['lista110']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 118);
            $this->db->bind(':votos', $param['lista118']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 120);
            $this->db->bind(':votos', $param['lista120']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 140);
            $this->db->bind(':votos', $param['lista140']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            
            $this->db->bind(':id_lista', 194);
            $this->db->bind(':votos', $param['lista194']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 71);
            $this->db->bind(':votos', $param['lista71']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 73);
            $this->db->bind(':votos', $param['lista73']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 152);
            $this->db->bind(':votos', $param['lista152']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 156);
            $this->db->bind(':votos', $param['lista156']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 158);
            $this->db->bind(':votos', $param['lista158']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 159);
            $this->db->bind(':votos', $param['lista159']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 160);
            $this->db->bind(':votos', $param['lista160']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 162);
            $this->db->bind(':votos', $param['lista162']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 164);
            $this->db->bind(':votos', $param['lista164']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 169);
            $this->db->bind(':votos', $param['lista169']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----

            $this->db->bind(':id_lista', 191);
            $this->db->bind(':votos', $param['lista191']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 801);
            $this->db->bind(':votos', $param['lema801']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            #--------
            $this->db->bind(':id_lista', 802);
            $this->db->bind(':votos', $param['lema802']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            # ----
            $this->db->bind(':id_lista', 803);
            $this->db->bind(':votos', $param['lema803']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
            #-----
            $this->db->bind(':id_lista', 804);
            $this->db->bind(':votos', $param['lema804']);
            $this->db->bind(':id_votos', $id_votos);
            $this->db->execute();
        }

    } 
