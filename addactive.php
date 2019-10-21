<?php
session_start();
include ("connec.php");

echo('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه نشاط</title>
<link href="css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
');

if (isset($_SESSION['admin_session']) ) {

$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['addactive']=='1'){

echo('
<div id="add_students_word"></div>
<div id="header"></div>');
include ("menu.php");
echo('
<div id="body2">
<form id="form1" name="form1" method="post" action="ins_active.php">
<br/><br/>
  <table width="430" height="50" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
    <tr>
      <td width="100"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">اسم النشاط</font></td>
      <td style="background-color:#060"><input name="name" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
  
  </table>
  <br/>
  <input type="submit" name="button" id="button" value="Submit" style="margin-left:400px; width:90px; height:30px; border-radius:5px; background-color:#090; " />
  
</form>
</div>

</div>

<div id="fotter"></div>
');


}else{

echo('
<script type="text/javascript">
alert ("غير مسموح لك بالدخول هنا");
window.location ="control.php";
</script>
');

}



}else{

////header("location:login.php");


echo('
<script type="text/javascript">

window.location ="login.php";
</script>
');


}
echo('

</body>
</html>

');
?>