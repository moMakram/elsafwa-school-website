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
       <a href="about_us.php"> <div id="aboutus_button1"></div></a>
        <a href="contact_us.php"><div id="contact_button"></div></a>
        <a href="time_table.php"><div id="timetable_button"></div></a>
        <a href="good.php"><div id="good_button"></div></a>
        <a href="activities.php"><div id="activity_button"></div></a>
      </div>

  </div>
  
<div id="sight_table"></div>
  <div id="message_date"></div>
  
  
  


<?php
include ('fotter.php');
?>


</div>
</body>
</html>
