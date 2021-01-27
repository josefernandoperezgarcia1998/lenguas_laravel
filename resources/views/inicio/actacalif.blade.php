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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="./base/css/sb-admin-2.min.css" rel="stylesheet">

  <link href="./base/css/fernando.css" rel="stylesheet">
</head>

<body id="page-top">
  <div class="logos">
    <img src="./base/img/educacion_logo.png" alt="logo_SEP" class="logoSep">
    <img src="./base/img/tecnm_logo.png" alt="logo_tecnm" class="logotecnm">
  </div>
  <div class="container">
    <section>
      <h2 class="titleActa">ACTA DE CALIFICACIONES</h2>
      <!-- tablas superiores -->
      <div class="contenedorTablas">
          <div class="tablaLeft">
            <table class="tablaDatosCurso">
              <tbody>
                <tr>
                  <td>DEPARTAMENTO: </td>
                  <td><b>COORDINACIÓN DE LENGUAS EXTRANJERAS</b></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td>CURSO: </td>
                  <td><b>INTERMEDIO A2</b></td>
                </tr>
                <tr>
                  <td>PROFESOR: </td>
                  <td><b>ENRIQUE PEÑA NIETO</b></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td>PERIODO</td>
                  <td><b>VERANO/2020</b></td>
                </tr>
            </table>
          </div>
          <div class="tablaRight">
            <table class="tablaDatosCurso">
              <tbody>
                <tr>
                  <td>FOLIO: </td>
                  <td><b>2716424-V</b></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td>CLAVE: </td>
                  <td><b>VIA2</b></td>
                </tr>
                <tr>
                  <td>GRUPO: </td>
                  <td><b>VA3</b></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td>ALUMNOS: </td>
                  <td><b>20</b></td>
                </tr>
            </table>
          </div>
        </div>
    </section>
    <!-- tabla calificaciones -->
    <section>
      <div class="contenedorTablaCalif">
        <div class="table-responsive">
          <table class="table table-bordered tablaDatosCurso">
            <thead>
              <tr>
                <th>No</th>
                <th>No. CONTROL</th>
                <th>NOMBRE</th>
                <th>CALIFICACIÓN</th>
              </tr>
            </thead>
            <tbody>
            @foreach($alumnos as $alumnos)
                        <form action="{{ route('formularios.formcalif') }}" method="POST"> 
                      <tbody>
                      
                        <tr>
                         
                          <!-- #Número ++-->
                          <th >{{ $alumnos->id}}</th>
                          <!-- No Control -->
                          <td>{{ $alumnos->no_control}}</td>
                          <!-- nombre alumno -->
                          <td>{{ $alumnos->nombre}}</td>
                          <!-- Calificación -->
                          <td>{{ $alumnos->calif}}
                          @csrf
                          
                          </tr>
                          @endforeach
                          </tbody> 
                          </table>
                          </div> 
               
            </tbody>
          </table>
     </div>
    </section>
    <!-- logos y firma -->
    <!--poner a la parte de abajo -->
    <section>
      <div class="logosDown">
        <img src="./base/img/ittg_logo.png" alt="ittgLogo" class="ittgLogo">
        <img src="./base/img/global_logo.png" alt="globalLogo" class="globalLogo">
      </div>
      <div class="extrasDown">
        <div class="mensajeActa">
          <p>Este documento no es válido si tiene tachaduras ó enmendaduras</p>
          <p>Tuxtla Gutiérrez, Chiapas, a 31 de Octubre del 2020</p>
        </div>
        <div class="firmaActa">
          <p>Firma del profesor: _________________________</p>
        </div>
      </div>
      </section>
  </div>



  <!-- Bootstrap core JavaScript-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="./base/vendor/jquery/jquery.min.js"></script>
  <script src="./base/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="./base/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="./base/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="./base/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="./base/js/demo/chart-area-demo.js"></script>
  <script src="./base/js/demo/chart-pie-demo.js"></script>

</body>

</html>
