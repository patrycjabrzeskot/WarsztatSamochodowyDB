<?php
   error_reporting(0);
   $appservlang = $_GET['appservlang'];
   switch ($appservlang) {
   	case "th" :
   		$appservlang = "th";
   	break;
   	default :
   		$appservlang = "en";
   	break;
   }
   
   // include("appserv/main.php");
   include("navbar.php");
   
   // $phpver=phpversion();
   ?>
<html>
   <head>
      <title>Warsztat samochodowy</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="./mycss.css" type="text/css">

   </head>
   <body>
      <div class="container-fluid text-center">
         <div class="row content">
            <div class="col-sm-2 sidenav">
               <p><a href="#"></a></p>
               <p><a href="#"></a></p>
               <p><a href="#"> </a></p>
            </div>
            <div class="col-sm-8 text-left">
               <!-- <h1>Welcome</h1> --><br>
               <img class ='auto' src='auto.gif'>
               <p> </p>
               <hr>
            </div>
            <div class="col-sm-2 sidenav">
               <div class="well">
                  <p> </p>
               </div>
               <div class="well">
                  <p> </p>
               </div>
               <div class="well">
                  <p> </p>
               </div>
            </div>
         </div>
      </div>
      <footer class="container-fluid text-center">
         <p> </p>
      </footer>
   </body>
</html>