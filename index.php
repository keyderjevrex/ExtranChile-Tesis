<?php
session_start();
$title="ExtranChile";
/* Llamar la Cadena de Conexion*/ 
include ("config/conexion.php");
$active="active";

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
     <!-- para que el menú esté en toda la página -->   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">     
        <div class="container">
            <div class="row" >
           <div class="col-sm-12 overflow" >
                   <div class="social-icons pull-right">
<!--                         <ul class="nav nav-pills">
                       <li><a href=""><i class="fa fa-facebook"></i></a></li> 
                            <li><a href="https://www.twitter.com/ExtranChile"> <i class="fa fa-twitter"></i></a></li>
                          <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>  -->
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
                        <h1><img src="images/logo.png" width="150" lang="60" alt="logo"></h1>
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
                        <li><a class="page-scroll" href="#contacto">Contacto</a></li>                   
	
			
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text" class="dropdown">Logeado como <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b><ul role="menu" class="sub-menu"></i></p></li>
				<li><a href="logout.php">Log Out</a></li>
			</ul>
				<?php } else { ?>
				<li class="dropdown"><a href="IniciarSesion.php">Iniciar Sesion<i class="fa fa-angle-down"></i></a>
				<ul role="menu" class="sub-menu">
				<li><a href="register.php">Registro</a></li>

				<?php } ?>
			</ul>
			
		</div>
	</div>      
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
    </header>
                  
    <!--/#header-->

<section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Bienvenidos a ExtranChile</h1>
                        <p>Un portal informativo sobre todo lo que necesitas acerca de Chile</p>
                        <a href="#" class="btn btn-common">SIGN UP</a>
                    </div>
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

     <section id="blog" class="padding-bottom">
        <div class="container">
            <div class="row">
                <div class="timeline-blog overflow padding-top">
                    <div class="timeline-date text-center">
                        <a href="#" class="btn btn-common uppercase">November 2013</a>
                    </div>
                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="images/blog/timeline/1.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <span class="post-date pull-left">February 11, 2014</span>
                                        <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="images/blog/timeline/2.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html#">Advanced business cards design</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <span class="post-date pull-left">February 11, 2014</span>
                                        <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <iframe src="https://player.vimeo.com/video/95995577"></iframe>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <span class="post-date pull-left">February 11, 2014</span>
                                        <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-blog overflow">
                    <div class="timeline-date text-center">
                        <a href="" class="btn btn-common uppercase">Setember 2013</a>
                    </div>
                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="images/blog/timeline/3.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <span class="post-date pull-left">February 11, 2014</span>
                                        <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="images/blog/timeline/4.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <span class="post-date pull-left">February 11, 2014</span>
                                        <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-date text-center">
                        <a href="#" class="btn btn-common">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>   
     <!--/#noticias-->



<!-- PHP CAROUSEL -->


    <hr>
    <div class="row-fluid">
    <div class="container">
        <div class="col-xs-12 col-md-2 col-md-offset-2 col-sm-6 col-md-6 col-lg-9 padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div id="carousel-example-captions" class="carousel slide" data-ride="carousel"> 
                <?php
                    $sql_slider=mysqli_query($con,"select * from slider where estado=1 order by orden");
                    $nums_slides=mysqli_num_rows($sql_slider);
                ?>
                    <ol class="carousel-indicators">
                        <?php 
                        for ($i=0; $i<$nums_slides; $i++){
                            $active="active";
                            ?>
                            <li data-target="#carousel-example-captions" data-slide-to="<?php echo $i;?>" class="<?php echo $active;?>"></li>
                            <?php
                            $active="";
                        }
                        ?>
                        
                    </ol> 
                <div class="carousel-inner" role="listbox"> 
                <?php
                    $active="active";
                    while ($rw_slider=mysqli_fetch_array($sql_slider)){
                ?>
                        <div class="item <?php echo $active;?>"> 
                            <img data-src="holder.js/900x500/auto/#777:#777" alt="900x500" src="img/slider/<?php echo $rw_slider['url_image'];?>" data-holder-rendered="true"> 
                            <div class="carousel-caption"> 
                                <h3><?php echo $rw_slider['titulo'];?></h3>
                                <p><?php echo $rw_slider['descripcion'];?></p> 
                                <a class='btn btn-<?php echo $rw_slider['estilo_boton'];?> text-right' href="<?php echo $rw_slider['url_boton'];?>"><?php echo $rw_slider['texto_boton'];?></a>
                            </div> 
                        </div>
                        <?php
                        $active="";
                    }
                ?>
                    
                     
                    
                </div> 
                <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
                <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
            </div>
        </div>
     
          
    </div>
    
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<!-- PHP CAROUSEL -->












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
                <div class="col-md-4 col-sm-12" id="contacto">
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
