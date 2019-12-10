<?php
   include("navbar.php");
?>
   
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/theme.bootstrap_4.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tablesorter.js"></script>
<script src="js/jquery.tablesorter.widgets.js"></script>
<link rel="stylesheet" href="css/jquery.tablesorter.pager.css">
<script src="js/jquery.tablesorter.pager.js"></script>
  <link rel="stylesheet" href="./mycss.css" type="text/css">

</head>




<body>
  <div class="container">
  <h2>Cennik</h2>
<br>

<i class="fa fa-sort"></i>
<br>
<table id="dtBasicExample" class="table table-hover table-striped tablesorter">
  <thead>
    <tr>
    <th ><form action="spis.php" method="post"># </form></th>
<th ><form>Naprawa</form></th>    
<th ><form>Koszt</form> </th>    
      <th></th>
    </tr>
  </thead>
<tbody>

<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'warsztatDB');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM history ORDER BY id";
 $result = $link->query($sql);


if($result) {
  while($row = $result->fetch_assoc()) {
    // $tmp = $row["created_at"];
    // $rest = substr($tmp, 0, -9); 

      echo "<tr>
      <th scope='row'>". $row["id"]."</th><td>" . $row["repair"]. "</td><td>" . $row["cost"]. "</td></tr>";
  }
  }
 else {
  echo "0 results";
}

?>

</tbody>


</table>
</div>

</body>