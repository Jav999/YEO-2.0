<!DOCTYPE html>
<html lang="es">
<head>

    <header>

        <style>
    header {
	width:100%; 
	overflow:hidden; 
	background:#68ff7c;
	margin-bottom:20px;
    }

    .wrapper {
        width:90%; 
        max-width:1000px; 
        margin:auto; 
        overflow:hidden; 
    }

    header .logo {
        color:#000000;
        font-size:120px;
        line-height:200px;
        float:left;
    }

    header nav {
        float:right;
        line-height:200px;
    }

    header nav a {
        display:inline-block;
        color:rgb(0, 0, 0);
        text-decoration:none;
        padding:10px 20px;
        line-height:normal;
        font-size:18px;
        font-weight:bold;
        -webkit-transition:all 500ms ease;
        -o-transition:all 500ms ease;
        transition:all 500ms ease;
    }

    header nav a:hover {
        background:#f56f3a;
        border-radius:50px;
    }
        </style>
		<div class="wrapper">
			<div class="logo">Frutas y Verduras </div>
            
			
			<nav>
            <a href= "index.html"> Menu princpal</a> | 
                <a href= "Abarrotes.php"> Abarrotes</a> |
                <a href= "FrutasVerduras.php"> Frutas y Verduras</a> |  
                <a href= "Carniceria.php"> Carniceria</a> | 
                <a href= "salchichoneria.php"> Salchichoneria</a> | 
                <a href= "electronicos.php"> Electronicos</a>   
			    </nav>
		</div>
	</header>

<script>
    $(document).ready(function(){

        $(window).scroll(function(){
            if( $(this).scrollTop() > 0 ){
                $('header').addClass('header2');
            } else {
                $('header').removeClass('header2');
            }
        });
    
    });
</script>


    <meta charset="UTF-8">
    <title>Frutas y Verduras</title>
    <link rel="stylesheet" href="CSS/estilos.css">



<body>

    

    <?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = "your_password"; 
    $dbname = "yeo"; 
    $mysqli = new mysqli("localhost", $username, $password, $dbname); 
    $query = "SELECT * FROM frutas";
    
    
    echo '<div class="contenedor">';
    
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["Nombre"];
            $field2name = $row["Unidad"];
            $field3name = $row["Precio"];
            $field4name = $row["idFrutas"];
            $field5name = $row["Oferta"];
            
            if( $field5name == 1){
                echo '<div class="tabla">
                <h1 style="color:red;">'.$field1name.'</h1>
                <img src="images/frutas/'.$field4name.'.jpg"/ alt="imagen no disponible" style="width:170px;height:170px;">
                <h3> <sup></sup></h3>
                <h1 style="color:red;"> $'.$field3name.' '.$field2name.'</h1>
                </div>';
            }else{
                echo '<div class="tabla">
                      <h2>'.$field1name.'</h2>
                      <img src="images/frutas/'.$field4name.'.jpg"/ alt="imagen no disponible" style="width:170px;height:170px;">
                      <h3> <sup></sup></h3>
                      <h1> $'.$field3name.' '.$field2name.'</h1>
                      </div>';
            }
        }
        $result->free();
    }
    echo"<br>";
    $query = "SELECT * FROM verduras";
    
    
    echo '<div class="contenedor">';
    
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["Nombre"];
            $field2name = $row["Unidad"];
            $field3name = $row["Precio"];
            $field4name = $row["idverduras"];
            $field5name = $row["Oferta"];
    
            if( $field5name == 1){
                echo '<div class="tabla">
                      <h1 style="color:red;">'.$field1name.'</h1>
                      <img src="images/verduras/'.$field4name.'.jpg"/ alt="imagen no disponible" style="width:170px;height:170px;">
                      <h3> <sup></sup></h3>
                      <h1 style="color:red;"> $'.$field3name.' '.$field2name.'</h1>
                      </div>';
            }else{
                echo '<div class="tabla">
                      <h2>'.$field1name.'</h2>
                      <img src="images/verduras/'.$field4name.'.jpg"/ alt="imagen no disponible" style="width:170px;height:170px;">
                      <h3> <sup></sup></h3>
                      <h1> $'.$field3name.' '.$field2name.'</h1>
                      </div>';
            }  
              
        }
        $result->free();
    }
    ?>
    </div>

	
</body>
</html>