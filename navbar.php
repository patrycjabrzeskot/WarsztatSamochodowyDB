<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


  
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Warsztat samochodowy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="spis.php">Spis pojazdów</a></li>
        <li><a href="historia.php">Cennik</a></li>
        <li><a href="welcome.php">Twoje konto</a></li>
        <li><a href="pomoc.php">Kontakt</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a><?php session_start();
  echo ($_SESSION["username"]); ?></a></li>

<?php 
if(isset($_SESSION['username'])){
  echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Wyloguj </a></li>';
}else{
  echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Rejestracja </a></li>';
  echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Zaloguj </a></li>';
}
?>


      </ul>
    </div>
  </div>
</nav>