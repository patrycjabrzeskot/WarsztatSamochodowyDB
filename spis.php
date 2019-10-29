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
  <div class="container">
  <h2>Spis pojazdów</h2>
<br>
<i class="fa fa-sort"></i>
<br>
<table id="dtBasicExample" class="table table-hover table-striped tablesorter">
  <thead>
    <tr>
      <th scope="col" class="th-sm" >#</th>
      <th scope="col" class="th-sm" >Imię Nazwisko  <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></th>
      <th scope="col" class="th-sm" >Numer telefonu  <span class="glyphicon glyphicon-sort" aria-hidden="true"></th>
      <th scope="col" class="th-sm" >Model samochodu  <span class="glyphicon glyphicon-sort" aria-hidden="true"></th>
      <th scope="col" class="th-sm" >Numer rejestracyjny  <span class="glyphicon glyphicon-sort" aria-hidden="true"></th>
      <th scope="col" class="th-sm" >Zdjęcie</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>123321123</td>
      <td>Ferrari</td>
      <td>DFG5231</td>
      <td><span class="glyphicon glyphicon-picture" aria-hidden="true"></td>
      <td> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>531473213</td>
      <td>Fiat</td>     
       <td>QWE4321</td>
       <td><span class="glyphicon glyphicon-picture" aria-hidden="true"></td>
      <td> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>32121223</td>
      <td>BMW</td>
      <td>ABC1231</td>
      <td><span class="glyphicon glyphicon-picture" aria-hidden="true"></td>
      <td> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
    <th >#</th>
      <th>Imię Nazwisko</th>
      <th>Numer telefonu</th>
      <th>Model samochodu</th>
      <th>Numer rejestracyjny</th>
      <th>Zdjęcie</th>
      <td>   </td>
    </tr>
  </tfoot>

</table>

</div>


