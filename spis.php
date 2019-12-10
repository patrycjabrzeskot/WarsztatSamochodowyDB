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

<script type="text/javascript">
function confirmation(){
var answer = confirm('Czy na pewno usunąć ten wpis?');
if (answer){
		
		window.location = "spis.php";
		}
else
{
nope
}

}


</script>

</head>

<?php

if (isset($_POST['edit'])){
echo $eid = $_POST['id'];
header("location: spisEdit.php?id=".$eid);
}

?>


<?php

if (isset($_POST['delete']))
{
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'warsztatDB');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$did = $_POST['id'];
$query = $link->prepare( "DELETE FROM carslist WHERE id=?" );
$query->bind_param( "s", $did );
$query->execute();
mysqli_close($link);

}

?>

<body>
  <div class="container">
  <h2>Spis pojazdów</h2>
<br>

<i class="fa fa-sort"></i>
<table id="navbar" class="table">
  <thead>
    <tr>
      <th scope="col" class="th-sm" ><form action="spisDodaj.php" method="post">
<span> <button type="submit" class="btn btn-default"  name="submit" ><span class="glyphicon glyphicon-plus" aria-hidden="true"  ></span> Dodaj pojazd</button></span>
</form></th>
      <th scope="col" class="th-sm" ><form action="spisFiltruj.php" method="post">
<span> <button type="submit" class="btn btn-default"  name="submit" ><span class="glyphicon glyphicon-filter" aria-hidden="true"  ></span> Filtruj</button></span>
</form></th>
<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
      </thead>
      </table>


<i class="fa fa-sort"></i>
<br>
<table id="dtBasicExample" class="table table-hover table-striped tablesorter">
  <thead>
    <tr>
    <th  ><form action="spis.php" method="post"># <span>
 <button type="submit" class="btn btn-default"  name="sortID" ><span class="glyphicon glyphicon-sort" aria-hidden="true"  ></span></button></span>
</form></th>
      <th  ><form action="spis.php" method="post">Imię Nazwisko <span>
 <button type="submit" class="btn btn-default"  name="sortImie" ><span class="glyphicon glyphicon-sort" aria-hidden="true"  ></span></button></span>
</form></th>
<th ><form action="spis.php" method="post">Nr tel <span>
 <button type="submit" class="btn btn-default"  name="sortTel" ><span class="glyphicon glyphicon-sort" aria-hidden="true"  ></span></button></span>
</form></th>
<th ><form action="spis.php" method="post">Model <span>
 <button type="submit" class="btn btn-default"  name="sortModel" ><span class="glyphicon glyphicon-sort" aria-hidden="true"  ></span></button></span>
</form></th>      
<th ><form action="spis.php" method="post">Nr rej <span>
 <button type="submit" class="btn btn-default"  name="sortNumRej" ><span class="glyphicon glyphicon-sort" aria-hidden="true"  ></span></button></span>
</form></th>      
<th ><form action="spis.php" method="post">Data  <span>
 <button type="submit" class="btn btn-default"  name="sortData" ><span class="glyphicon glyphicon-sort" aria-hidden="true"  ></span></button></span>
</form>
<th ><form action="spis.php" method="post">Zdjęcie</form></th>
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
$sql = "SELECT * FROM carslist ORDER BY id";
$result = $link->query($sql);

if (isset($_POST['sortImie'])){
  $sql = "SELECT * FROM carslist ORDER BY clientname";
  $result = $link->query($sql);
}
if (isset($_POST['sortID'])){
  $sql = "SELECT * FROM carslist ORDER BY id";
  $result = $link->query($sql);
}
if (isset($_POST['sortTel'])){
  $sql = "SELECT * FROM carslist ORDER BY phonenumber";
  $result = $link->query($sql);
}
if (isset($_POST['sortModel'])){
  $sql = "SELECT * FROM carslist ORDER BY model";
  $result = $link->query($sql);
}
if (isset($_POST['sortNumRej'])){
  $sql = "SELECT * FROM carslist ORDER BY carnumber";
  $result = $link->query($sql);
}
if (isset($_POST['sortData'])){
  $sql = "SELECT * FROM carslist ORDER BY created_at";
  $result = $link->query($sql);
}

if($result) {
  while($row = $result->fetch_assoc()) {
    $tmp = $row["created_at"];
    $rest = substr($tmp, 0, -9); 

      echo "<tr>
      <th scope='row'>". $row["id"]."</th><td>" . $row["clientname"].  "</td><td>" . $row["phonenumber"]. "</td><td>" . $row["model"]. "</td><td>" . $row["carnumber"]. "</td><td>" . $rest. "</td><td><img style='width: 170px; height: 120px;' src=". $row["picture"]."></td>
      <td><form action='spis.php' method='post'>
      <span><input type=hidden name=id value=".$row["id"]." > <button type='submit' class='btn btn-succes'  name='edit'  id = ". $row["id"]." value=". $row['id']. "><span class='glyphicon glyphicon-pencil' aria-hidden='true'  ></span></button></span>
      </form></td>
      <td><form action='spis.php' method='post'>
      <span><input type=hidden name=id value=".$row["id"]." > <button type='submit' class='btn btn-succes'  name='delete'  id = ". $row["id"]." value=". $row['id']. " onClick='confirmation();' ><span class='glyphicon glyphicon-trash' aria-hidden='true'  ></span></button></span>
      </form></td>
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