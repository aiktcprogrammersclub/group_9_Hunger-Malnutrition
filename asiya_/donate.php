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
<style>

input#button{
cursor:pointer;
padding:5px 25px; 
background:#DC143C;
border:2px #DC143C;
color: white;
font-size:20px;
font-family: serif;
border-radius:600px/80px;
}

input#button:hover, input#button:focus{
	background-color : #80BFFF;
}

input#button:active{
    background-color: #80BFFF;
}
</style>

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
</div></div>

<center><table align="center" cellspacing="50" cellpadding="10">
<tr>
<td><div style="width: 400px; border-bottom-right-radius:20px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px; height: 250px; background: #ff6347; box-shadow:1px 3px 2px 2px #454545;margin-top: 30px;">
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/donation.jpg" width="400" align="center"  ></td>


	</tr>
</table></center><br><br><br><br><br><br><br><br><br>
<center><div style="margin-left: 75px" class="text16"><u> Donation  Form</u></div>
<div style="width: 55%; border-bottom-right-radius:20px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px; height: 800px; background: #F5A9A9; color: #8A0808;font-size: 25px;font-family: 'Playfair Display', serif; box-shadow:1px 3px 2px 2px #454545;margin-left: 50px; margin-top: 30px;"><br><form method="post" action="reg.php">
<br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; First name:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="fname"> <br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; Last name:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="lname">
<br><br><br>Gender:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="radio" name="gender" value="a"> Male&nbsp; &nbsp;&nbsp; &nbsp; </input><input type="radio" name="gender" value="b">Female</input>
<br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; Address:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="addr" >
<br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; Email Id:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="email" >
<br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; Amount $:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input id="pass1" type="password" name="pword">
<br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; Trust Name:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input id="pass2" type="password" name="cword" onChange="return myFunction()">
<br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; <input id="button" type="submit"  value="Submit">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input id="button" type="reset"  value="Reset"></form>
</div>

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
