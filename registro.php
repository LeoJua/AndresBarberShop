<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="login/owl.carousel.min.css">

    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,300italic,300,700,700italic'
		rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/login/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/login/style.css">

    <title>Registro</title>
  </head>
  <body class="body">


	<div class="menu-outer">
		<div class="menu-icon">
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
		</div>
		<nav>
			<ul>
				
				<li><a href="Reservas.html">Reservas</a></li>
				<li><a href="home.html">Inicio</a></li>
				<li><a href="about.html">Acerca de andreuspeluqueria</a></li>
                <li><a href="login.html">Iniciar Sesión</a></li>
                <li><a href="index.html">Video de bienvenida</a></li>
				<!-- <li><a href="Historia.html">Mi Historia</a></li>-->

			</ul>
		</nav>
	</div>
	<a class="menu-close" onClick="return true">
		<div class="menu-icon">
			<div class="bar"></div>
			<div class="bar"></div>
		</div>
	</a>

    <div>
        <ul class="stay-connected-inner list-inline">
            <a href="https://api.whatsapp.com/message/WYNJTWIZZXCGG1" class= " hiden fixedcallicon" target="_blank"><i class="fa fa-whatsapp whatsapp-icon fa-3x " ></i>Chatea con nosotros!</a>
    </div>
	

    <form method="post">
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="https://img.freepik.com/vector-gratis/ilustracion-dibujos-animados-usuario-femenino-que-ingresa_241107-682.jpg?size=626&ext=jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Registro <strong>usuarios nuevos</strong></h3>
           
            </div>
            <div class="form-group first">
                <p>Identificación:            
                    <input name="dni" placeholder="CEDULA"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    type = "number"
                    maxlength = "10" required/>
                    </p>
                </div>

            
            
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Usuario</label>
                <input name=usuario  type="text" class="form-control" id="username" required>

              </div>
              <div class="form-group last mb-4">
                <label for="password">Contraseña</label>
                <input  name="password"type="password" class="form-control" id="password"required>
                
              </div>
              
                     
              <input name="submit" type="submit" value="Registrate"class="btn text-white btn-block btn-primary" required>

             
              
        
    
   
 

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
  
<?php

require_once("conectar.php");

if ($stmt = $conn->prepare("INSERT INTO usuarios (dni, usuario, clave) VALUES (?, ?, ?)"))
{
      $dni = $_POST['dni'];
      $usuario = $_POST['usuario'];
	    $password = $_POST['password'];
	    $options = array("cost"=>4);
	    $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
            
      $stmt->bind_param("iss", $dni, $usuario, $hashPassword);
	    $stmt->execute();
  
 if (!$stmt->error){
   
         echo "<table border=1 cellspacing=0 cellpading=0 align=center BORDER BGCOLOR=#141318>
         <p><tr align=center > <td><font color=yellow ><div style=font-size:1.25em color:yellow> USUARIO REGISTRADO CON EXITO CLIK EN LOGIN! </div></td></tr></p>
              </table>"; 
                   }
}

?>
<html>
    <br><br><br><br><br>
<a class="btn text-white btn-block btn-primary" href="login.html">Login</a>
</html>