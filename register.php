<?php
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//Establece el error de validación como flag
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $terminosycond = mysqli_real_escape_string($con, $_POST['terminosycond']);
    
    //Nombre sólo puede contener caracteres alfabéticos y espacio (esto varia sgun requerimiento)
    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $name_error = "El nombre debe contener solo caracteres del alfabeto y espacio.";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Ingresa un correo electrónico válido.";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "La contraseña debe tener un mínimo de 6 caracteres.";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Las contraseñas no coinciden";
    }
    if(!$terminosycond) {
        //$error = true;
        //$terminosycond_error = "Debes aceptar Terminos y condiciones";
    }
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
            //$successmsg = "¡Registrado exitosamente! <a href='login.php'>Click here to Login</a>";
            $successmsg = '
              <div class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>EXITO.!</strong> ¡Registrado exitosamente!
              </div>
              ';
        } else {
            //$errormsg = "Error de registro. Vuelve a intentarlo más tarde.";
            $errormsg = '
            <div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error de registro.!</strong> Verifica tus datos.
            </div>
            ';
        }
    }
}
?>

<!-- PHP CAROUSEL -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   <!-- PHP CAROUSEL -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Triangle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                    	<h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       <li class="dropdown active"><a href="tramites.php">Trámites <i class="fa fa-angle-down"></i></a>  <!--fa fa-angle-down// flecha -->
                             <ul role="menu" class="sub-menu">
                               <li><a href="#VisaTemporalConVínculoChileno">Visa temporal con vínculo chileno</a></li>
                                <li><a href="#VisaTemporaríaPorMotivosLaborales">Visa temporaría por motivos laborales</a></li>
                                <li><a href="#VisaTemporariaParaNiñosNiñasYAdolescentes"> Visa temporaría Para niños, niñas y adolescentes</a></li>
                                <li><a href="#reconsideracion">Reconsideración para rechazos de visa de residencia</a></li>
                                <li><a href="#AmpliacionyProrrogaDeTurismo">Ampliación y Prórroga de turismo</a></li>
                            
                            </ul>  
                        </li>

     
                        <li class="dropdown"><a href="portfolio.php"> Donaciones <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="portfolio.php"> Ingresar Donación</a></li>
                                <li><a href="portfoliofour.php">Ver Donaciones</a></li>
                            </ul>
                        </li> 
                      	<li class="dropdown"><a href="portfolio.php">Bolsa de Trabajo <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="portfolio.php">Ingresa Empleo</a></li>
                                <li><a href="portfoliofour.php">Buscar Empleo</a></li>
                            </ul>
                        </li>  
                         <li class="dropdown"><a href="portfolio.php">Aprende Español<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="portfolio.php">Nivel Básico</a></li>
                                <li><a href="portfoliofour.php">Nivel Medio</a></li>
                                <li><a href="portfoliofour.php">Nivel Avanzado</a></li>
                            </ul>
                        </li>                         
                        <li><a href="shortcodes.php ">Consejos</a></li> 
                        <li><a href="shortcodes.php ">Quienes Somos</a></li>    
                        <li><a href="shortcodes.php ">Contacto</a></li>   
                        <li class="active"><a href="IniciarSesion.php">Login</a></li>
						<li><a href="register.php">Registro</a></li>                
                    </ul>
                </div>

                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>


<section id="home-slider">              
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <div class="contact-form bottom">
                        <h2>Registro</h2>

                    <div class="form-group">
                        <input type="text" name="name" placeholder="Nombres Completos" required value="<?php if($error) echo $name; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Correo Electrónico" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" placeholder="Contraseña" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="password" name="cpassword" placeholder="Confirmar Contraseña" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>
                    
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" name="terminosycond" id="terminosycond" required=""> Acepto todos los
                          <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#TernimosCondiciones">
                               Terminos y condiciones
                            </button>
                            <br>
                            <span class="text-danger"><?php if (isset($terminosycond_error)) echo $terminosycond_error; ?></span>
                        </label>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" name="signup" value="Registrar" class="btn btn-submit" />
                        Ya te registaste? <a href="IniciarSesion.php">Logeate Aqui</a>
                    </div>
                
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
</div>
</section> 
    </header>
                  
    <!--/#header-->


    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile2.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br> 
                        Feeder Road, <br> 
                        Bristol, BS2 0UY <br> 
                        United Kingdom <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2016. All Rights Reserved.</p>
                        <p>Crafted by <a target="_blank" href="http://designscrazed.org/">Allie</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->
  </body>
</html>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   

  </body>
</html>

  </body>
</html>
</body>
</html>
<div class="modal fade" id="TernimosCondiciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
            <b>Terminos y Condiciones </b>
        </h4>
      </div>
      <div class="modal-body">
        Mediante la simple utilización de devhuayra.com y al contratar cualquiera de los servicios ofrecidos a través de devhuayra.com, el Cliente reconoce haber leído y acepta los términos expuestos en el presente Acuerdo y / o las políticas que formen parte del mismo.
        <br>
        <br>
        <p>
            <b>Uso de la cuenta de usuario en devHuayra.com</b>
        </p>
        <p>
            <ul>
                <li>El usuario de Registros.com se compromete a proporcionar mediante su registro datos veraces, exactos y completos sobre su identidad. También se compromete a revisar periódicamente la información proporcionada y garantiza la validez y la vigencia de los datos asociados tanto a su cuenta de usuario como a los productos y servicios contratados. El incumplimiento de esta condición podrá motivar la cancelación de la cuenta y la denegación al usuario el acceso a los servicios de Registros.com de forma temporal o permanente.</li>
                <li>Registros.com se reserva el derecho de solicitar la verificación y / o actualización de la información proporcionada por el Cliente, quien deberá responder satisfactoriamente a la petición de Registros.com en el plazo máximo de 5 días laborables. El Cliente entiende y acepta que el no cumplimiento de este requisito constituye una vulneración del presente Acuerdo y puede dar lugar a la cancelación de los productos y/o servicios cont...</li>
                <br>
                <a href="#" class="btn btn-default btn-xs">
                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Descargar PDF
                </a>
            </ul>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        <!--button type="button" class="btn btn-primary">Guardar Cambios</button-->
      </div>
    </div>
  </div>
</div>

<script>
    //Modal terminos y condiciones
    $('#TernimosCondiciones').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
</script>