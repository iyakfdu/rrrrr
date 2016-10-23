<?php
  if (!isset($_GET['module']) || $_GET['module']=='')
    $_GET['module'] = 'home.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
 <div class="navbar-collapse collapse">
      
        <h3 class="text-muted">UTS</h3>
        <ul class="nav nav-justified">
		   
            <li class="active"><a href="?module=home.php"> <span class="glyphicon glyphicon-home"></span> Home </a></li>
       	<li class="dropdown"><a data-toggle="dropdown" href="#about"><span class="glyphicon glyphicon-user"></span>Pelanggan</a>
      			  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
      			    <li><a href="?module=input_plgn.php"><span class="glyphicon glyphicon-th-list"></span>Input Pelanggan</a></li>
					<li><a href="?module=pelanggan_tampil.php"><span class="glyphicon glyphicon-pencil"></span>Edit Pelanggan</li></a>
      			  </ul>
      			</li>
			<li class="dropdown"><a data-toggle="dropdown" href="#about"><span class="glyphicon glyphicon-glass"></span>Barang</a>
      			  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
      			    <li><a href="?module=input_brng.php"><span class="glyphicon glyphicon-th-list"></span>Input Barang</a></li>
					<li><a href="?module=barang_tampil.php"><span class="glyphicon glyphicon-pencil"></span>Edit Barang</li></a>
      			  </ul>
      			</li>
				
				 <li class="active"><a href="?module=about.php"> <span class="glyphicon glyphicon-home"></span> about </a></li>
       
        </ul>
      
	  </div>

		  
		  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php include_once('module/'.$_GET['module']); ?>
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; Company 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	 <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>
