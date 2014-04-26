<!DOCTYPE html >
<html >
<head>
	<link rel="SHORTCUT ICON" href="images/logo.png"/>
  <title>Hi-Teck Automation </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-250.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  

<script>
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
<style>
  #map_canvas {
    width: 500px;
    height: 400px;
    background-color: #CCC;
  }
</style>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(30.8878956, 75.870098),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
 
</head>
<body  onload="startTime()">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo" >
		   <h1><span><a href='http://hiteckautomaton.com'><img src="images/logo1.png" width=200 height=100></a></span></h1>
</div>
      
<div  style="font-family: 'Lobster', 'cursive'; display:inline ; font-size:80px ">
<font color=#FC6400 ><br><br>Hiteck Automation</font>
</div>
      		
      <div class="searchform" style="font-family: 'Lobster', 'cursive';">

<font color=#FC6400 size=5px >
<span id="txt"></span>
<?
$date_time= date('a');
echo $date_time ;
echo "<br>";
$time=date('d-m-Y');
echo $time;
?>
</font>
       </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php"><span>HOME</span></a></li>
          <li><a href="about.php"><span>ABOUT US</span></a></li>
          <li><a href="product.php"><span>PRODUCTS</span></a></li>
          
          <li><a href="contact.php"><span>CONTACT US</span></a></li>
          <li><a href="enquiry.php"><span>ENQUIRY</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/HMIb.jpg" width="960" height="320" alt="" /></a>
                               <a href="#"><img src="images/servo-systemb.jpg" width="960" height="320" alt="" /></a> 
                                <a href="#"><img src="images/stepper-systemb.jpg" width="960" height="320" alt="" /></a> 
                                 <a href="#"><img src="images/PLCb.jpg" width="960" height="320" alt="" /></a> 
                                  <a href="#"><img src="images/vfd-banner1.jpg" width="960" height="320" alt="" /></a> 
                                   <a href="#"><img src="images/vfd-banner2.jpg" width="960" height="320" alt="" /></a> 
        </div>
        <div class="clr"></div>
      </div>
      
