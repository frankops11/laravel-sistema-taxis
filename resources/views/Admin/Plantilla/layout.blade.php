<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>TransLaSinPar | Inicio</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Este es importante y necesario para el datepicker -->
  <link href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
  <!-- Este es importante y necesario para algunos iconos que estoy usando y que no se quieren mostrar sin esta referencia -->
  <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet"/>
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  {{-- <link rel="stylesheet" href="/adminlte/dist/css/datab/dataTables.semanticui.min.css">
   <link rel="stylesheet" href="/adminlte/dist/css/datab/semantic.min.css"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="/adminlte/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="/adminlte/bower_components/select2/dist/css/select2.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-yellow sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>C</b>T</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>BIENVENIDO</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="/storage/{{ auth()->user()->foto_perfil }}" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{ auth()->user()->nombres."".auth()->user()->apelllidos }}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="/storage/{{ auth()->user()->foto_perfil }}" class="img-circle" alt="User Image">

                  <p>
                    {{ auth()->user()->nombres."".auth()->user()->apelllidos }} - Web Developer
                    <small>Member since Feb. 2020</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                      <input type="submit" value="logout" style="display: none;">
                    </form>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        @include('Admin.Plantilla.sidebar')
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        @yield('header')
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <!--------------------------
        | Your Page Content Here |
        -------------------------->
        @yield('content')


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Octavo Semestre
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2020 <strong href="#">Computacion Espam MFL</strong>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:;">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:;">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->
  <!-- jQuery 3 -->
  <!-- ajax necesitado -->
  <script>
    $(document).ready(function(){
      $('#vehicle_table').DataTable({
          processing:true,
          serverSide:true,
          ajax:{
              url:"{{ route('vehiculos.index') }}"
          },
          columns:[
              {
                  data: 'marca',
                  name: 'marca'
              },
              {
                  data: 'tipoVehiculo',
                  name: 'tipoVehiculo'
              },
              {
                  data: 'placa',
                  name: 'placa'
              },
              {
                  data: 'anio',
                  name: 'anio'
              },
              {
                  data: 'users.nombres',
                  name: 'users.nombres',
              },
              {
                  data: 'users.apellidos',
                  name: 'users.apellidos',
              },
              {
                  data: 'action',
                  name: 'action',
                  orderable: false
              }
          ]
      });


$('#sample_form').on('submit', function(event){
event.preventDefault();
if($('#action').val()=="Edit")
  {
      $.ajax({
          url:"{{ route('vehiculos.update') }}",
          method:"POST",
          data:new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          dataType: "json",
          success:function(data)
          {
              var html ='';
              if(data.errors){
                  html = '<div class="alert alert-danger alert-dismissible">';
                  html +='<ul>';
                  for(var count = 0; count < 1; count ++)
                  {
                      html+='<li>' + data.errors[count] +'</li>';
                  }
                  html +='</ul';
                  html +='</div>';
              }
              if(data.success)
              {
                    html='<div class="alert alert-success">' + data.success + '</div>';
                    $('#sample_form')[0].reset();
                    $('#store_image').html('');
                    $('#vehicle_table').DataTable().ajax.reload();
              }
              $('#form_result').html(html);
          }
      });
  }

      });
      $(document).on('click','.edit', function(){
          var id = $(this).attr('id');
          $('#form_result').html('');
          $.ajax({
              url:"/vehiculos/"+id+"/edit",
              dataType:"json",
              success:function(html){
                  $('#marca').val(html.data.marca);
                  $('#tipoVehiculo').val(html.data.tipoVehiculo);
                  $('#placa').val(html.data.placa);
                  $('#anio').val(html.data.anio);
                  $('#user_id').val(html.data.user_id);
//                  $('#store_image').html("<img src= {{ URL::to('/') }}/images/" + html.data.image + " width='70' class='img-thumbnail' />");
                  $('#hidden_id').val(html.data.id);
                  $('.modal-title').text("Edit New Record");
                  $('#action_button').val("Edit");
                  $('#action').val("Edit");
                  $('#formModal').modal('show');
              }
          })
      });
      //inicia el desmadre
      $(document).on('click','.view', function(){
          var id = $(this).attr('id');
          $('#form_result').html('');
          $.ajax({
              url:"/vehiculos/"+id,
              dataType:"json",
              success:function(html){
                  $('#vmarca').text(html.data.marca);
                  $('#vtipoVehiculo').text(html.data.tipoVehiculo);
                  $('#vplaca').text(html.data.placa);
                  $('#vanio').text(html.data.anio);
                  $('#vuser_id').text(html.data.user_id);
                  $('#vusernombres').text(html.data.users.nombres);
                  $('#vuserapellidos').text(html.data.users.apellidos);
                  $('#vstore_image').html("<img src= {{ URL::to('storage') }}/" + html.data.users.foto_perfil + " style='text-align:center' class='img-rounded img-fill' height='220' width='220'/>");
                  $('#exampleModal').modal('show');
              }
          })
      });
      //termina el desmadre



      var user_id;
      $(document).on('click','.delete',function(){
          user_id = $(this).attr('id');
          $('#confirmModal').modal('show');
      });

      $('#ok_button').click(function(){
          $.ajax({
              url:"vehiculos/destroy/"+user_id, beforeSend:function(){
                  $('#ok_button').text('Deleting...');
              },
              success:function(data)
              {
                  setTimeout(function(){
                      $('#confirmModal').modal('hide');
                      $('#vehicle_table').DataTable().ajax.reload();
                  },2000);
              }
          })
      });
  });

  </script>
  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="{{ asset('js/user.js') }}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- datatables JS -->
  <script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- para usar botones en datatables JS -->
  <script src="/Prueba/datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="/Prueba/datatables/JSZip-2.5.0/jszip.min.js"></script>
  <script src="/Prueba/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
  <script src="/Prueba/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
  <script src="/Prueba/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
  <script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script>
  <script type="text/javascript" src="/Prueba/main.js"></script>
  <!-- AdminLTE App -->
  <script src="/adminlte/dist/js/adminlte.min.js"></script>
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

</body>

</html>
