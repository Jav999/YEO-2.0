<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>

<body>
<span>Bienvenidos a YEO-Market</span>
<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = "your_password"; 
    $dbname = "yeo"; 
    $mysqli = new mysqli("localhost", $username, $password, $dbname); 
    $query = "SELECT * FROM frutas WHERE Oferta = 1";
    
    
    echo '<div class="container">
	      <h2>Ofertas</h2>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		  
		  <div class="item active">
		  <center><h1>Mira nuestros productos en oferta</h1></center> 
		  <img src="images/Yeo_Logo.png" alt="Los Angeles" style="width:170px;height:170px;">
		  <center><h4>Desliza a los lados para explorar</h4></center>
		  </div>';
    
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["Nombre"];
            $field2name = $row["Unidad"];
            $field3name = $row["Precio"];
            $field4name = $row["idFrutas"];
            $field5name = $row["Marca"];
    
            echo '<div class="item">
			            <center><h2>'.$field1name.'</h2></center>
				          <img src="images/frutas/'.$field4name.'.jpg" alt="Chicago" style="width:170px;height:170px;">
                  <center><h4>'.$field5name.' '.$field2name.'</h4></center>
                  <center><h1> $'.$field3name.'</h1></center>
				          </div> ';
                  
              
        }
        $result->free();
    }
    $query = "SELECT * FROM verduras WHERE Oferta = 1";

    if ($result = $mysqli->query($query)) {
      while ($row = $result->fetch_assoc()) {
          $field1name = $row["Nombre"];
          $field2name = $row["Unidad"];
          $field3name = $row["Precio"];
          $field4name = $row["idverduras"];
          $field5name = $row["Marca"];
  
          echo '<div class="item">
                <center><h2>'.$field1name.'</h2></center>
                <img src="images/verduras/'.$field4name.'.jpg" alt="Chicago" style="width:170px;height:170px;">
                <center><h4>'.$field5name.' '.$field2name.'</h4></center>
                <center><h1> $'.$field3name.'</h1></center>
                </div> ';
                
            
      }
      $result->free();
  }
  $query = "SELECT * FROM abarrotes WHERE Oferta = 1";

  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Nombre"];
        $field2name = $row["Unidad"];
        $field3name = $row["Precio"];
        $field4name = $row["idAbarrotes"];
        $field5name = $row["Marca"];

        echo '<div class="item">
              <center><h2>'.$field1name.'</h2></center>
              <img src="images/abarrotes/'.$field4name.'.jpg" alt="Chicago" style="width:170px;height:170px;">
              <center><h4>'.$field5name.' '.$field2name.'</h4></center>
              <center><h1> $'.$field3name.'</h1></center>
              </div> ';
              
          
    }
    $result->free();
}
$query = "SELECT * FROM carnes WHERE Oferta = 1";

if ($result = $mysqli->query($query)) {
  while ($row = $result->fetch_assoc()) {
      $field1name = $row["Nombre"];
      $field2name = $row["Unidad"];
      $field3name = $row["Precio"];
      $field4name = $row["idcarnes"];
      $field5name = $row["Marca"];

      echo '<div class="item">
            <center><h2>'.$field1name.'</h2></center>
            <img src="images/carniceria/'.$field4name.'.jpg" alt="Chicago" style="width:170px;height:170px;">
            <center><h4>'.$field5name.' '.$field2name.'</h4></center>
            <center><h1> $'.$field3name.'</h1></center>
            </div> ';
            
        
  }
  $result->free();
}
$query = "SELECT * FROM carnesfrias WHERE Oferta = 1";

if ($result = $mysqli->query($query)) {
  while ($row = $result->fetch_assoc()) {
      $field1name = $row["Nombre"];
      $field2name = $row["Unidad"];
      $field3name = $row["Precio"];
      $field4name = $row["idcarnesfrias"];
      $field5name = $row["Marca"];

      echo '<div class="item">
            <center><h2>'.$field1name.'</h2></center>
            <img src="images/carnesFrias/'.$field4name.'.jpg" alt="Chicago" style="width:170px;height:170px;">
            <center><h4>'.$field5name.' '.$field2name.'</h4></center>
            <center><h1> $'.$field3name.'</h1></center>
            </div> ';
            
        
  }
  $result->free();
}
$query = "SELECT * FROM lacteosyhuevos WHERE Oferta = 1";

if ($result = $mysqli->query($query)) {
  while ($row = $result->fetch_assoc()) {
      $field1name = $row["Nombre"];
      $field2name = $row["Unidad"];
      $field3name = $row["Precio"];
      $field4name = $row["idlacteosyhuevos"];
      $field5name = $row["Marca"];

      echo '<div class="item">
            <center><h2>'.$field1name.'</h2></center>
            <img src="images/lacteosYhuevos/'.$field4name.'.jpg" alt="Chicago" style="width:170px;height:170px;">
            <center><h4>'.$field5name.' '.$field2name.'</h4></center>
            <center><h1> $'.$field3name.'</h1></center>
            </div> ';
            
        
  }
  $result->free();
}
$query = "SELECT * FROM electronicos WHERE Oferta = 1";

if ($result = $mysqli->query($query)) {
  while ($row = $result->fetch_assoc()) {
      $field1name = $row["Nombre"];
      $field2name = $row["Unidad"];
      $field3name = $row["Precio"];
      $field4name = $row["idelectronicos"];
      $field5name = $row["Marca"];

      echo '<div class="item">
            <center><h2>'.$field1name.'</h2></center>
            <img src="images/electronicos/'.$field4name.'.jpg" alt="Chicago" style="width:170px;height:170px;">
            <center><h4>'.$field5name.' '.$field2name.'</h4></center>
            <center><h1> $'.$field3name.'</h1></center>
            </div> ';
            
        
  }
  $result->free();
}
    ?>
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

</body>
</html>