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
	<p class="text10">Hunger Glossary</p><br><br>
	<p class="text11"><b>Hunger:</b> Not having enough to eat to meet energy requirements. Hunger can lead to malnutrition, but absence of hunger does not imply absence of malnutrition.<br><br>
<b>Malnutrition:</b>  A condition resulting when a person’s diet does not provide adequate nutrients for growth and maintenance or when a person is not able to adequately utilize the food consumed due to illness. Malnutrition encompasses both undernutrition (too thin, too short, micronutrient deficiencies) and ‘overnutrition’ (overweight and obesity), which should actually be considered ‘unbalanced nutrition’ as it often co-occurs with micronutrient deficiencies.<br><br>
<b>Stunting:</b>  Compared to wasting (or acute malnutrition), which can develop over a short period and is reversible, the development of stunting is a gradual and cumulative process during the 1,000 days window from conception through the first two years of a child’s life. Stunting develops as a result of sustained poor dietary intake or repeated infections or a combination of both.  It has severe, irreversible consequences, beyond the shortness of stature, including for physical health (immediate and long-term morbidity and mortality) and cognitive functioning, which are intergenerational. The indicator for stunting is low height-for-age, a measurement that is calculated by comparing the height of a child against the WHO international growth reference for a child of the same age. Globally, about one in four children under-five are stunted, and a greater proportion of school-age children, adolescent and adults experience the results of having been stunted during their early childhood. <br><br>
<b>Undernourishment:</b> An indicator of inadequate dietary energy intake (based on FAO’s definition of hunger, characterized as consuming less than a minimum level of kilocalories) that is assessed at the population level using national food balance sheets to determine the supply of dietary energy available to a given population and modeling of how that energy is distributed across the population. As of 2014, one in nine people in the world are undernourished.<br><br>
<b>Underweight:</b> A low weight-for-age measurement calculated based on comparing the weight-for-age of a child with the WHO international growth reference. Underweight reflects both stunting and wasting.  <br><br>
<b>Wasting:</b> Acute malnutrition, or wasting, develops as a result of recent rapid weight loss or a failure to gain weight. In children, it is assessed by low weight-for-height compared to the WHO international growth reference or mid upper arm circumference (MUAC). The degree of acute malnutrition is classified as moderate (MAM) or severe (SAM). Wasting is often used to assess the severity of an emergency because it is caused by illness and/or sudden, severe lack of food and is strongly related to mortality. <br><br>
<b>Micronutrient deficiency:</b> A lack or shortage of a micronutrient (vitamins or minerals) that is essential in small amounts for proper growth and metabolism. People are often said to suffer from “hidden hunger” when they consume enough calories, but suffer from micronutrient deficiencies. This form of hunger may not be visibly apparent in an individual, but it increases morbidity and mortality and also has negative impacts on other aspects of health, cognitive development and economic development. Hidden hunger affects over 2 billion people worldwide.
</p><br><br>
</div>

<div class="clear"></div>
<div class="linr"></div>
<div class="clear"></div>
<div class="footer">

</div>


</body>

</html>
