<?php
   include("navbar.php");
   ?>
      <?php
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: error.php");
    exit;
}  
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
  <h2>Szukaj</h2>

<i class="fa fa-sort"></i>
<br>
<table id="dtBasicExample" class="table table-hover table-striped tablesorter">
  <thead>
    <tr>
      <th scope="col" class="th-sm" >#</th>
      <th scope="col" class="th-sm" >Imię Nazwisko </th>
      <th scope="col" class="th-sm" >Numer telefonu </th>
      <th scope="col" class="th-sm" >Model samochodu </th>
      <th scope="col" class="th-sm" >Numer rejestracyjny </th>
      <th scope="col" class="th-sm" >Data dodania</th>
      <th scope="col" class="th-sm" >Zdęcie</th>
      <th></th>
    </tr>
  </thead>
<tbody>
<tr>
<form action="spisFiltruj.php" method="post" style="width: 0px;">
<td scope="col" > <input type="text" name="id" id="id" style="width: 30px;"></td>
<td scope="col" class="th-sm" ><input type="text" name="name" id="name" style="width: 150px;" ></td>
<td scope="col" class="th-sm"> <input type="text" name="phonenumber" id="phonenumber" style="width: 150px;"></td>
<td scope="col" class="th-sm"><input type="text" name="model" id="model" style="width: 150px;"></td>
<td scope="col" class="th-sm"><input type="text" name="carnumber" id="carnumber" style="width: 150px;"></td>
<td scope="col" class="th-sm"><input type="text" name="date" id="date" style="width: 150px;"></td>
<td></td>
<td scope="col" class="th-sm"><button type="submit" class="btn btn-succes"  name="ok" data-toggle="tooltip" data-placement="top" title="Filtruj" ><span class="glyphicon glyphicon-search" aria-hidden="true"  ></span></button></td>
<td scope="col" class="th-sm"><button type="submit" class="btn btn-succes"  name="clear" data-toggle="tooltip" data-placement="top" title="Wyczyść filtry" ><span class="glyphicon glyphicon-refresh" aria-hidden="true"  ></span></button> </td>
<td scope="col" class="th-sm"><button type="submit" class="btn btn-succes"  name="cancel" data-toggle="tooltip" data-placement="top" title="Anuluj" ><span class="glyphicon glyphicon-remove" aria-hidden="true"  ></span></button> </td>
</form>


<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'warsztatDB');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM carslist";
$result = $link->query($sql);
if (isset($_POST['cancel'])){

  header("location: spis.php");
}

if (isset($_POST['ok'])){

  $id = $_POST['id'];
  $name = $_POST['name'];
  $phonenumber = $_POST['phonenumber'];
  $model = $_POST['model'];
  $carnumber = $_POST['carnumber'];
  $date = $_POST['date'];

if($id){
  $sql = "SELECT * FROM carslist WHERE id = $id";
  $result = $link->query($sql);
}
if($name){
  $sql = "SELECT * FROM carslist WHERE clientname like '%" . $name.  "%'";
  $result = $link->query($sql);
}
if($phonenumber){
  $sql = "SELECT * FROM carslist WHERE phonenumber like '%" . $phonenumber.  "%'";
  $result = $link->query($sql);
}
if($model){
  $sql = "SELECT * FROM carslist WHERE model like '%" . $model.  "%'";
  $result = $link->query($sql);
}
if($carnumber){
  $sql = "SELECT * FROM carslist WHERE carnumber like '%" . $carnumber.  "%'";
  $result = $link->query($sql);
}
if($date){
  $sql = "SELECT * FROM carslist WHERE created_at like '%" . $date.  "%'";
  $result = $link->query($sql);
}

}

if($result) {


  while($row = $result->fetch_assoc()) {
    $tmp = $row["created_at"];
    $rest = substr($tmp, 0, -9); 
    echo "<tr>
    <th scope='row'>". $row["id"]."</th><td>" . $row["clientname"].  "</td><td>" . $row["phonenumber"]. "</td><td>" . $row["model"]. "</td><td>" . $row["carnumber"]. "</td><td>" . $rest . "</td><td><img style='width: 130px; height: 75px;' src=". $row["picture"]."></td>
  <td></td><td></td>
    </tr>";
  }
  }
 else {
  echo "0 results";
}

?>

</tbody>
  <tfoot>
    <tr>
    <th >#</th>
      <th>Imię Nazwisko</th>
      <th>Numer telefonu</th>
      <th>Model samochodu</th>
      <th>Numer rejestracyjny</th>
      <th>Data dodania</th>
      <th>Zdjęcie</th>
      <td>   </td>
    </tr>
  </tfoot>

</table>
</div>

</body>