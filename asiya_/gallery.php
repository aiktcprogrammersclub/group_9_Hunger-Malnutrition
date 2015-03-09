<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Home</title>

<meta charset="utf-8" />
        <link rel="stylesheet" href="css/ftg.css">
	    <link rel="stylesheet" href="css/float.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css" />
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/tabs.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css' />
	<script src="js/jquery-1.7.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/tms-0.4.x.js"></script>
	<script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:false,
				nextBu:false,
				playBu:false,
				duration:1000,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:true,
				banners:'fromRight',
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->

	<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
	<link rel="stylesheet" href="css1/templatemo_misc.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="css1/templatemo_style.css">

	<!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
</head>
<body>
<div class="red"><div class="center">
	<div class="logo"><br><img src="images/14.gif" alt="" /></div>
	<div class="navig"><br>
	<ul class="menu">
		<li class="home-page current"> <a href="index.php"> &nbsp;Home&nbsp;<br /><br />  <span class="text1"> </span></a></li>
		<li> <a href="about.php"> &nbsp;Malnutrition &nbsp;<br /><br /> <span class="text1">		</span></a></li>
		<li><a href="hunger.php"> &nbsp;Hunger &nbsp;<br /><br /><span class="text1">			</span></a></li>
		<li><a href="gallery.php">&nbsp;Gallery&nbsp;<br /><br /><span class="text1">			</span></a></li>


		<li><a href="join.php">&nbsp;Join Us&nbsp;<br /><br /><span class="text1">			</span></a></li>
						<li><?php if($_SESSION['uname']!=NULL) echo "<a href='logout.php'>&nbsp;Logout&nbsp;<br /><br /><span class='text1'>			</span></a>"; else echo "<a href='login.php'>&nbsp;Log In&nbsp;<br /><br /><span class='text1'>			</span></a>"; ?></li>
	</ul></div>
</div></div>

<div id="menu-container">
		<div class="content homepage" id="menu-1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 col-sm-6 col-md-offset-1">
						<div class="gallery-item">
								<img src="img/g.jpg" alt="image 1" heigth="100" width="100">
								<div class="overlay">
									<a href="img/g.jpg" data-rel="lightbox" class="fa fa-expand"></a>
								</div>
							<div class="content-gallery">
								<h3></h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
								<div class="overlay">
									<a href="img/m.jpg" data-rel="lightbox" class="fa fa-expand"></a>
								</div>
								<img src="img/m.jpg" alt="image 2">
							</div>
							<div class="content-gallery">
								<h3></h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
								<div class="overlay">
									<a href="img/66.jpg" data-rel="lightbox" class="fa fa-expand"></a>
								</div>
								<img src="img/66.jpg" alt="image 5" height="110" width="100">
							</div>
							<div class="content-gallery">
								<h3></h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
								<div class="overlay">
									<a href="img/1.jpg" data-rel="lightbox" class="fa fa-expand"></a>
								</div>
								<img src="img/1.jpg" alt="image 5" height="110" width="100">
							</div>
							<div class="content-gallery">
								<h3></h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
								<div class="overlay">
									<a href="img/yo.jpg" data-rel="lightbox" class="fa fa-expand"></a>
								</div>
								<img src="img/yo.jpg" alt="image 5" >
							</div>
							<div class="content-gallery">
								<h3></h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
					<div class="col-md-2 col-sm-6 col-md-offset-2">
						<div class="gallery-item">
							<div class="image">
								<div class="overlay">
									<a href="img/hjj.gif" data-rel="lightbox" class="fa fa-expand"></a>
								</div>
								<img src="img/hjj.gif" alt="image 6">
							</div>
							<div class="content-gallery">
								<h3></h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
								<div class="overlay">
									<a href="img/kkk.jpg" data-rel="lightbox" class="fa fa-expand"></a>
								</div>
								<img src="img/kkk.jpg" alt="image 7">
							</div>
							<div class="content-gallery">
								<h3></h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
								<div class="overlay">
									<a href="img/in.jpg" data-rel="lightbox" class="fa fa-expand"></a>
								</div>
								<img src="img/in.jpg" alt="image 8">
							</div>
							<div class="content-gallery">
								<h3></h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
								<div class="overlay">
									<a href="img/hh.jpg" data-rel="lightbox" class="fa fa-expand"></a>
								</div>
								<img src="img/hh.jpg" alt="image 5" height="110" width="100">
							</div>
							<div class="content-gallery">
								<h3></h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
					

				</div> <!-- /.row -->
			</div> <!-- /.slide-item -->
		</div> <!-- /.homepage -->
</div>

<!-- Scripts -->
	<script src="js1/jquery-1.10.2.min.js"></script>
    <script src="js1/jquery-migrate-1.2.1.min.js"></script>
    <script src="js1/modernizr.js"></script>
	<script src="js1/bootstrap.js"></script>
	<script src="js1/tabs.js"></script>
	<script src="js1/jquery.lightbox.js"></script>
	<script src="js1/templatemo_custom.js"></script>
	
<div class="clear"></div>
<div class="linr"></div>
<div class="clear"></div>
<div class="footer">

</div>


</body>

</html>