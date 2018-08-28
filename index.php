<!DOCTYPE html>
<html lang="en">
	<head> 
	  <title>Students' Alumni Cell &middot; IIT Kharagpur</title>
	  <?php include 'metatags.php'; ?>
	  <?php include 'css_include.php';?>
	  <style type="text/css">
            body{
    text-align: right;
    background: white;
  font-family: sans-serif;
  font-weight: 100;
}
hh1{
  color: #396;
  font-weight: 100;
  font-size: 40px;
  margin: 40px 0px 20px;
}
 #clockdiv{
    font-family: sans-serif;
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
}
#clockdiv > div{
    padding: 10px;
    border-radius: 3px;
    background: #00BF96;
    display: inline-block;
}
#clockdiv div > span{
    padding: 15px;
    border-radius: 3px;
    background: #00816A;
    display: inline-block;
}
smalltext{
    padding-top: 5px;
    font-size: 16px;
}
	  </style>
	</head>
	<body >
	   <h1 class="hh1">Annual Alumni Meet</h1>
<div id="clockdiv" style="border-style:ridge; background-color:#00816A; padding:10px;">
  <div>
    <span class="days" id="day"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours" id="hour"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes" id="minute"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds" id="second"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>
 
<p id="demo"></p>
 
<script>
 
var deadline = new Date("jan 3, 2019 12:00:00").getTime();
 
var x = setInterval(function() {
 
var now = new Date().getTime();
var t = deadline - now;
var days = Math.floor(t / (1000 * 60 * 60 * 24));
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((t % (1000 * 60)) / 1000);
document.getElementById("day").innerHTML =days ;
document.getElementById("hour").innerHTML =hours;
document.getElementById("minute").innerHTML = minutes; 
document.getElementById("second").innerHTML =seconds; 
if (t < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "TIME UP";
        document.getElementById("day").innerHTML ='0';
        document.getElementById("hour").innerHTML ='0';
        document.getElementById("minute").innerHTML ='0' ; 
        document.getElementById("second").innerHTML = '0'; }
}, 1000);
</script>
<h1 class="hh1">Remaining</h1>
	   <div class="container">
	    <?php include 'navbar.php' ;?>
	    <?php include 'slider1.php' ; ?>
	
	<h2 >Objectives </h2>
	<?php include 'column3.php';?>
	<h2 >Latest Programs</h2>
	<?php include 'column4.php' ;?>
	<?php include 'midbox.php' ;?>	
     </div>
<div style="background-image:url('img/vinay.png');width:1315px;background-repeat:no-repeat;margin-left:15px;">
<?php include 'spons-slider.php' ;?>
<?php include 'footer.php';?>
</div>		
</div>
<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript"></script>
<?php include 'js_include.php';?>
	</body>
	
	
</html>
