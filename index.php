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
               <?php  session_start();
if(isset($_SESSION['username'])){
echo ' <span> <button type="submit" class="btn btn-default btn-lg btn-block"  name="submit" ><span class="glyphicon glyphicon-list-alt" aria-hidden="true"  ></span>  Spis pojazdów</button></span>
'; }
?>
</form><br>
<form action="cennik.php" method="post">
<span> <button type="submit" class="btn btn-default btn-lg btn-block"  name="submit" ><span class="glyphicon glyphicon-usd" aria-hidden="true"  ></span>  Cennik </button></span>
</form><br>
<form action="welcome.php" method="post">
<span> <button type="submit" class="btn btn-default btn-lg btn-block"  name="submit" ><span class="glyphicon glyphicon-user" aria-hidden="true"  ></span>  Twoje konto </button></span>
</form><br>

<form action="pomoc.php" method="post">
<span> <button type="submit" class="btn btn-default btn-lg btn-block"  name="submit" ><span class="glyphicon glyphicon-question-sign" aria-hidden="true"  ></span>  Pomoc </button></span>
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
           <h4> Mechanika pojazdowa</h4>
           <h4> Przeglądy kontrolne</h4>
           <h4> Wymiana opon i felg</h4>
           <h4> Serwis klimatyzacji</h4>
           <h4> Elektryka samochodowa</h4>
           <h4> Elektronika samochodowa</h4>
           <h4> Regeneracja części samochodowych</h4>
           <img src="..\\photos2\\gear.jpg"  style="height: 50px;">

            </div>
         </div>
      </div>
      <footer class="container-fluid text-center">
         <p> </p>
      </footer>
   </body>
</html>