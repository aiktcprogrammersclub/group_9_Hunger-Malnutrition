<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Home</title>

<meta charset="utf-8" />

	<meta charset="UTF-8">
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

<style>
.flip3D{
	width: 310px;
	height: 100px;
	margin-top: 100px;
	float: left;
	margin-left: 50px;
	font-size: 30px
}

.flip3D > .front{
	margin-left:50px;
 border-color:#20A6DF;
	position:absolute;
	-webkit-transform: perspective( 600px ) rotateY( 0deg );
	transform: perspective( 600px ) rotateY( 0deg );
	background:#00D1E0 ; width:250px; height:150px; border-radius:10px;
	-webkit-backface-visibility: hidden;
	backface-visibility: visible;
	transition: -webkit-transform .5s linear 0s;
	transition: transform .5s linear 0s;
	padding:30px;
	padding-left:10px;
 background: radial-gradient(#E0FFFF, #000);
}

.flip3D > .back{ 	
	margin-top:0px;
	padding:30px;
	border-radius:10px ;
	position:absolute;
	-webkit-transform: perspective( 600px ) rotateY( 180deg );
	transform: perspective( 600px ) rotateY( 180deg );
	background: #000000; width:320px; height:150px; border-radius: 7px;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: -webkit-transform .5s linear 0s;
	transition: transform .5s linear 0s;
}

.flip3D:hover > .front{
	-webkit-transform: perspective( 600px ) rotateY( -180deg );
	transform: perspective( 600px ) rotateY( -180deg );
}

.flip3D:hover > .back{
	-webkit-transform: perspective( 600px ) rotateY( 0deg );
	transform: perspective( 600px ) rotateY( 0deg );
	color: #FFFFFF;
	margin-left: 0px;
}
</style>

</head>
<body>
<div class="red">
<div class="center">
	<div class="logo"><br>
        <img src="images/14.gif" alt="" /></div>
	<div class="navig">
	<ul class="menu">
		<li class="home-page current"> <a href="index.php"> &nbsp;Home&nbsp;<br /><br />  <span class="text1"> </span></a></li>
		<li> <a href="about.php"> &nbsp;Malnutrition &nbsp;<br /><br /> <span class="text1">		</span></a></li>
		<li><a href="hunger.php"> &nbsp;Hunger &nbsp;<br /><br /><span class="text1">			</span></a></li>
		<li><a href="gallery.php">&nbsp;Gallery&nbsp;<br /><br /><span class="text1">			</span></a></li>


		<li><a href="join.php">&nbsp;Join Us&nbsp;<br /><br /><span class="text1">			</span></a></li>
						<li><?php if($_SESSION['uname']!=NULL) echo "<a href='logout.php'>&nbsp;Logout&nbsp;<br/><br/><span class='text1'></span></a>"; else echo "<a href='login.php'>&nbsp;Log In&nbsp;<br /><br /><span class='text1'></span></a>"; ?></li>
	</ul></div>
 </div></div>

<img src="images/16.jpg" width=100%>

 <div id="contained"><center><br><br>
	<video width="60%" autoplay loop poster="bg.jpg">  
	<source src="myVideo.ogv" type="video/ogg" />  
	<source src="myVideo.webm" type="video/webm" />
	<source src="1.mp4" type="video/mp4" />  
	</video> 
</div>
            

<div class="main">
	<div class="center">
		<div class="one">
			<p class="text2">Hunger</p><br />
			<p class="text3">A condition in which a person, for a sustained period, is unable to eat sufficient food to meet basic nutritional needs.</p><br />
			<p class="text4"><a target="_blank" href="hunger.php">Learn more</a></p></div>
		<div class="two"><p class="text2">Malnutrition</p><br />
			<p class="text3">A condition that results from eating a diet in which nutrients are not enough or are too much such that it causes health problems.</p><br />
			<p class="text4"><a target="_blank" href="about.php">Learn more</a></p></div>
		<div class="three"><p class="text5">Solution</p><br />
			<p class="text3">Come forward and join hands. Lets fight against Malnutrition!</p><br /><br>
			<p class="text4"><a target="_blank" href="sol.php">Learn more</a></p></div>
	</div>
</div>

<div id="feedback">
  <a href="donate.php">DONATION&nbsp;</a>
</div>

<div class="clear"></div>
<div class="line"><div class="center">
	<div class="one1"></div>
	<div class="two2"></div>
	<div class="three3"></div>
</div></div><br><br><br>

<div class="text6">
	<center><b><br>STATISTICS</b></center>
</div>
<DIV style="margin-left: 100px" class="text5">
<div id="box1"  class="flip3D">
  <div class="front">1992<br><br><img src="images/92.png" align = "center" height=100 width=270></div>
  <div class="back"><a href="images/92.png"><font color="#d98943"> This year Sub-Saharan Africa was worst effected by malnutrtion</font></a>
  </div>
</div>

<div id="box2"  class="flip3D">
  <div class="front">1994<br><br><img src="images/94.png" align = "center" height=100 width=270></div>
  <div class="back"><a href="images/94.png"><font color="#d98943">Since 1994-98the number of hungry people in developing regions has fallen by over 200 million</font></a>
  </div>
</div>

<div id="box3"  class="flip3D">
  <div class="front">2000<br><br><img src="images/96.png" align = "center" height=100 width=270></div>
  <div class="back"><a href="images/96.png"><font color="#d98943">Hunger caused 3·1 million child deaths annually or 45% of all child deaths in 2011 </font></a>
  </div>
</div>
</DIV>

<DIV style="margin-left: 250px" class="text5">
<div id="box4"  class="flip3D">
  <div class="front">2006<br><br><img src="images/98.png" align = "center" height=100 width=270></div>
  <div class="back"><a href="images/98.png"><font color="#d98943">Between 2000 and 2013 stunting prevalence declined from 33% to 25% </font></a>
  </div>
</div>

<div id="box5"  class="flip3D">
  <div class="front">2014<br><br><img src="images/11.png" align = "center" height=100 width=270></div>
  <div class="back"><a href="images/11.png"><font color="#d98943" font-size="100px"><font-size="small">two thirds of all wasted children lived in Asia and almost one third in Africa</style> </font></a>
  </div>
</div>
</DIV><br><br>
</div>
		
<div class="clear"></div>
<div class="linr"></div>
<div class="clear"></div>
<div class="footer"></div>
 
<div class="social">
  <a href="https://www.facebook.com/pages/World-Hunger-Malnutrition/337393543107372" class="link facebook" target="_parent"><br><br><i><b><h6 style="font-size:100%">f&nbsp;</h6></a><i class="fa fa-facebook-square"></i></a>

  <a href="https://twitter.com/kentpage/status/526794309665038337" class="link twitter" target="_parent"><br><i><h6 style="font-size:120%">t&nbsp;</h6></a><span class="fa fa-twitter"></span></a>
  <a href="https://plus.google.com/u/0/108352243528078155942/videos" class="link google-plus" target="_parent"><br><i>g+<span class="fa fa-google-plus-square"></span></a>
</div> 

</body>
</html>
