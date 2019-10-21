<?php
include ("connec.php");
$id=$_GET['id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include ("head.php");
?>
		 
         		<link rel="stylesheet" href="index1_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="index1_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
<script src="index1_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="index1_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
        
                 <link href="css/animate.css" rel="stylesheet" type="text/css" />

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
        <a href="time_table.html"><div id="timetable_button"></div></a>
        <a href="good.php"><div id="good_button"></div></a>
        <a href="activities.php"><div id="activity_button1"></div></a>
      </div>
  </div>
  
  <div id="activ_kind">
  <div style="text-align:center; position:absolute; width:243px; height:30px; margin-left:931px;margin-top:15px; font-family:'SC_KHALID'; color:#FFF;font-size:18px;">

  <?php
  $reslut=mysql_query("select * from active where id='$id'");
     $rows = mysql_fetch_array($reslut);
echo $rows['name'];	 
  ?>
  
  
</div>

<div id="activ_kind_container">
	<div id="vlightbox1">
	<br/>
	<?php
	 $reslu=mysql_query("select * from pictactive where idactive='$id'");
	     while ( $row = mysql_fetch_array($reslu) )
  {
  ?>
	 
	<a class="vlightbox1" href="photo/<?php echo $row['file']; ?>" title="<?php echo $row['descr']; ?>"><img src="photo/<?php echo $row['file']; ?>" width="150px" height="110px"  alt="<?php echo $row['descr']; ?>"/></a>

<?php
}
?>
	
	

	</div>
	<script src="index1_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>


</div>

  </div>  






<?php
include ("fotter.php");
?>


</div>
</body>
</html>
