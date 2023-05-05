<?php //CONTROLADOR
session_start();
$opcion = $_REQUEST['opcion'];
switch($opcion){

    case 3: //Reguisrar Automivil
        require_once("../modelo/UsuarioBD.php");
        $atributos=new UsuarioBD();
        $atributos->setDocumento($_POST['documento']);
        $atributos->setNombre($_POST['nombre']);
        $atributos->setCorreo($_POST['correo']);
        $atributos->setPlaca($_POST['placa']);
        $atributos->setModelo($_POST['modelo']);
        $mensage=$atributos->setRegistrarAutomovil();
        if($mensage==true)
        require_once("../vista/respuertaRegistro.html");
        else
        require_once("../vista/respuestaError.html");
        break;        
}

?>