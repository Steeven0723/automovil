 <?php
    $conx =mysqli_connect('localhost','root','', 'parcial_2');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condultas</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="Admin/Css/Styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body class="sb-nav-fixed">
    <div class="form" >
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Automovil</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">  
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../index.html">Regresar</a></li>
                </li>
            </ul>
        </nav> 
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            
                            
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePagos" aria-expanded="false" aria-controls="collapsePagos">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Funciones
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                    <div class="collapse" id="collapsePagos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="CosultarAuto.php">Conultar Automoviles</a>
                                            <a class="nav-link" href="../index.html">Registrar Automovil</a>
                                        </nav>
                                    </div>
                        </div>
                    </div>
                    
                </nav>
            </div> 
             
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="Admin/JS/Script.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="Admin/JS/datatables-simple-demo.js"></script>

            <div class="Consulta">
                <div>
                    <h1 class="title">Automoviles</h1>
                    <br>

                        <table style='border: 1px solid black;' width="60%" cellspacing="0">
                        <tr>
                            <td>Documento</td>
                            <td>Nombre</td>
                            <td>Correo</td>
                            <td>Placa</td>
                            <td>Modelo</td>
                            
                        </tr>
                        <?php
                        $sql = "SELECT * FROM automovil";
                        $result=mysqli_query($conx,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $mostrar['documento']?></td>
                            <td><?php echo $mostrar['nombre']?></td>
                            <td><?php echo $mostrar['correo']?></td>
                            <td><?php echo $mostrar['placa']?></td>
                            <td><?php echo $mostrar['modelo']?></td>
                            
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>