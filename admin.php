<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>mobile | Hotel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/dist/css/skins/_all-skins.min.css">

   

<!-- <<Attched Stylesheets>> -->
<link rel="stylesheet" href="css/theme.css" type="text/css" />

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!--datepicker-->
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
      rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>



<!-- cardviews cdn -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <style>
        .navbar-custom {
            background-color: #190bef;
        }
        .font-color{
            color: #ffffff;
        }
         textarea
        {
          width:100%;
        }
        select
         {
          width:100%;
        }

    </style>
   

   <!--datepicker-->
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
      rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Javascript -->
<script>
    $(function() {
        $( "#datepicker-1" ).datepicker({
            minDate: 0
        });
        $( "#datepicker-2" ).datepicker({
            minDate: 0
        });
    });
</script>
<!--datepicker end-->


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

   <?php
   include('horizontalnav.php');
   include('verticalnav.php');
   ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<!-- Info boxes -->
<div class="row">
<div class="col-md-12 col-sm-6 col-xs-12">
<div class="content">
<div class="container-fluid">
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box">
<div class="box-header with-border">
</div>
<main class="mdl-layout__content center">
    <div class="page-content">

        <div class="demo-card-wide mdl-card mdl-shadow--4dp  mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">
        <!-- php save the details to db -->
            <?php
            include('jobs.php');
            ?>
        </div>
    </div>
</main>
</div>
</div>
</div>
</section>
</div>
</div>                    
</div>
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>

    <!-- jQuery 2.2.3 -->
    <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="https://almsaeedstudio.com/themes/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/app.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.8/js/app.min.js "></script>
    </div>
</body>
</html>
