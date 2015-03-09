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
	<td><div style="width: 580px; border-bottom-right-radius:20px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px; height: 320px; background: #ff6347; box-shadow:1px 3px 2px 2px #454545;margin-left: 15%; margin-top: 30px;"><br>&nbsp; &nbsp; &nbsp; &nbsp;<img src="images/dd.jpg"></td>
	<td><div style="width: 320px; border-bottom-right-radius:20px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px; height: 320px; background: #ff6347; color:#4b0082;font-family: 'Playfair Display', serif;font-size: 18px; box-shadow:1px 3px 2px 2px #454545;margin-left: 30%; margin-top: 30px;"><br>
	<center><u><a href="hunger.html"><img src="hunger/bullet1.png">What is Malnutrition?</a><br><br>
	<a href="stats.html">Hunger Stats and FAQs<br><br>
	<a href="gloss.html">Hunger Glossary<br><br>
	<a href="who.html"><img src="hunger/bullet1.png">Who are the hungry?<br><br>
	<a href="map.html">Hunger Map<br><br>
	<a href="cause.html"><img src="hunger/bullet1.png">What causes Hunger?</u></center></td>
	</tr>
</table>
<br><br>

<div class="para">
	<p class="text10">What is hunger?</p><br>
	<p class="text11">Acute hunger or starvation are often highlighted on TV screens: hungry mothers too weak to breastfeed their children in drought-hit Ethiopia, refugees in war-torn Syria queueing for food rations, helicopters airlifting high energy biscuits to earthquake victims in Haiti or Pakistan.<br><br>
	These situations are the result of high profile crises like war or natural disasters, which starve a population of food. Yet emergencies account for less than eight percent of hunger's victims. <br><br>
	Daily undernourishment is a less visible form of hunger -- but it affects many more people, from the shanty towns of Jakarta in Indonesia and the Cambodian capital Phnom Penh to the mountain villages of Bolivia and Nepal. In these places, hunger is much more than an empty stomach. <br><br>
	For weeks, even months, its victims must live on significantly less than the recommended 2,100 kilocalories that the average person needs to lead a healthy life. <br><br>
	The body compensates for the lack of energy by slowing down its physical and mental activities. A hungry mind cannot concentrate, a hungry body does not take initiative, a hungry child loses all desire to play and study. <br><br>
	Hunger also weakens the immune system. Deprived of the right nutrition, hungry children are especially vulnerable and become too weak to fight off disease and may die from common infections like measles and diarrhoea. Each year, almost 7 million children die before reaching the age of five; malnutrition is a key factor in over a third of these deaths (source: Levels and Trends in Child Mortality, IGME, 2012) <br><br><br>
	<img src="hunger/slider-2.jpg" align="right"><p class="text10">How much food do you need? </p><br>
	<p class="text11">The energy and protein that people need varies according to age, sex, body size, physical activity and, to some extent, climate. On average, the body needs more than 2,100 kilocalories per day per person to allow a normal, healthy life. Extra energy is needed during pregnancy and while breast-feeding. <br><br></p>
</div>

<div class="clear"></div>
<div class="linr"></div>
<div class="clear"></div>
<div class="footer">

</div>


</body>

</html>
