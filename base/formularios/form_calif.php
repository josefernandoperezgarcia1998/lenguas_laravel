<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portal de Docentes</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
       
        <div class="sidebar-brand-text mx-3">Portal de Docentes</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- Menu Desplegable Informacion Escolar-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <span>Documentos de certificación</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="progmat.html">Programa de la Meteria</a>
            <a class="collapse-item" href="instrumen_didac.html">Instrumentación Didáctica</a>
            <a class="collapse-item" href="gest_curso.html">Gestion de Curso</a>
            <a class="collapse-item" href="../calif_parc.html">Calificación Parciales</a>
          </div>
        </div>
      </li>

      <!-- Menu Desplegable Inscripciones-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">          
        <span>Grupos</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="period_curso.html">Periodo en Curso</a>
            <a class="collapse-item" href="exam_espe_glob.html">Exámenes Especiales o Globales</a>
            <a class="collapse-item" href=".html">Grupo de Tutoria</a>
            <a class="collapse-item" href=".html">Residencias</a>
            <a class="collapse-item" href=".html">Evaluaciones</a>
            <a class="collapse-item" href=".html">Seguimiento de Alumnos</a>
            <a class="collapse-item" href=".html">Tésis</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <span>Horarios</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href=".html">Horario del Periodo de Curso</a>
            <a class="collapse-item" href=".html">Registro de Checado</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <span>Utilerias</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <span>Encuesta Laboral</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">


        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nombre del o la Docente</span>
                <img class="img-profile rounded-circle" src="">
              </a>
         
            </li>

          </ul>

        </nav>
       
        <!-- End of Topbar -->
      <?php
        $host = "localhost";
 
 // Nombre de usuario del servidor MySQL
 $usuario = "root";

  // Contraseña del usuario
 $contrasena = "";

 // Nombre de la base de datos
 $baseDeDatos ="lenguas";

 // Nombre de la tabla a trabajar
  
  $tabla2 = "alumnos";
  $table1 = "calificaciones";
  function Conectarse()
 {
   global $host, $usuario, $contrasena, $baseDeDatos, $tabla1, $tabla2;

   if (!($link = mysqli_connect($host, $usuario, $contrasena))) 
   { 
      echo "Error conectando a la base de datos.<br>"; 
     exit(); 
          }
   else
    {
     //echo "Listo, estamos conectados.<br>";
    }
   if (!mysqli_select_db($link, $baseDeDatos)) 
    { 
      echo "Error seleccionando la base de datos.<br>"; 
      exit(); 
    }
   else
    {
     //echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
   }
 return $link; 
  } 

  $link = Conectarse();

 $query = "SELECT $tabla2.nombreAlumno FROM $tabla2 ";

  $result = mysqli_query($link, $query); 

 ?>
  <table BORDER="3PX" width="1000" align="center">
     
      <div class ="contenedor-inputs">
        
     <tr ALING=center>
     <th scope="col">nombre</th>
      <th scope="col">Unidad 1</th>
      
      <th scope="col">Unidad 2</th>
      <th scope="col">Unidad 3</th>
    </tr>
    
   
    
     
   
      
   
  </form>




      
   
  <?php




while($mostrar = mysqli_fetch_array($result)){
?>

   <tr>
   <td><?php echo $mostrar['nombreAlumno'] ?></td>
   <form action="form_base.php" method="post">
        <td><input type ="text" id="calif1" name="calif1" placeholder="Calificacion" class ="input-48" required></td>
        <td><input type ="text" id="calif2" name="calif2" placeholder="Calificacion" class ="input-48" required></td>
        <td><input type ="text" id="calif3" name="calif3" placeholder="Calificacion" class ="input-48" required></td>
       
</tr>

 <!-- printf("<tr><th>%s</th></tr>", $row["nombreAlumno"], ); -->
<?php
} 
?>
<?php
mysqli_free_result($result); 

mysqli_close($link); 

?>
<input type="submit" value="Guardar" class="btn-guardar" >
</table>

        <!-- Begin Page Content -->
       
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Lengua Extrangera (Ingles) ITTG 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
