<?php

    class ConectarBD{
        public static function conexion(){
            try {
                
                $conexion = new PDO ('mysql:host=localhost; dbname=parcial_2','root', '');
                $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion -> exec("SET CHARACTER SET UTF8");
            }

            catch(Exception $e){
                die("error en la conexion". $e->getMessage());
                echo "Linea del error". $e->getLine();
            }

            return $conexion;
        }
    }
?>