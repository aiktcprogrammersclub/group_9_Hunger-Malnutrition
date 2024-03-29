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
<p class="text10"> <b> Diagnosing Malnutrition ?</p></b>
<p class="text11"> <br><b> * </b> Several factors are taken into account to check whether someone is malnourished or at a high risk of malnutrition.<br><br>
<b> In adults, these include: </b><br>
<b>#</b>body mass index (BMI) – a measure that can be used to determine if you're a healthy weight for your height <br>
<b># </b>whether you've unintentionally lost weight in recent months <br>
<b>#</b>whether an illness means you're unable to feed yourself or absorb nutrients from your diet </p>

 <p class="text11">&nbsp;&nbsp;&nbsp;<br><b>* </b>You would normally be considered malnourished if you have a BMI of less than 18.5 or you've unintentionally lost more than 5% of your body weight during the last three to six months. However, in some cases, doctors may be concerned about malnutrition if you have a BMI between 18.5 and 20.<br>&nbsp;&nbsp;&nbsp;<b><br>
You may be considered at a high risk of malnutrition if:</b><br>
<b>#</b>an illness means you have eaten nothing for the last five days, or you're likely to eat nothing for the next five days <br>
<b>#</b>you don't absorb nutrients from food well – for example, you have a condition, such as Crohn’s disease, that causes the digestive system to become inflamed<br>
<b>#</b>there's an underlying reason why your body is likely to use up nutrients at a higher rate or have an increased need for nutrients <br>
<b>#</b>you have difficulty eating and drinking <br>
<b>#</b>A vitamin or mineral deficiency can usually be diagnosed with a blood test.<br>
	
<br>
<b>Diagnosing malnutrition in children</b><br>
<b> # </b> Diagnosing malnutrition in children involves taking a measurement of their weight and height and comparing it against the expected average height and weight for a child of that age.<br>
<b> # </b> 
Some children will be below average because they're naturally smaller, but a significant drop below the expected level could indicate a risk of malnutrition.<br>
<b> # </b> 
Blood tests can also be used to measure protein levels in the blood. Low levels of protein may suggest that a child is malnourished.<br><br>

<b> Recognising malnourishment</b><br>
<b>* </b> The National Institute for Health and Care Excellence (NICE) recommends that healthcare professionals should look for signs of malnutrition when a person:<br>
<b> # </b> registers at a GP surgery <br>
<b> # </b> attends a routine check-up or hospital appointment <br>
<b> # </b> is admitted to hospital or a care home <br>



<div class="clear"></div>
<div class="linr"></div>
<div class="clear"></div>
<div class="footer">

</div>
<div class="social">
  <a href="https://www.facebook.com/pages/World-Hunger-Malnutrition/337393543107372" class="link facebook" target="_parent"><br><br><i><b><h6 style="font-size:100%">f&nbsp;</h6></a><i class="fa fa-facebook-square"></i></a>

  <a href="https://twitter.com/kentpage/status/526794309665038337" class="link twitter" target="_parent"><br><i><h6 style="font-size:120%">t&nbsp;</h6></a><span class="fa fa-twitter"></span></a>
  <a href="https://plus.google.com/u/0/108352243528078155942/videos" class="link google-plus" target="_parent"><br><i>g+<span class="fa fa-google-plus-square"></span></a>
</div> 

</body>

</html>
