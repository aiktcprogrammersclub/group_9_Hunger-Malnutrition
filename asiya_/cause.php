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
	<p class="text10">What causes hunger?</p><br><br>
	<p class="text11">The world produces enough to feed the entire global population of 7 billion people. And yet, one person in eight on the planet goes to bed hungry each night. In some countries, one child in three is underweight. Why does hunger exist?<br><br>
There are many reasons for the presence of hunger in the world and they are often interconnected. Here are six that we think are important.</p><br><br>
<p class="text13">Poverty trap</p><br>
<p class="text11">People living in poverty cannot afford nutritious food for themselves and their families. This makes them weaker and less able to earn the money that would help them escape poverty and hunger. This is not just a day-to-day problem: when children are chronically malnourished, or ‘stunted’, it can affect their future income, condemning them to a life of poverty and hunger.<br><br>
In developing countries, farmers often cannot afford seeds, so they cannot plant the crops that would provide for their families. They may have to cultivate crops without the tools and fertilizers they need. Others have no land or water or education. In short, the poor are hungry and their hunger traps them in poverty.</p><br><br>
<p class="text13">Lack of investment in agriculture</p><br>
<p class="text11">Too many developing countries lack key agricultural infrastructure, such as enough roads, warehouses and irrigation. The results are high transport costs, lack of storage facilities and unreliable water supplies. All conspire to limit agricultural yields and access to food.<br><br>
Investments in improving land management, using water more efficiently and making more resistant seed types available can bring big improvements.<br><br>
Research by the UN Food and Agriculture Organization shows that investment in agriculture is five times more effective in reducing poverty and hunger than investment in any other sector.</p><br><br>
<p class="text13">Climate and weather</p><br>
<p class="text11">Natural disasters such as floods, tropical storms and long periods of drought are on the increase -- with calamitous consequences for the hungry poor in developing countries.<br><br>
Drought is one of the most common causes of food shortages in the world. In 2011, recurrent drought caused crop failures and heavy livestock losses in parts of Ethiopia, Somalia and Kenya. In 2012 there was a similar situation in the Sahel region of West Africa.<br><br>
In many countries, climate change is exacerbating already adverse natural conditions. Increasingly, the world's fertile farmland is under threat from erosion, salination and desertification. Deforestation by human hands accelerates the erosion of land which could be used for growing food.</p><br><br>
<p class="text13">War and displacement</p><br>
<p class="text11">Across the globe, conflicts consistently disrupt farming and food production. Fighting also forces millions of people to flee their homes, leading to hunger emergencies as the displaced find themselves without the means to feed themselves. The conflict in Syria is a recent example.<br><br>
In war, food sometimes becomes a weapon. Soldiers will starve opponents into submission by seizing or destroying food and livestock and systematically wrecking local markets. Fields are often mined and water wells contaminated, forcing farmers to abandon their land.<br><br>
Ongoing conflict in Somalia and the Democratic Republic of Congo has contributed significantly to the level of hunger in the two countries. By comparison, hunger is on the retreat in more peaceful parts of Africa such as Ghana and Rwanda.</p><br><br>
<p class="text13">Unstable markets</p><br>
<p class="text11">In recent years, the price of food products has been very unstable. Roller-coaster food prices make it difficult for the poorest people to access nutritious food consistently. The poor need access to adequate food all year round. Price spikes may temporarily put food out of reach, which can have lasting consequences for small children.<br><br>
When prices rise, consumers often shift to cheaper, less-nutritious foods, heightening the risks of micronutrient deficiencies and other forms of malnutrition.</p><br><br>
<p class="text13">Food wastage</p><br>
<p class="text11">One third of all food produced (1.3 billion tons) is never consumed. This food wastage represents a missed opportunity to improve global food security in a world where one in 8 is hungry.<br><br>
Producing this food also uses up precious natural resources that we need to feed the planet. Each year, food that is produced but not eaten guzzles up a volume of water equivalent to the annual flow of Russia's Volga River. Producing this food also adds 3.3 billion tonnes of greenhouse gases to the atmosphere, with consequences for the climate and, ultimately, for food production.
</p><br><br>
</div>

<div class="clear"></div>
<div class="linr"></div>
<div class="clear"></div>
<div class="footer">

</div>


</body>

</html>
