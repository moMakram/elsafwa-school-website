<?php
session_start();
include ("connec.php");
$id=$_GET['id'];
$result = mysql_query(" select * from question where id ='$id' ");
$rows=mysql_fetch_array($result);
echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الردود على الإستفسارات</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
');
if (isset($_SESSION['admin_session']) ) {


$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['quesvisit']=='1'){

echo('
<div id="inquiry_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body2">
<div style=" margin-left:80px; margin-top:40px; position:absolute;">

<form method="POST" action="update_ac_ques2.php">

<table width="600" border="0">
 
 <input type="hidden" name="id" id="id" value="'); echo $rows['id']; echo(' "/>
 
  <tr>
    <td style="background-color:#000; width:150px; height:60px;"><font color="#FFFFFF" size="2" face="Comic Sans MS, cursive"><p align="center">Question</p></font></td>
    <td style="background-color:#060; width:300px; height:60px;"><textarea name="ques" cols="" rows=""  wrap="virtual" style="width:403px; direction:rtl; max-width:403px; margin-left:9px; border-radius:4px; height:55px; max-height:55px;">
	'); echo $rows['ques']; echo('
	</textarea></td>
  </tr>
  <tr>
    <td style="background-color:#000; width:150px; height:60px;"><font color="#FFFFFF" size="2" face="Comic Sans MS, cursive"><p align="center">Reply</p></font></td>
    <td style="background-color:#060; width:300px; height:60px;"><textarea name="ans" cols="" rows=""  wrap="virtual" style="width:403px; direction:rtl; max-width:403px; margin-left:9px; border-radius:4px; height:55px; max-height:55px;">
	'); echo $rows['ans']; echo('
	</textarea></td>
  </tr>
  <tr>
    <td style="background-color:#000; width:150px; height:30px;"><font color="#FFFFFF" size="2" face="Comic Sans MS, cursive"><p align="center">حالة الظهور</p></font></td>
    <td style="background-color:#060; width:300px; height:30px;"><select name="typee" style="width:120px; height:25px; margin-left:10px; border:#000 1px groove">
      <option>');echo $rows['typee'];  echo('</option>');
	 if ( $rows['typee'] == "لا يظهر")
	 {
	 echo('
    <option>يظهر</option>');
	}
	else
	{
	echo('
    <option>لا يظهر</option>
	');
	}
	echo('
    </select></td>
  </tr>
</table>
</div>
<input name="submit" type="submit" value="submit" style="background-color:#090; width:90px; height:26px; margin-left:330px; margin-top:265px; border-radius:3px;" />
</div>
</form>

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