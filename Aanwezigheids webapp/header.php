<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <?php include 'include.php'; ?>
        <meta charset="utf-8">
        <title>My Website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <script src="js/respond.js"></script>
    </head>

    <body>
        <?php include 'includeJavascript.php'; ?>
        <div class="container">
            <!-- row 1: navigation -->
            <div class="row">
                <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Voltijd</a></li>
                            <li class="active"><a href="#">Deeltijd</a></li>
                            <li><a href="#">Contact</a></li>  
                        </ul>
                    </div>  
                </nav>
            </div>
            <!-- row 2: header -->
            <header class="row">
                <div class="col-lg-6 col-sm-5">
                    <a href="index.html"><img src="img/logo.png" alt="Wisdom Pets. click for home." class="img-responsive"></a>
                </div>
                <div class="col-lg-6 col-sm-7">
                    <img src="img/animals.jpg" alt="" class="hidden-xs img-responsive">
                </div>
            </header>
        </div> <!-- end container -->

        <!-- javascript -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
