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

<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'warsztatDB');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM carslist";
$result = $link->query($sql);

if($result) {

  while($row = $result->fetch_assoc()) {
    $maxIndex = $row["id"];
  }
    $nextID = $maxIndex+1;
  }


if (isset($_POST['cancel']))
{
   myfnc();
}

if (isset($_POST['ok']))
{
    define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'warsztatDB');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


$id = $_POST['id'];
$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$model = $_POST['model'];
$carnumber = $_POST['carnumber'];
$date = $_POST['date'];
$photo = $_POST['photo'];


$sql = "INSERT INTO carslist VALUES ('$nextID', '$name', '$phonenumber','$model', '$carnumber', '\\\\..\\\\photos\\\\$photo' , '$date')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);

   myfnc();
}


function myfnc()
{
    header("location: spis.php");
}

?>

  <div class="container">
  <h2>Dodaj pojazd do bazy</h2>


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
<form action="spisDodaj.php" method="post">
<th scope="col" > <?php echo $nextID; ?> </th>
<td scope="col" class="th-sm" ><input type="text" name="name" id="name" style="width: 150px;" ></td>
<td scope="col" class="th-sm"> <input type="text" name="phonenumber" id="phonenumber" style="width: 150px;"></td>
<td scope="col" class="th-sm"><input type="text" name="model" id="model" style="width: 150px;"></td>
<td scope="col" class="th-sm"><input type="text" name="carnumber" id="carnumber" style="width: 150px;"></td>
<td scope="col" class="th-sm"><input type="text" name="date" id="date" style="width: 150px;" value= "<?php echo date('Y-m-d'); ?>"></td>
<td>  <input type="file" id= photo name="photo"/><br/></td>
<td scope="col" class="th-sm"><span><button type="submit" class="btn btn-succes"  name="ok" data-toggle="tooltip" data-placement="top" title="Dodaj" ><span class="glyphicon glyphicon-ok" aria-hidden="true"  ></span></button></span> </td>
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