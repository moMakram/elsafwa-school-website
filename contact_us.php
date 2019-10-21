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
        <a href="contact_us.php"><div id="contact_button1"></div></a>
        <a href="time_table.php"><div id="timetable_button"></div></a>
        <a href="good.php"><div id="good_button"></div></a>
        <a href="activities.php"><div id="activity_button"></div></a>
      </div>
  </div>
  <div  style="position:absolute; margin-left:460px; margin-top:155px; width:3px; height:590px; border-radius:10px; background-color:#00F;"></div>
<div id="table">
<table width="698"  border="0" >
  <tr style="background-color:#090; height:40px; color:#FFF; font-family:'SC_KHALID'; font-size:18px; text-align:center;">
    <td width="350">الردود</td>
    <td width="350">الأسئــلة</td>
  </tr>
  <?php
  $reslut=mysql_query("select * from question where typee='يظهر' ");
   while ( $rows = mysql_fetch_array($reslut) )
  {
  ?>
  <tr>
    <td style="background-color:#FFF; height:40px; color:#000; font-family:'SC_KHALID'; font-size:16px; text-align:center;"><?php echo $rows['ans']; ?></td>
    <td style="background-color:#16166b; height:40px; color:#FFF; font-family:'SC_KHALID'; font-size:16px; text-align:center;"><?php echo $rows['ques']; ?></td>
  </tr>
  <?php
  }
  ?>
  
  </table>
</div>

<form name="opinion" action="ins_ques2.php" method="POST" style="position:absolute; margin-left:115px; margin-top:165px; width:300px; height:300px;"> 
<input name="name" type="text" id="name" style="position:absolute; width:300px; height:40px; border:groove 0px #333333; margin-left:px; margin-top:px; background-color:#090; background-repeat:repeat-y; color:#FFF; border-radius:4px 4px 0px 0px; font-size:15px; text-align:right; font-family:'SC_KHALID'; direction:rtl;" value="        من  فضلك  أدخل  إسمك  هنا ...." placeholder="        من  فضلك  أدخل  إسمك  هنا ...." onfocus="this.value=('   ');" />
<textarea name="ques" cols="" rows="" id="ques" style=" max-width:296px; max-height:245px;position:absolute; width:296px; height:245px; border:groove 0px #333333; margin-left:10px; margin-top:57px; background-color:#CCC; background-repeat:repeat-y; color:#000; border-radius:0px 0px 4px 4px; font-family:'SC_KHALID'; direction:rtl; "value="        أدخل أسئلتك هنا ...." placeholder="        أدخل أسئلتك هنا ...." onfocus="this.value=('   ');"></textarea>
<input name="submit" value="تأكيد" type="submit" id="submit" style="width:80px; font-family:'SC_KHALID'; height:30px; position:absolute; margin-top:318px; margin-left:169px;" />
<input name="cancel" value="إلغاء" type="reset" id="cancel" style="width:80px; font-family:'SC_KHALID'; height:30px; position:absolute; margin-top:318px; margin-left:60px;"  />
</form>
<div style="background-image:url(images/contact_us.png); width:300px; height:190px; position:absolute; margin-left:128px; margin-top:550px;"></div>



<?php
include ("fotter.php");
?>

</div>
</body>
</html>
