<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> spare parts Turcking system</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!--     <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- <link href="css/responsive.css" rel="stylesheet"> -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
</head><!--/head-->

<body class="homepage">

    <header id="header">


        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">

                        <li <?php if($active=="home") {echo 'class="active"'; } ?>><a href="index.php">Home</a></li>
                        <li <?php if($active=="about") {echo 'class="active"'; } ?> ><a href="about.php">About Us</a></li>
                        <li <?php if($active=="worker") {echo 'class="active"'; } ?> ><a href="worker.php">our stuff</a></li>
                        <li <?php if($active=="tur") {echo 'class="active"'; } ?> ><a href="Turbines.php">Turbines</a></li>
                        <li <?php if($active=="blog") {echo 'class="active"'; } ?> ><a href="blog.php">news</a></li> 
                        <li <?php if($active=="contact") {echo 'class="active"'; } ?> ><a href="contact.php">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->