<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Home</title>
<style type="text/css">
.buttonH:hover {
	background-color:maroon;
    color: white;
}


.buttonFunction {
    border: none;
    background-color:black;
    font-weight:bold;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    border-radius: 12px;
}
</style>
</head>

<body style="margin-top:3.5%" >
	<?php
	//import header
		require('header.php');
	?>
<div class="w3-content w3-display-container" >
	<div class="row" >
		<div class="col-sm-12" align="center" >
		<div style="background-color:black;width:100%">
			<a href="#"><img class="mySlides" src="img/24313176_10155625634820266_8321697187311929618_o.jpg" style="width:66.2%"/></a>
			<a href="#"><img class="mySlides" src="img/event3.png" style="width:70.1%"/></a>
			<a href="#"><img class="mySlides" src="img/event2.png" style="width:66.3%"/></a>
		</div>
			<input type="image" src="img/back.png" onclick="plusDivs(-1)"  alt="Submit" width="30" />
			<input type="image" src="img/next.png" onclick="plusDivs(1)" alt="Submit" width="30"/>
			<h3 style="font-family:Georgia;background-color:maroon;font-size:250%;color:white;font-weight:bold">Event</h3>
		</div>  
	</div>
<!------JavaScript to do the Slide Show------>
<script type="text/javascript">
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<div align="center" >

</div>

<div align="center" >
	<span><input type="image" src="img/create3.jpg" width="15%" style="margin:2% 10%"/></span>
	<span><input type="image" src="img/join2.png" width="15%" style="margin:2% 10%"/></span>
</div>
<div align="center">
	<a href="createEvent.php"><button class="buttonFunction buttonH" name="create" style="margin:1% 15% 2%">Create Event</button></a>
	<a href="Event.php"><button class="buttonFunction buttonH" name="join" style="margin:1% 15% 2%"> Join Event </button></a>
</div>
<div >
	<?php
		require('footer.php');
	?>
</div>
</div>
</body>

</html>
