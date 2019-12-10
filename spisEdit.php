<?php
   include("navbar.php");
   $id = $_REQUEST['id'];


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
  <h2>Edytuj</h2>

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
<form action="spisEdit.php" method="post" style="width: 0px;">
<?php
   $id = $_REQUEST['id'];
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'warsztatDB');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM carslist WHERE  id = $id";
$result = $link->query($sql);
if($result) {
    while($row = $result->fetch_assoc()) {

     $tmp = $row["created_at"];
    $rest = substr($tmp, 0, -9);  

      echo  " <td scope='col' > <input type='text' name='id' value=$id id='id' style='width: 30px;'></td>";
      echo  " <td scope='col' > <input type='text' name='clientname' value='" . $row["clientname"].  "' id='clientname' style='width: 150px;'></td>";
      echo  " <td scope='col' > <input type='text' name='phonenumber' value='" . $row["phonenumber"].  "' id='phonenumber' style='width: 150px;'></td>";
      echo  " <td scope='col' > <input type='text' name='model' value='" . $row["model"].  "' id='model' style='width: 150px;'></td>";
      echo  " <td scope='col' > <input type='text' name='carnumber' value='" . $row["carnumber"].  "' id='carnumber' style='width: 150px;'></td>";
      echo  " <td scope='col' > <input type='text' name='date' value='" . $rest ."' id='date' style='width: 150px;'></td>";
      echo "<td><input type='file' id= photo name='photo'/><br>Poprzednie zdjęcie:<br><img style='width: 130px; height: 75px;' src=". $row["picture"]." name='picture' id='picture'> </td>";      
    }
}

?>

<td scope="col" class="th-sm"><button type="submit" class="btn btn-succes"  name="ok" data-toggle="tooltip" data-placement="top" title="Edytuj" ><span class="glyphicon glyphicon-ok" aria-hidden="true"  ></span></button></td>
</form><form action="spisEdit.php" method="post">
<td scope="col" class="th-sm"><button type="submit" class="btn btn-succes"  name="cancel" data-toggle="tooltip" data-placement="top" title="Anuluj" ><span class="glyphicon glyphicon-remove" aria-hidden="true"  ></span></button> </td>
</form>

<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'warsztatDB');
$id = $_REQUEST['id'];

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM carslist  WHERE id != $id";
$result = $link->query($sql);
if (isset($_POST['cancel'])){

  header("location: spis.php");
}

if (isset($_POST['ok'])){

  $clientname = $_POST['clientname'];
  $phonenumber = $_POST['phonenumber'];
  $model = $_POST['model'];
  $carnumber = $_POST['carnumber'];
  $date = $_POST['date'];
  $picture = $_POST['picture'];
  $photo = $_POST['photo'];

  if(!$photo){

    $sql = "UPDATE carslist SET clientname = '$clientname', phonenumber=$phonenumber, model='$model', carnumber='$carnumber', created_at = '$date'  where   id = $id";
  }

  if($photo){
    $sql = "UPDATE carslist SET clientname = '$clientname', phonenumber=$phonenumber, model='$model', carnumber='$carnumber', created_at = '$date', picture = '\\\\..\\\\photos\\\\$photo'  where   id = $id";
  }
//echo $sql;
  if(mysqli_query($link, $sql)){
    //echo "Records added successfully.";
    header("location: spis.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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