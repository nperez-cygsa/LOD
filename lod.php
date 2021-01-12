<?php
session_start();

if(!isset($_SESSION['acceso'])){ ?>
  <script>window.location="../login.php";</script>
<?php } ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>APPS GOBM</title>

  <!-- Bootstrap -->
  <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  
  <!-- jQuery -->
  <script src="../../vendors/jquery/dist/jquery.min.js"></script>
  <script src="../includes/sweetalert2.all.min.js"></script>

  <script src="../includes/jszip.min.js"></script>
  <script src="../includes/vfs_fonts.js"></script>

  <!-- AutoComplete -->
  <link rel="stylesheet" href="./../includes/select2.css">
  <script src="./../includes/select2.full.js"></script>

  <!-- Mask -->
  <script src="import/jquery.mask.js"></script>

  <!-- bootstrap-datetimepicker -->
  <script src="../../vendors/moment/min/moment-with-locales.min.js"></script>
  <script src="../../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <link href="../../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

  <link rel="stylesheet" href="../../web/includes/sweetAlert2fix.css">
  <link rel="stylesheet" href="import/tabs.css">
  <link rel="stylesheet" href="import/form_boostrap4.css">

  <!-- Custom Theme Style -->
  <link rel="stylesheet" href="css/estilosGeneralesFormularios.css">
  <link rel="stylesheet" href="css/generales.css">

  <!-- Autocompletar RUT -->
  <script src="./../js/jquery.Rut.js"></script>
  

<style>
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #72a642;
    font-weight: bold;
    text-transform: uppercase;
  }

  a {
    color: #3d3b3b;
  }

  .select2-container {
    width: 100% !important;
  }
</style>

</head>

<body class="nav-sm" id="bodycss"> 
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="../neoindex/neoindex.php" class="site_title"><img style="width:55px" src="../images/logo_codelco.png" alt=""><span>&nbsp;APPS GOBM</span></a>
          </div>
          <div class="clearfix"></div>
          <?php
          include '../includes/sidebar_apps.php';
          ?>
        </div>
      </div>

      <!-- page content -->
      <div class="right_col imagenFondo" role="main" style="overflow:auto;top:-10px">

        <div class="col-md-12 col-sm-12 col-xs-12 ">

          <div class="x_panel cuadrosFormularios">
            
            <div class="x_content">
           
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-carga-tab" data-toggle="pill" href="#pills-carga" role="tab" aria-controls="pills-carga" aria-selected="false">Carga CSV Dashboard</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-busqueda-tab" data-toggle="pill" href="#pills-busqueda" role="tab" aria-controls="pills-busqueda" aria-selected="true">Búsqueda</a>
                </li>    
              </ul>
              
            </div>

          </div>


        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12 ">

          
            <div class="x_content">

              <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade" id="pills-carga" role="tabpanel" aria-labelledby="pills-carga-tab">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <?php
                      include 'lod_csv_imp/importacion.php';
                    ?>
                    </div>
                  </div>
                </div>
                                
                <div class="tab-pane fade" id="pills-busqueda" role="tabpanel" aria-labelledby="pills-busqueda-tab">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <?php
                      include 'busqueda_lod/busqueda_lod.php';
                    ?>
                    </div>
                  </div>
                </div>


              </div>
           
            </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->

      <?php
      include '../includes/footer.php';
      ?>
      <!-- /footer content -->
    </div>
  </div>
  <!-- jQuery -->
  <!-- Bootstrap -->
  <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../../vendors/nprogress/nprogress.js"></script>
  <!-- iCheck -->
  <script src="../../vendors/iCheck/icheck.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../../build/js/custom.min.js"></script>
  <script src="../../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>


  <link href="../includes/datatables.min.css" rel="stylesheet">
  <script src="../includes/datatables.min.js"></script>
  <script src="../includes/dataTables.buttons.min.js"></script>



 <script>
   $(document).ready(function(){
    $('#pills-carga-tab').tab('show');
    $('.right_col').css('min-height','');
   })
 </script>
   
  </body>
</html>