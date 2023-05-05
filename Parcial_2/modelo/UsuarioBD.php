<?php //modelo

    class UsuarioBD{

        private $documento;
        private $nombre;
        private $correo;
        private $placa;
        private $modelo;

        
            
        
        public function _construet(){
            include_once('ConectarBD.php');
            $db = ConectarBD:: conexion();
        }

        // _____________Variables Encapsuladas____________
        
        public function getDocumento(){
            return $this->documento;
        }

        public function setDocumento($documento){
            $this-> documento=$documento;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this-> nombre=$nombre;
        }

        public function getCorreo(){
            return $this->correo;
        }

        public function setCorreo($correo){
            $this-> correo=$correo;
        }

        public function getPlaca(){
            return $this->placa;
        }

        public function setPlaca($placa){
            $this-> placa=$placa;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this-> modelo=$modelo;
        }


        // ___________Registrar Automovil__________
        public function setRegistrarAutomovil(){
            
            $sql = "INSERT INTO automovil  VALUES ('$this->documento','$this->nombre','$this->correo','$this->placa','$this->modelo')";
           
            require_once('ConectarBD.php');
            $res=ConectarBD:: conexion()->query($sql);


            return true;
        }


    }

?>