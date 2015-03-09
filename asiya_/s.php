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
<p class="text10"> <b> Symtomps of Malnutrition </p></b>
<p class="text11"> <br><b> *  </b>&nbsp; The most common symptom of malnutrition is unplanned and unexplained weight loss.  <br><br>
<b>  Adults : </b><br>
<b> * </b>If you lose 5-10% or more of your body weight within three to six months and you're not trying to lose weight, it could be a sign that you're at risk of malnourishment. <br><br>
<b>* </b>Sometimes, weight loss isn't obvious because it occurs slowly, over time. You may notice that your clothes, belts and jewellery gradually feel looser.<br><br>
<b>* </b>Other signs of malnutrition may include:<br>
<b> # </b>feeling tired all the time and lacking energy 
&nbsp;&nbsp;&nbsp;
<b> # </b>frequently getting infections<br>
<b> # </b>taking a long time to recover from infections <br>
<b> # </b>delayed wound healing  <br>
<b> # </b>poor concentration  <br>
<b> # </b>depression <br>  <br><b>* </b>A good way of assessing whether you're malnourished is to work out your body mass index (BMI). BMI is a measurement that shows whether you're a healthy weight for your height.</p>

 <p class="text11">&nbsp;&nbsp;&nbsp;<br><b>* </b>For most adults a healthy BMI is between 18.5 and 24.9. Having a BMI under 18.5 could suggest you're at a high risk of being malnourished, although you may also be considered at risk if you have a BMI between 18.5 and 20.<br><br><b> * </b>
You can check your BMI using the BMI healthy weight calculator.<br><br>
&nbsp;&nbsp;&nbsp; <b> When to see your GP :</b><br>
<b> * </b> See your GP if your BMI is lower than 18.5, you've lost more than 5-10% of your body weight over the last three to six months, or you experience the symptoms listed above.<br><br>
<b> Children :</b><br>
<b> # </b>failure to grow at the expected rate, both in terms of weight and height (known as "failure to thrive"<br>
<b> # </b>changes in behaviour, such as being unusually irritable, sluggish or anxious 
changes in hair and skin colour  <br>
<b> # </b>changes in hair and skin colour <br>
	
<br>
 <b> When to see your GP :</b><br>
<b> * </b>Your child’s weight and physical development should be regularly assessed by your GP or a health visitor during your child's first few years of life.<br><br>
<b> * </b>As part of the National Child Measurement Programme, children in Reception and Year 6 are weighed and measured during the school year.<br><br><b> * </b>Contact your GP if you have any concerns about your child’s health or development. <br>


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
