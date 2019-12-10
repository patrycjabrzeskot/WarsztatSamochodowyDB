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
      <title>Warsztat samochodowy  </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="./mycss.css" type="text/css">

   </head>
   <body>
      <div class="container-fluid text-center">
      <!-- <h1>Warsztat samochodowy "Andrzej i synowie"</h1><br> -->
         <div class="row content">
            <div class="col-sm-3 sidenav">
            <div container>
            <form action="spis.php" method="post">

               <img src="..\\photos2\\logo.jpg" style=" height: 150px;">

<span> <button type="submit" class="btn btn-default btn-lg btn-block"  name="submit" ><span class="glyphicon glyphicon-list-alt" aria-hidden="true"  ></span>  Spis pojazdów</button></span>
</form><br>
<form action="historia.php" method="post">
<span> <button type="submit" class="btn btn-default btn-lg btn-block"  name="submit" ><span class="glyphicon glyphicon-usd" aria-hidden="true"  ></span>  Cennik </button></span>
</form><br>
<form action="welcome.php" method="post">
<span> <button type="submit" class="btn btn-default btn-lg btn-block"  name="submit" ><span class="glyphicon glyphicon-user" aria-hidden="true"  ></span>  Twoje konto </button></span>
</form><br>

<form action="pomoc.php" method="post">
<span> <button type="submit" class="btn btn-default btn-lg btn-block"  name="submit" ><span class="glyphicon glyphicon-question-sign" aria-hidden="true"  ></span>  Kontakt </button></span>
</form><br>

               <p><a href="#"> </a></p>
               </div>
            </div>
            <div class="col-sm-6 ">
            <!-- <div class="container"> -->
  <br><br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">


      <div class="item active">
        <img src="..\\photos2\\mech1.jpg" alt="Chicago" style="width:100%; height: 420px;">
      </div>
    
      <div class="item">
        <img src="..\\photos2\\mech2.jpg" alt="New york" style="width:100%; height: 420px;">
      </div>
      <div class="item ">
        <img src="..\\photos2\\mustang.jpg" alt="Los Angeles" style="width:100%; height: 420px;">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

            </div>
            <div class="col-sm-3 sidenav"><br>
               <h3 style="text-align:center;">Pełen zakres usług motoryzacyjnych</h3><br>
               <img src="..\\photos2\\gear.jpg"  style="height: 50px;">
           <h4> Okresowe badania</h4>
           <h4> Mechanika</h4>
           <h4> Wymiana opon</h4>
           <h4> Geometria laserowa</h4>
           <h4> Diagnostyka</h4>
           <h4> Klimatyzacja</h4>
           <h4> Elektronika</h4>
           <h4> Blacharnia i lakiernia</h4>
           <img src="..\\photos2\\gear.jpg"  style="height: 50px;">

            </div>
         </div>
      </div>
      <footer class="container-fluid text-center">
         <p> </p>
      </footer>
   </body>
</html>