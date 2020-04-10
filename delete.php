<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'warsztatDB');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(isset($_GET['id']))
{
     echo $_GET['id'];
     $sql = "DELETE FROM carslist WHERE id=".$_GET['id'];
     $link->query($sql);
	 echo 'Deleted successfully.';
}
?>