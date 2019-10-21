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
        <a href="good.php"><div id="good_button"></div></a>
        <a href="activities.php"><div id="activity_button1"></div></a>
      </div>

  </div>
  
<div id="videos_folder">
<div style="position:absolute; margin-left:13px; margin-top:37px; width:1127px; height:220px; ">

<table border="0" height="210" style="width:1100px;">
  <tr style="background-color:#FFF;">
  <?php
  $reslut=mysql_query("select * from video order by ordere");
       while ( $rows = mysql_fetch_array($reslut) )
  {
  ?>
  
  
    <td  width="220">
	<center>
	  <video width="249" height="170" align="left" style="margin-top:0px;" controls >
<source src="video/<?php echo $rows['file']; ?>"   >

</video>

 

	
  

	</center>
	<center>
		<div style=" width:230px; height:25px; position:absolut; margin-top:4px;  overflow:auto; " >
		<center>
		<?php echo $rows['descr']; ?>
</center>
</div>
</center>
	</td>
	<?php
	}
	?>
	
	<!--
	    <td  width="220">
	<center>
	  <video width="249" height="170" align="left" style="margin-top:0px;" controls >
<source src="egypt2.mp4"   >

</video>
	</center>
	<center>
		<div style=" width:230px; height:25px; position:absolut; margin-top:4px;  overflow:auto; " >
		<center>
the most thing in life the most thing in life the most thing in life the most thing in life the most thing in life
</center>
</div>
</center>
	</td>
	
	
	    <td  width="220">
	<center>
	  <video width="249" height="170" align="left" style="margin-top:0px;" controls >
<source src="egypt2.mp4"   >

</video>
	</center>
	<center>
		<div style=" width:230px; height:25px; position:absolut; margin-top:4px;  overflow:auto; " >
		<center>
the most thing in life the most thing in life the most thing in life the most thing in life the most thing in life
</center>
</div>
</center>
	</td>
	
	
	    <td  width="220">
	<center>
	  <video width="249" height="170" align="left" style="margin-top:0px;" controls >
<source src="egypt2.mp4"   >

</video>
	</center>
	<center>
		<div style=" width:230px; height:25px; position:absolut; margin-top:4px;  overflow:auto; " >
		<center>
the most thing in life the most thing in life the most thing in life the most thing in life the most thing in life
</center>
</div>
</center>
	</td>
	-->

  </tr>
</table>


</div>
</div>


<div id="gallery_folder">
<!--<div style="position:absolute; margin-left:13px; margin-top:45px; float:left;  width:994px; height:286px; overflow:auto; ">-->


<table style="margin-top:45px; z-index:13000px;  ">
<tr>

<?php
$reslut=mysql_query("select * from active");

    while ( $rows = mysql_fetch_array($reslut) )
  {
  
?>

<td>
<div id="activity_part1">
<div style="text-align:center; position:absolute; width:265px; height:30px; margin-left:0px;margin-top:15px; font-family:'SC_KHALID'; color:#FFF;font-size:18px;">
<?php echo $rows['name']; ?>
</div>
<div id="pictures">
  <a href="activity_kind.php?id=<?php echo $rows['id']; ?>"><img src="images/student_HS_group_Sm.jpg" width="250" height="200" /></a> 
  
</div>

</div>

</td>
<?php
}
?>







<!--
<td>
<div id="activity_part1">
<div style="text-align:center; position:absolute; width:265px; height:30px; margin-left:0px;margin-top:15px; font-family:'SC_KHALID'; color:#FFF;font-size:18px;">
لعبة كرة القدم
</div>
<div id="pictures">
  <a href="activity_kind.html"><img src="images/student_HS_group_Sm.jpg" width="250" height="200" /></a> 
  
</div>

</div>

</td> -->





</tr>
</table>







<!--
<div id="activity_part2">
<div style="text-align:center; position:absolute; width:265px; height:30px; margin-left:0px;margin-top:15px; font-family:'SC_KHALID'; color:#FFF;font-size:18px;">
لعبة كرة السلة
</div>
<div id="pictures">
  <a href="activity_kind.html"><img src="images/student_HS_group_Sm.jpg" width="250" height="200" /></a> 
  
</div>

</div>

<div id="activity_part3">
<div style="text-align:center; position:absolute; width:265px; height:30px; margin-left:0px;margin-top:15px; font-family:'SC_KHALID'; color:#FFF;font-size:18px;">
لعبة كرة اليد
</div>
<div id="pictures">
  <a href="activity_kind.html"><img src="images/student_HS_group_Sm.jpg" width="250" height="200" /></a> 
  
</div>

</div>







<div id="activity_part4">
<div style="text-align:center; position:absolute; width:265px; height:30px; margin-left:0px;margin-top:15px; font-family:'SC_KHALID'; color:#FFF;font-size:18px;">
لعبة كرة الطائرة
</div>
<div id="pictures">
  <a href="activity_kind.html"><img src="images/student_HS_group_Sm.jpg" width="250" height="200" /></a> 
  
</div>

</div>

-->






<!--</div>-->
</div>



<?php
include ("fotter.php");
?>


</body>
</html>
