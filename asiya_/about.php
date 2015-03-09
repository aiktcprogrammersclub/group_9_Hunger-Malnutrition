<?php
session_start();
?>

<!DOCTYPE hrml PUBLIC "-//W3C//DTD Xhtml 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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


</head>
<body>
<div class="red"><div class="center">
	<div class="logo"><br><img src="images/14.gif" alt="" /></div>
	<div class="navig">
	<ul class="menu">
		<li class="home-page current"> <a href="index.php"> &nbsp;Home&nbsp;<br /><br />  <span class="text1"> </span></a></li>
		<li> <a href="about.php"> &nbsp;Malnutrition &nbsp;<br /><br /> <span class="text1">		</span></a></li>
		<li><a href="hunger.php"> &nbsp;Hunger &nbsp;<br /><br /><span class="text1">			</span></a></li>
		<li><a href="gallery.php">&nbsp;Gallery&nbsp;<br /><br /><span class="text1">			</span></a></li>


		<li><a href="join.php">&nbsp;Join Us&nbsp;<br /><br /><span class="text1">			</span></a></li>
						<li><?php if($_SESSION['uname']!=NULL) echo "<a href='logout.php'>&nbsp;Logout&nbsp;<br /><br /><span class='text1'>			</span></a>"; else echo "<a href='login.php'>&nbsp;Log In&nbsp;<br /><br /><span class='text1'>			</span></a>"; ?></li>
	</ul></div>
	

</div></div><br><br><br>

<table align="center" cellspacing="50" cellpadding="10">
<tr>
<td>

<div style="width: 320px; border-bottom-right-radius:20px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px; height: 220px; background: #6666FF; color:#4b0082;font-family: 'Playfair Display', serif;font-size: 20px; box-shadow:1px 3px 2px 2px #454545;margin-left: 30%; margin-top: 30px;"><br>
<center><u><a href="about.php">What is Malnutrition</a><br><br>
	<a href="type.php">Types of Malnutrtion<br><br>
	<a href="causes.php">Causes of Malnutrtion<br><br>
	</u></center></td>
 
	<td><div style="width: 320px; border-bottom-right-radius:20px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px; height: 320px; background: #6666FF; box-shadow:1px 3px 2px 2px #454545;margin-left: 15%; margin-top: 30px;"><b><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="images/cv.png"></td>
<td><center><div style="width: 320px; border-bottom-right-radius:20px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px; height: 220px; background: #6666FF; color:#4b0082;font-family: 'Playfair Display', serif;font-size: 20px; box-shadow:1px 3px 2px 2px #454545;margin-left: 15%; margin-top: 30px;"><br>
	<u><a href="s.php">Symtomps of Malnutrtion</a><br><br>
	<a href="d.php">Diagnosing Malnutrtion <br><br>
	
<a href="p.php">Prevention from Malnutrtion<br><br>
	</u></td>
	</tr>
</table>
<br><br>

<div class="para">
<p class="text16"> <b> What is Malnutrition ?</p></b>
<p class="text17"> <br>&nbsp;&nbsp;&nbsp;<b> * </b> A malnourished person finds that their body has difficulty doing normal things such as growing and resisting disease. Physical work becomes problematic and even learning abilities can be diminished. For women, pregnancy becomes risky and they cannot be sure of producing nourishing breast milk. <br><br>
&nbsp;&nbsp;&nbsp;<b> * </b>When a person is not getting enough food or not getting the right sort of food, malnutrition is just around the corner. Even if people get enough to eat, they will become malnourished if the food they eat does not provide the proper amounts of micronutrients - vitamins and minerals - to meet daily nutritional requirements.<br><br>
&nbsp;&nbsp;&nbsp;<b>* </b>Disease and malnutrition are closely linked. Sometimes disease is the result of malnutrition, sometimes it is a contributing cause. In fact, malnutrition is the largest single contributor to disease in the world, according to the UN's Standing Committee on Nutrition (SCN).<br><br>
&nbsp;&nbsp;&nbsp;<b>* </b>Malnutrition at an early age leads to reduced physical and mental development during childhood. Stunting, for example, affects more than 147 million pre-schoolers in developing countries, according to SCN's World Nutrition Situation 5th report. Iodine deficiency, the same report shows, is the world's greatest single cause of mental retardation and brain damage.<br><br>
&nbsp;&nbsp;&nbsp;<b>* </b>Undernutrition affects school performance and studies have shown it often leads to a lower income as an adult. It also causes women to give birth to low birth-weight babies.</p>

 <p class="text17">&nbsp;&nbsp;&nbsp;<br><b>* </b>Nutrition in 2 Minutes :<br>&nbsp;&nbsp;&nbsp;
Why is nutrition so important? Find out in just two minutes with this video that will tell you everything you need &nbsp;&nbsp;&nbsp;&nbsp; to know about child malnutrition and how we can beat it.
	
<br><br>
<div class="text16"><center><video width="320" height="240" controls>
  <source src="2.mp4" type="video/mp4">
<source src="2.ogg" type="video/ogg">
</center>

</video></div><br><br>


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
