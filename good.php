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
        <a href="time_table.php"><div id="timetable_button"></div></a>
        <a href="good.php"><div id="good_button1"></div></a>
        <a href="activities.php"><div id="activity_button"></div></a>
      </div>

    
  </div>
  <?php
  $reslut=mysql_query("select * from good ");
  $rows = mysql_fetch_array($reslut);
  ?>
  
  <div id="folder"><br/><?php echo $rows['descr']; ?></div>
  <a href="good/<?php echo $rows['file']; ?>"><div id="download"></div></a>




<?php
include ("fotter.php");
?>

</div>
</body>
</html>
