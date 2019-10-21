<?php
session_start();
include ("connec.php");

echo('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>إدخال الأخبار</title>
<link href="css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

');

if (isset($_SESSION['admin_session']) ) {
///$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['lastnews']=='1'){

echo('

<div id="add_news_word"></div>
<div id="header"></div>');
include ("menu.php");
echo('
<div id="body2">
<form id="form1" name="form1" method="post" action="ins_news.php">

<table width="530" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
  <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الخبر</font></td>
    <td style="background-color:#060"><input name="descr" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:450px; height:20px;"/></td>
  </tr>
  <tr>
    <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">حالة الظهور</font></td>
    <td style="background-color:#060"><select name="show" id="show"  style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;">
    <option>يظهر</option>
    <option>لا يظهر</option>
  </select></td>
  </tr>
  <tr>
    <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">ترتيب الخبر</font></td>
    <td style="background-color:#060"><input name="order" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
  </tr>


</table>

<div style=" margin-top:50px;  margin-left:400px;">
<input type="submit" name="submit" id="submit"    value="تسجيل"  style=" border-radius:4px; font-size:20px; width:80px; background-color:#060; border:none;  " />
</div>

</form>


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