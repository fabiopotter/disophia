<?php
// Free Bootstrap Themes : www.Zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "disophiatortas@gmail.com";
	$subject = "Contato do Site ";
	$message = " Nome: " . $name ."\r\n Email: " . $email . "\r\n Mensagem:\r\n" . $message;
	 
	$from = "DiSophiaTortas";
	$headers = "De:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">

	<title>Di Sophia Tortas</title>
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
</head>

 <body>


	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Di Sophia Tortas</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Início</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="single.html">Nossa História</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="menu.html">Produtos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->
	<header class="container">
	<p class="text-center">Segunda - Sábado <strong>10AM até 8PM</strong></p>
		<!-- CAROUSEL -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
		 
			<!-- Wrapper for slides -->
			div class="carousel-inner">
				<div class="item active">
					<img src="images/banner1.jpg" alt="...">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<h1>Diversos Tipos de Torta</h1></br>
						<p>As mais deliciosas tortas da região, para todos os gostos</p></br>
						<!--<a href="menu.html" class="btn btn-primary btn-xl page-scroll">Veja mais</a>-->
					</div><!-- /header-text -->
				</div>
				<div class="item">
					<img src="images/banner2.jpg" alt="...">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<h1>Kits para sua festa!</h1></br>
						<p>Sem tempo de organizar a festa ?! </p></br><p>Sem problemas, nossos kits prontos irão proporcionar a melhor experiência com bastante comodidade.</p>
						<!--<a href="" class="btn btn-primary btn-xl page-scroll">Find Out More</a>-->
					</div><!-- /header-text -->
				</div>
				<div class="item">
					<img src="images/banner3.jpg" alt="...">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<h1>Bolos Personalizados!</h1></br>
						<p>Deseja aquele bolo personalizado e exclusivo ?! Entre em contato conosco e agende o seu!</p></br>
						<!--<a href="" class="btn btn-primary btn-xl page-scroll">Find Out More</a>-->
					</div><!-- /header-text -->
				</div>
			</div>
		 
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div> <!-- Carousel -->
	</header>

	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
		<div id="main-content">
			<div class="container">
				<article>
					<div class="heading">
						<h2>
							<span class="hr">Contact</span>
						</h2>
					</div>
					<div class="row">
						<div class='embed-container maps'>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
						</div>
						<div class="col-md-4 box-item">
							<h3>Contact Info</h3>
							<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</span><br> <br>
							<p>JL.Kemacetan timur no.23. block.Q3<br>
								Jakarta-Indonesia</p>
							   <p>+6221 888 888 90 <br>
								+6221 888 88891</p>
							<p>info@yourdomain.com</p>
						</div>
						<div class="col-md-8">
							<h3>Contact Form</h3>
							<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							<form name="form1" method="post" action="contact.php">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message" style="height: 190px;"></textarea>
										</div>						
										<button type="submit" class="btn btn-skin btn-block" name="submit" id="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
	
	<!-- FOOTER -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row"> 
					<div class="col-footer col-md-3">
						<h2 class="footer-title">About Us</h2>
						<div class="textwidget">Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. <br> <br> 
						Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.</div>
					</div> 
					<div class="col-footer col-md-3 widget_recent_entries">
						<h2 class="footer-title">Recent Posts</h2>
						<ul>
							<li><a href="#">MOST VISITED COUNTRIES</a></li>
							<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
							<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
							<li><a href="#">STARTUP COMPANY&#8217;S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
						</ul>
					</div>
					<div class="col-footer col-md-3">
						<h2 class="footer-title">CONTACT</h2>
						<div class='embed-container maps'>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="200px" frameborder="0" style="border: 0"></iframe>
						</div>
						<span>JL.Kemacetan timur no.23. block.Q3<br>
							Jakarta-Indonesia</span>
						   <span>+6221 888 888 90 <br>
							+6221 888 88891</span>
						<span>info@yourdomain.com</span>
					</div>
					<div class="col-footer col-md-3">
						<h2 class="footer-title">Tags</h2>
						<div class="footer-tags">
							<a href="#">animals</a>
							<a href="#">cooking</a>
							<a href="#">countries</a>
							<a href="#">city</a>
							<a href="#">children</a>
							<a href="#">home</a>
							<a href="#">likes</a>
							<a href="#">photo</a>
							<a href="#">link</a>
							<a href="#">law</a>
							<a href="#">shopping</a>
							<a href="#">skate</a>
							<a href="#">scholl</a>
							<a href="#">video</a>
							<a href="#">travel</a>
							<a href="#">images</a>
							<a href="#">love</a>
							<a href="#">lists</a>
							<a href="#">makeup</a>
							<a href="#">media</a>
							<a href="#">password</a>
							<a href="#">pagination</a>
							<a href="#">wildlife</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>Copyright 2015 - Designed by <a href="https://www.Zerotheme.com" target="_blank">Zerotheme</a></p>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="https://www.facebook.com/Zerotheme"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
  
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-brand").owlCarousel({
        autoPlay: 3000,
        items : 1,
		itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,2],
		navigation: false,
      });
    });
    </script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>