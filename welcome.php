<?php
   include("navbar.php");
?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Cześć, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
        <div class="col-sm-3 sidenav">
</div>
        <div class="col-sm-6 ">
        <br><br>
        <a href="reset-password.php" class="btn btn-default btn-lg btn-block">Zmiana hasła</a> <br><br>
        <a href="logout.php"class="btn btn-default btn-lg btn-block">Wyloguj</a>
</div>
</body>
</html>