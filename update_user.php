<?php
session_start();
include ("connec.php");

$id=$_GET['id'];

$result = mysql_query(" select * from prev where id ='$id' ");

$rows=mysql_fetch_array($result);





echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التعديل على المستخدم</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

');

if (isset($_SESSION['admin_session6']) ) {

echo('

<div id="add_students_word"></div>
<div id="header"></div>');
include ("menuadm.php");
echo('


<div id="body2">
<form id="form1" name="form1" method="post" action="update_ac_user.php">
<br/><br/>
<table width="480" height="50" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
 
 
  <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">username</font></td>
    <td style="background-color:#060"><input name="username" type="text"  value=" '); echo $rows['username'] ; echo('"
	style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
  </tr>
  
    <tr>
    <td width="150"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">username</font></td>
    <td style="background-color:#060"><input name="password" type="text"  value=" '); echo $rows['password'] ; echo('"
	style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
  </tr>
  
 
 
 
</table>
<input name="id" type="hidden" id="id" value=" '); echo $rows['id']; echo(' "  />   
<br/>
 <input type="submit" name="button" id="button" value="Submit" style="margin-left:400px; width:90px; height:30px; border-radius:5px; background-color:#090; " />
  

</form>


</div>

<div id="fotter"></div>


');

}else{

////header("location:login.php");


echo('
<script type="text/javascript">

window.location ="admin.php";
</script>
');


}
echo('

</body>
</html>
 ');

?>