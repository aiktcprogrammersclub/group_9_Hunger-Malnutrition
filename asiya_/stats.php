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
		<<li class="home-page current"> <a href="index.php"> &nbsp;Home&nbsp;<br /><br />  <span class="text1"> </span></a></li>
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
	<p class="text10">Hunger Statistics</p><br><br>
	<p><img src="hunger/2.png"></p><br><br>
	<p class="text11"><i>Every year, authors, journalists, teachers, researchers, schoolchildren and students ask us for statistics about hunger and malnutrition. To help answer these questions, we've compiled a list of useful facts and figures on world hunger.</i></p><br><br>
	<p class="text11"><img src="hunger/stat-1.jpg"> Some 805 million people in the world do not have enough food to lead a healthy active life. That's about one in nine people on earth. </p><br><br>
	<p class="text11"><img src="hunger/stat-2.jpg"> The vast majority of the world's hungry people live in developing countries, where 13.5 percent of the population is undernourished. </p><br><br>
	<p class="text11"><img src="hunger/stat-3.jpg"> Asia is the continent with the most hungry people - two thirds of the total. The percentage in southern Asia has fallen in recent years but in western Asia it has increased slightly. </p><br><br>
	<p class="text11"><img src="hunger/stat-4.jpg"> Sub-Saharan Africa is the region with the highest prevalence (percentage of population) of hunger. One person in four there is undernourished. </p><br><br>
	<p class="text11"><img src="hunger/stat-5.jpg"> Poor nutrition causes nearly half (45%) of deaths in children under five - 3.1 million children each year. </p><br><br>
	<p class="text11"><img src="hunger/stat-6.jpg"> One out of six children -- roughly 100 million -- in developing countries is underweight. </p><br><br>
	<p class="text11"><img src="hunger/stat-7.jpg"> One in four of the world's children are stunted. In developing countries the proportion can rise to one in three. </p><br><br>
	<p class="text11"><img src="hunger/stat-8.jpg"> If women farmers had the same access to resources as men, the number of hungry in the world could be reduced by up to 150 million. </p><br><br>
	<p class="text11"><img src="hunger/stat-9.jpg"> 66 million primary school-age children attend classes hungry across the developing world, with 23 million in Africa alone. </p><br><br>
	<p class="text11"><img src="hunger/stat-10.jpg"> WFP calculates that US$3.2 billion is needed per year to reach all 66 million hungry school-age children. </p><br><br>
</div>
<br>
<div style="margin-left: 100px"><font size=5 face="serif" color=#006400><b>
1. Source: "State of Food Insecurity in the World, FAO, 2014" <br>
2. Source: "State of Food Insecurity in the World, FAO, 2014"<br>
3. Source: "State of Food Insecurity in the World, FAO, 2014" <br>
4. Source: "State of Food Insecurity in the World, FAO, 2014" <br>
5. Source: "Series on Maternal and Child Nutrition, The Lancet, 2013" <br>
6. Source: "Global health Observatory, WHO, 2012"  <br>
7. Source: "Prevalence and Trends of Stunting among ... Children, Public Health Nutrition, 2012"  <br>
8. Source: "Women in Agriculture: Closing the Gender Gap for Development, FAO, 2011"  <br>
9. Source: "Two Minutes to Learn About School Meals, WFP, 2012"  <br>
10. Source: "Two Minutes to Learn About School Meals, WFP, 2012"  <br></b></font>
</div>

<br><br><br>

<div class="para">
	<p class="text10">Frequently Asked Questions (FAQs)</p><br><br>
	<p class="text11"><b>HUNGER</p><br>
	<p class="text14" >1 - Is there a food shortage in the world?</b></p><br>
	<p class="text11">There is enough food in the world today for everyone to have the nourishment necessary for a healthy and productive life.</p><br><br>
	<p class="text14" ><b>2 - What is hunger? </b></p><br>
	<p class="text11">The sensation of hunger, a lack of food in your stomach, is universal. But there are different manifestations of hunger which are each measured in different ways:<br>
<b>&nbsp;&nbsp;&nbsp;&nbsp; * Under-nourishment</b> is used to describe the status of people whose food intake does not include enough calories (energy) to meet minimum physiological needs for an active life. At present, there are 842 million undernourished people worldwide, most of them in developing countries. <br>
<b>&nbsp;&nbsp;&nbsp;&nbsp; * Malnutrition means</b> 'badly nourished', but is more than a measure of what we eat or fail to eat. Malnutrition is characterised by inadequate intake of protein, energy and micronutrients and by frequent infections and diseases. Starved of the right nutrition, people will die from common infections like measles or diarrhoea.<br>
Malnutrition is measured not by how much food is eaten but by physical measurements of the body - weight or height - and age. <br>
<b>&nbsp;&nbsp;&nbsp;&nbsp; * Wasting</b> is an indicator of acute malnutrition that reflects a recent and severe process that has led to substantial weight loss. This is usually the result of starvation and/or disease.</p> <br><br>
	<p class="text14" ><b>3 - How is “famine” defined?</b></p><br>
	<p class="text11">While there are various definitions of famine, many experts say that there must be evidence of three specific outcomes before a famine can be declared:<br>
&nbsp;&nbsp;&nbsp;&nbsp; * At least 20 percent of households face extreme food shortages with limited ability to cope. <br>
&nbsp;&nbsp;&nbsp;&nbsp; * The prevalence of global acute malnutrition must exceed 30 percent. <br>
&nbsp;&nbsp;&nbsp;&nbsp; * Death rates must exceed 2 deaths per 10,000 people per day. </p><br><br>
 
	<p class="text11"><b>THE HUNGRY</p><br>
	<p class="text14" >4 - Who are the hungry? </b></p><br>
	<p class="text11">Despite the impression you often get from the media, emergencies account for less than eight percent of hunger's victims. Few people realise that there are 870 million hungry people in the world who don't make the headlines -- more than the combined populations of the United States, Canada and the European Union. They are of all ages, from babies whose mothers cannot produce enough milk to the elderly with no relatives to care for them. They are the unemployed inhabitants of urban slums, the landless farmers tilling other people's fields, the orphans of AIDS and the sick, who need special or increased food intake to survive.
Above all, children, women and rural communities are on the frontlines of hunger.</p><br><br>
	<p class="text14" ><b>5 - Where are the hungry? </b></p><br>
	<p class="text11">The percentage of hungry people is highest in east, central and southern Africa. Around three-quarters of undernourished people live in low-income rural areas of developing countries, principally in higher-risk farming areas. However, the share of the hungry in urban areas is rising.
Of the total number of the 870 million chronically hungry people, over half are in Asia and the Pacific and about a quarter are in Sub-Saharan Africa.</p><br><br>
	<p class="text14" ><b>6 - Are the numbers going down? </b></p><br>
	<p class="text11">Whereas good progress was made in reducing chronic hunger in the 1980s and the first half of the 1990s, hunger has been slowly but steadily on the rise for the past decade, FAO said. The number of hungry people increased between 1995-97 and 2004-06 in all regions except Latin America and the Caribbean. But even in this region, gains in hunger reduction have been reversed as a result of high food prices and the global economic downturn that started in 2008. 
Today, one in nine people do not get enough food to be healthy and lead an active life, making hunger and malnutrition the number one risk to health worldwide -- greater than AIDS, malaria and tuberculosis combined.</p><br><br>
<p class="text11"><b>NUTRITION</p><br>
	<p class="text14" >7 - What are the effects of malnutrition?</b></p><br>
	<p class="text11">Malnutrition covers a range of problems, such as being dangerously thin, being too short for one's age, being deficient in vitamins and minerals (such as lacking iron which makes you anaemic), or even being too fat (obese). It is measured using the following indicators:<br>
<b>&nbsp;&nbsp;&nbsp;&nbsp; * Wasting</b> is an indicator of acute malnutrition that reflects a recent and severe process that has led to substantial weight loss. This is usually the result of starvation and/or disease. <br>
<b>&nbsp;&nbsp;&nbsp;&nbsp; * Stunting</b> is an indicator of chronic malnutrition that reflects the long-term nutritional situation of a population. It is calculated by comparing the height-for-age of a child with a reference population of well nourished and healthy children. <br>
<b>&nbsp;&nbsp;&nbsp;&nbsp; * Underweight</b> is measured by comparing the weight-for-age of a child with a reference population of well-nourished and healthy children. An estimated 146 million children in developing countries are underweight. </p><br><br>
	<p class="text14" ><b>8- Are micronutrients important? </b></p><br>
	<p class="text11">Micronutrient - vitamin and mineral - deficiencies are very important, afflicting nearly two billion people worldwide. According to the World Health Organization, deficiencies of iron, vitamin A, and zinc rank among the top ten leading causes of death through disease in developing countries.<br>
<b>&nbsp;&nbsp;&nbsp;&nbsp; * Iron</b> deficiency is the most prevalent form of malnutrition, affecting billions of people worldwide. Iron deficiency damages a country's productivity and impedes cognitive development.<br>
Source: <i><u>Vitamin & Mineral Deficiency, a global damage assessment report; Unicef </u></i><br>
<b>&nbsp;&nbsp;&nbsp;&nbsp; * Vitamin A</b> deficiency is a leading cause of child blindness across developing countries. It affects 140 million pre-school children in 118 countries. Deficiency in vitamin A can increase the risk of dying from diarrhoea, measles and malaria.<br>
Source: <i><u>Fifth Report on the World Nutrition Situation, 2005 </u></i><br>
<b>&nbsp;&nbsp;&nbsp;&nbsp; * Iodine</b> deficiency affects 780 million people worldwide. Some 20 million children are born mentally impaired because their mothers did not consume enough iodine during pregnancy.<br>
Source: <i><u>Vitamin & Mineral Deficiency, a global damage assessment report; Unicef </u></i><br>
<b>&nbsp;&nbsp;&nbsp;&nbsp; * Zinc</b> deficiency contributes to growth failure and weakened immunity in young children; it results in some 800,000 child deaths per year. </p><br><br> 


</div>

<div class="clear"></div>
<div class="linr"></div>
<div class="clear"></div>
<div class="footer">

</div>

</body>

</html>
