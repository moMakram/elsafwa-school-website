<?php
include ("connec.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include ("head.php");
?>
</head>

<body background="images/background.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="body">

      <?php
	  include ("header.php");
	  ?>
	  

      <div id="menu">
         <a href="index.php"><div id="home_button"></div></a>
       <a href="about_us.php"> <div id="aboutus_button"></div></a>
        <a href="contact_us.php"><div id="contact_button"></div></a>
        <a href="time_table.php"><div id="timetable_button1"></div></a>
        <a href="good.php"><div id="good_button"></div></a>
        <a href="activities.php"><div id="activity_button"></div></a>
      </div>
  </div>
  
  <div id="choices_timetable">
<form name="timetable_choose"  style="width:900px;height:40px; position:absolute;margin-top:33px; margin-left:0px;">

<select name="year"  style="width:260px; height:27px; margin-left:180px;position:absolute; border:none;"></select>

<select name="term"  style="width:260px; height:27px; margin-left:-107px; margin-top:0px;position:absolute; border:none;"></select>

<select name="kind"  style="width:260px; height:27px; margin-left:-438px;position:absolute; border:none;"></select>


<input name="choose" type="submit" value="إظهار" id="choices_button_timetable" />
</form>

</div>



<div id="time_lessons">

</div>

 



 <?php
include ("fotter.php");
?>
</div>
</body>
</html>
