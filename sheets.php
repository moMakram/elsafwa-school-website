<?php
session_start();
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
if (isset($_SESSION['admin_session2']) ) {

?>



      <?php
	  include ("header2.php");
	  ?>

      <div id="menu">
         <a href="index.php"><div id="home_button"></div></a>
       <a href="about_us.php"> <div id="aboutus_button"></div></a>
        <a href="contact_us.php"><div id="contact_button"></div></a>
        <a href="time_table.php"><div id="timetable_button"></div></a>
        <a href="good.php"><div id="good_button"></div></a>
        <a href="activities.php"><div id="activity_button"></div></a>
      </div>

  </div>
    <a href="sign_out.php"><div id="outside"></div></a>

  <div id="student_name">
  
    <?php


$result = mysql_query("select * from student where id='$_SESSION[id2]'");
$row = mysql_fetch_array($result);
?>
  
  <div id="name"><?php echo $row['name']; ?></div>
  </div>
  <?php
  $ye = mysql_query("select * from year");


  $te = mysql_query("select * from term");


 $mat = mysql_query("select * from material");


?>
  
<div id="choices">
<form name="choose_sheets" method="POST"  style="width:900px;height:40px; position:absolute;margin-top:33px; margin-left:0px;">

<select name="year"  style="width:260px; height:27px; margin-left:180px;position:absolute; border:none;">

   <option>-----</option><?php
		      while ( $year = mysql_fetch_array($ye) )
  {
  echo('
        <option>');echo($year['name']);echo('</option>
		');
		}
		?>

</select>

<select name="term"  style="width:260px; height:27px; margin-left:-107px;position:absolute; border:none;">

  <option>-----</option><?php
		      while ( $term = mysql_fetch_array($te) )
  {
  echo('
        <option>');echo($term['name']);echo('</option>
		');
		}
		?>

</select>

<select name="material"  style="width:260px; height:27px; margin-left:-438px;position:absolute; border:none;">

 <option>-----</option><?php
		      while ( $material = mysql_fetch_array($mat) )
  {
  echo('
        <option>');echo($material['name']);echo('</option>
		');
		}
		?>


</select>


<input name="submit" type="submit" value="إظهار" id="choices_button" />
</form>
</div>

<?php
if(isset($_POST['submit'])){

$year=$_POST['year'];
$term=$_POST['term'];
$material=$_POST['material'];

?>

<div id="sheets">
<table width="963" border="0">
  <tr style="background-color:#9C3; color:#FFF; font-family:'SC_KHALID'; font-size:17px; height:35px;">
    <td>تحميل</td>
    <td>الملف</td>
  </tr>
  
    <?php
  $she=mysql_query("select * from sheet where year='$year' and term='$term' and material='$material' ");
     while ( $sheet = mysql_fetch_array($she) )
  {
  ?>
  
  <tr style="background-color:#6C0; color:#FFF; font-family:'SC_KHALID'; font-size:17px; height:35px;">
    <td style="background-color:#FFF;"><a href="sheet/<?php echo $sheet['file']; ?>"><img src="images/download.png" width="150" height="51" /></a></td>
    <td style="background-color:#003;"><?php echo $sheet['descr']; ?></td>
  </tr>
  <?php
  }
  ?>
 

</table>

</div>

<?php
}
?>



<a href="student_inquiry.php"><div id="student_inquiry"></div></a>


<?php
include ("fotter.php");
?>



</div>

<?php

}else{




echo('
<script type="text/javascript">

window.location ="index.php";
</script>
');


}
echo('

</body>
</html>
');
?>