<!DOCTYPE html>
<html>
<head>
	<title>enter your exam results here</title>
	<style type="text/css">
		.form{position: absolute;left: 350px;top: 100px;background-color:|#131000;border: 2px solid black;padding: 20px;box-sizing: border-box;box-shadow: .6;background-color: #96DF04;opacity: .8;width: 400px;height: 440px;text-align: left;border-radius: 2px}
		.container{height: 70px;background-color: #00BFFF;color: white;width: 100%;padding: 0;margin: 0 auto;position: absolute;left: 0;top:0;position: fixed;z-index: 1;}
		.nav{ float: right;width: 50%;height: 70px;text-align: right; }
		.nav ul{list-style-type: none}
		.nav ul li{display: inline;}
		span{color: white}	.container .nav li a{}
				.container .nav li{list-style-type: none;}
				.container .nav li a{text-decoration: none}
				.container .nav li a:hover{background-color: green;padding: 15px;text-decoration: none;border-radius: 5px}		.icon{float: left;width: 50%;height: 70px;text-align: left;}
	</style>
</head>
<body style="background-image: url(ad7755d8fce3806c285f8d3226f4038f.jpg);background-size: cover;background-repeat: no-repeat;"> 
	<div class="container">
	<div class="nav"><ul>
		<li><a href="">help</a></li>
		<li><a href="">contact us</a></li>
		<li><a href="">about us</a></li>
	</ul></div>
</div>
<br><br><br><br><div class="form">
	<form method="GET">
	<input type="text" name="english" placeholder="english"><br><br>
	<input type="text" name="kiswahili" placeholder="kiswahili"><br><br>
	<input type="text" name="biology" placeholder="biology"><br><br>
	<input type="text" name="humanity" placeholder="humanity"><br><br>
	<input type="text" name="Mathematics" placeholder="Mathematics"><br><br>
	<input type="text" name="computer" placeholder="computer"><br><br>
	
	<button>SUBMIT MARKS</button><br><?php 

 $eng=$_GET["english"];
  $kisw=$_GET["kiswahili"];
 $math=$_GET["Mathematics"];
 $comp=$_GET["computer"];
 $hum=$_GET["humanity"];
 $bio=$_GET["biology"];
$tot=$math+$comp+$hum+$bio+$kisw;
$tota=$tot / 6;
echo "<span>average is".$tota.".</span>";
 	




	 ?>

	</form>
	</div>
	




</body>
</html>