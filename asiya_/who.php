<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Home</title>

<meta charset="utf-8" />
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
	<td><div style="width: 580px; border-bottom-right-radius:20px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px; height: 320px; background: #ff6347; box-shadow:1px 3px 2px 2px #454545;margin-left: 15%; margin-top: 30px;"><br>&nbsp; &nbsp; &nbsp; &nbsp;<img src="hunger/2.jpg"></td>
	<td><div style="width: 320px; border-bottom-right-radius:20px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px; height: 320px; background: #ff6347; color:#4b0082;font-family: 'Playfair Display', serif;font-size: 18px; box-shadow:1px 3px 2px 2px #454545;margin-left: 30%; margin-top: 30px;"><br>
	<center><u><a href="hunger.php"><img src="hunger/bullet1.png">What is Hunger?</a><br><br>
	<a href="stats.php">Hunger Stats and FAQs<br><br>
	<a href="gloss.php">Hunger Glossary<br><br>
	<a href="who.php"><img src="hunger/bullet1.png">Who are the hungry?<br><br>
	<a href="map.php">Hunger Map<br><br>
	<a href="cause.php"><img src="hunger/bullet1.png">What causes Hunger?</u></center></td>
	</tr>
</table>
<br><br>

<div class="para">
	<p class="text10">Who are the hungry?</p><br><br>
	<p class="text11">Most of the world’s hungry live in developing countries. According to the latest Food and Agriculture Organization (FAO) statistics from 2014, there are 805 million hungry people in the world and 98 percent of them are in developing countries. They are distributed like this:<br><br></p>
<img src="hunger/5.jpg"><br><br>
	<p class="text13"><img src="hunger/c.jpg">&nbsp;&nbsp;&nbsp;Rural risk</p><br>
<p class="text11">Three-quarters of all hungry people live in rural areas, mainly in the villages of Asia and Africa. Overwhelmingly dependent on agriculture for their food, these populations have no alternative source of income or employment. As a result, they are vulnerable to crises. Many migrate to cities in their search for employment, swelling the ever-expanding populations of shanty towns in developing countries.</p><br><br>
	<p class="text13"><img src="hunger/b.jpg">&nbsp;&nbsp;&nbsp;Hungry farmers</p><br>
<p class="text11">FAO calculates that around half of the world's hungry people are from smallholder farming communities,  surviving off marginal lands prone to natural disasters like drought or flood. Another 20 percent belong to landless families dependent on farming and about 10 percent live in communities whose livelihoods depend on herding, fishing or forest resources.
The remaining 20 percent live in shanty towns on the periphery of the biggest cities in developing countries. The numbers of poor and hungry city dwellers are rising rapidly along with the world's total urban population.</p><br><br>
	<p class="text13"><img src="hunger/a.jpg">&nbsp;&nbsp;&nbsp;Children</p><br>
<p class="text11">An estimated 146 million children in developing countries are underweight - the result of acute or chronic hunger (Source: The State of the World's Children, UNICEF, 2009).  All too often, child hunger is inherited: up to 17 million children are born underweight annually, the result of inadequate nutrition before and during pregnancy.</p><br><br>
	<p class="text13"><img src="hunger/d.jpg">&nbsp;&nbsp;&nbsp;Women</p><br>
<p class="text11">Women are the world's primary food producers, yet cultural traditions and social structures often mean women are much more affected by hunger and poverty than men. A mother who is stunted or underweight due to an inadequate diet often give birth to low birthweight children.
Around 50 per cent of pregnant women in developing countries are iron deficient (source: Unicef). Lack of iron means 315,000 women die annually from hemorrhage at childbirth. As a result, women, and in particular expectant and nursing mothers, often need special or increased intake of food.</p><br><br>
</div>

<div class="clear"></div>
<div class="linr"></div>
<div class="clear"></div>
<div class="footer">

</div>


</body>

</html>
