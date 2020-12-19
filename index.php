<?php
if(isset($_POST['convert_seconds']))
{
 $time=$_POST['time'];
 $unit=$_POST['convert_unit'];
 if($unit == "Minutes")
 {
  $time = round($time / 60,4) . 'Min';
 }
 if($unit == "Hours")
 {
  $time = round($time / 60 / 60,4) . 'Hours'; 
 }
}
?>

<html>
<head>
<link type="text/css" rel="stylesheet" href="convert_style.css"/>
</head>
<body>
<div id="wrapper">

<div id="convert_div">
 <form method="post"action="">
  <input type="text" name="time" placeholder="Enter Seconds" required="" onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )">
  <select name="convert_unit">
   <option>Minutes</option>
   <option>Hours</option>
  </select>
  <br>
  <input type="submit" name="convert_seconds" value="Convert Seconds">
 </form>
 <p><?php echo $time;?></p>
</div>

</div>
</body>
</html>