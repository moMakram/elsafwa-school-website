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

<?php
if (isset($_SESSION['admin_session2']) ) {



?>

<div id="body">

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
  <div id="student_name">
  
  <?php




$result = mysql_query("select * from student where id='$_SESSION[id2]'");
$row = mysql_fetch_array($result);
?>
  <div id="name"><?php echo $row['name']; ?></div>   
  </div>
  <a href="sheets.php"><div id="continue"></div></a>
  <a href="sign_out.php"><div id="outside"></div></a>
<div id="absent_students">
<div id="absent_table">
<table width="538" >
  <tr style="border:#666 1px groove; color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#666;">
    <td width="50" style="font-family:'SC_OUHOD'; font-size:19px;">7</td>
    <td width="50" style="font-family:'SC_OUHOD'; font-size:19px;">6</td>
    <td width="50" style="font-family:'SC_OUHOD'; font-size:19px;">5</td>
    <td width="50" style="font-family:'SC_OUHOD'; font-size:19px;">4</td>
    <td width="50" style="font-family:'SC_OUHOD'; font-size:19px;">3</td>
    <td width="50" style="font-family:'SC_OUHOD'; font-size:19px;">2</td>
    <td width="50" style="font-family:'SC_OUHOD'; font-size:19px;">1</td>
    <td width="150">التاريخ</td>
  </tr>
  
  <?php
  $res=mysql_query("select * from attend where idstu='$_SESSION[id2]'");
    while ( $att = mysql_fetch_array($res) )
  {
  
  ?>
  
  <tr style="border:#666 1px groove; color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    <td><?php echo $att['seven']; ?></td>
    <td><?php echo $att['six']; ?></td>
    <td><?php echo $att['five']; ?></td>
    <td><?php echo $att['four']; ?></td>
    <td><?php echo $att['three']; ?></td>
    <td><?php echo $att['two']; ?></td>
    <td><?php echo $att['one']; ?></td>
    <td style="background-color:#00F;font-family:'SC_OUHOD'; font-size:19px;"><?php echo $att['date']; ?></td>
  </tr>
  
   <?php
  }
  ?>
  
 

</table>
</div>
</div>
<div id="exams_students">
<div id="absent_table">

<div id="exams_date">
<div style="position:absolute; margin-left:6px; margin-top:10px; width:142px; height:27px; color:#FFF; font-family:'SC_KHALID'; text-align:center; font-size:18px;">يناير</div>
</div>
<table width="538" border="0" style="margin-top:53px;">
  <tr style=" color:#FFF;text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#666;">
    <td>درجة الطالب</td>
    <td>الدرجة الصغرى</td>
    <td>الدرجة الكبرى</td>
    <td>إسم المادة</td>
  </tr>
  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">لغة عربية</td>
  </tr>
  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">رياضيات</td>
  </tr>
    <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">لغة إنجليزية</td>
  </tr>

  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">ألمانى</td>
  </tr>

  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">فيزياء</td>
  </tr>

  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">كيمياء</td>
  </tr>
  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">أحياء</td>
  </tr>

</table>
<br />


<div id="exams_date">
<div style="position:absolute; margin-left:6px; margin-top:10px; width:142px; height:27px;color:#FFF; font-family:'SC_KHALID'; text-align:center; font-size:18px;">فبراير</div>
</div>
<table width="538" border="0" style="margin-top:53px;">
<tr style=" color:#FFF;text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#666;">
    <td>درجة الطالب</td>
    <td>الدرجة الصغرى</td>
    <td>الدرجة الكبرى</td>
    <td>إسم المادة</td>
  </tr>
  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">لغة عربية</td>
  </tr>
  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">رياضيات</td>
  </tr>
    <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">لغة إنجليزية</td>
  </tr>

  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">ألمانى</td>
  </tr>

  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">فيزياء</td>
  </tr>

  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">كيمياء</td>
  </tr>
  <tr style=" color:#FFF; text-align:center;height:50px; font-family:'SC_KHALID'; font-size:17px; background-color:#3C0;">
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="background-color:#00F;">أحياء</td>
  </tr>
</table>


</div>
</div>




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