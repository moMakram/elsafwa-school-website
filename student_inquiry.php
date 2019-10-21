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
    <a href="sign_out.php"><div id="outside"></div></a>

  <div id="student_name">
  
   <?php

$result = mysql_query("select * from student where id='$_SESSION[id2]'");
$row = mysql_fetch_array($result);
?>
  
  <div id="name"><?php echo $row['name']; ?></div>
  </div><br />
<form name="inquiry_students" method="POST" action="ins_ques.php">
<textarea name="ques" cols="" rows="" id="ques" style=" max-width:300px; max-height:245px;position:absolute; width:300px; height:245px; border:groove 1px #FFFFFF; margin-left:507px; margin-top:205px; background-color:#3a589b; color:#fff; border-radius:6px; font-family:'SC_KHALID'; direction:rtl; "value="أدخل أسئلتك هنا ...." placeholder="أدخل أسئلتك هنا ...." onfocus="this.value=('   ');"></textarea>
<input name="submit" value="تأكيد" type="submit" id="submit" style="width:80px; font-family:'SC_KHALID'; height:30px; position:absolute; margin-top:470px; margin-left:680px;" />
<input name="cancel" value="إلغاء" type="reset" id="cancel" style="width:80px; font-family:'SC_KHALID'; height:30px; position:absolute; margin-top:470px; margin-left:560px;"  />

</form>
<div id="inquiry_table">
<table width="959" border="0">
  <tr style="background-color:#9C3; color:#000; font-family:'SC_KHALID'; font-size:19px; height:40px;">
    <td width="479.5">الردود</td>
    <td width="479.5">الإستعلامات</td>
  </tr>
  
  <?php
  $res = mysql_query("select * from quesstu where idstu='$_SESSION[id2]' and typee='يظهر'");
  while ( $ros = mysql_fetch_array($res) )
  {
  ?>
  
  <tr style="background-color:#6C0; color:#000; font-family:'SC_KHALID'; font-size:17px; height:40px;">
    <td style="background-color:#FFF;"><?php echo $ros['ans']; ?> </td>
    <td style="background-color:#003;"><font color="white"><?php echo $ros['ques']; ?></font></td>
  </tr> 
  <?php
  }
  ?>
  
  
 


</table>

</div>








<?php
include ('fotter.php');
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