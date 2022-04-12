<?php
    $cookie_name = "fish4";
    $cookie_value = isset($_COOKIE[$cookie_name]) ? ++$_COOKIE[$cookie_name] : 1; 
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Products</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--Gallery CSS-->
    <link href="../css/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/gallery.css">

</head>

<body>

    <style type="text/css">
        #product{
        width:55%;
        height:45%;
        margin:50px 0px 50px 150px;
    }
    </style>
    <!-- Main Content -->
    <div id="wrapper">
        <section id= "fish">
          <h1>RockFish, Santa Cruz, Red or Black </h1>
          <img src= ../img/Rock_Fish.jpg alt=" 01" >
          <h2>Size limit: 22 inches</h2>
          <h2>Bag limit: 5</h2>
          </br>
          </br>
          </br>
          <p><a href="../categories.html"> Go to Home</a></p>

      </section>
    </div>


    <!-- jQuery -->
    <!-- <script src="..vendor/jquery/jquery.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/clean-blog.min.js"></script>


</body>
</html>
