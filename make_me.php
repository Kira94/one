<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	#change_me {
	position: absolute;
	top: 100px;
	left: 400px;
	font: 24px arial;}
	#move_up #move_down #color #disappear {
	padding: 5px;}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<title>Untitled Document</title>
</head>

<body>

<div id="change_me">Make Me Do Stuff!</div>
<script>
$(document).ready(function() {
$("#move_up").click( function() {
$("#change_me").animate({top:30},200);
});//end move_up
$("#move_down").click( function() {
$("#change_me").animate({top:500},2000);
});//end move_down
$("#color").click( function() {
$("#change_me").css("color", "purple");
});//end color
$("#disappear").click( function() {
$("#change_me").toggle("slow");
});//end disappear
});//end doc ready
</script>
</body>
</html>
