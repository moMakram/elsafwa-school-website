<?php
session_start();
include ("connec.php");



echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه مواد الترم</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

');
if (isset($_SESSION['admin_session']) ) {


$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['addtype']=='1'){

echo('



<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body5">

<form id="form1" name="form1" method="POST">


  <table width="480" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
   
   
   <tr>
	     <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">القسم</font></td>
      <td style="background-color:#060"><select name="section" id="section"  style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;">
        <option>-----</option>');
		
		 $result = mysql_query(" select * from section");
  
		      while ($rows = mysql_fetch_array($result))
			  {
  
  echo('
        <option>'); echo $rows[1]; echo('</option>
		');
		}
		echo('
      </select></td>
    </tr>
	
	
<tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">السنه الدراسية</font></td>
      <td style="background-color:#060"><input name="year" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
	
	<tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الترم</font></td>
      <td style="background-color:#060"><input name="term" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
	
	
	
	
	</table>
<input type="submit" name="submit" id="submit"    value="بحث"  style=" border-radius:4px; font-size:20px;  width:80px; background-color:#060; border:none; margin-left:470px; position:absolute; margin-top:48px;" />
</form>


');



if(isset($_POST['submit'])){

$year=$_POST['year'];
$term=$_POST['term'];
$section=$_POST['section'];



echo('

<form id="form2" name="form2" method="POST" action="ins_type3.php" >

<input type="hidden" name="year" value="'); echo $year; echo('"/>
<input type="hidden" name="term" value="'); echo $term; echo('"/>
<input type="hidden" name="section" value="'); echo $section; echo('"/>

<table width="650" height="100" border="0" bordercolor="#000" style="margin-left:55px; border:#009 groove 1px; margin-top:120px; position:absolute; width: 651px;">
  <tr height="10">
    <td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الماده</font></td>
    <td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">اختيار الماده</font></td>
   
  </tr>
  ');
  $reslut=mysql_query("select * from material ");
     while ( $rows = mysql_fetch_array($reslut) )
  {
  echo('
  
  <tr>
  
  <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>'); echo($rows[1]);echo(' </td>
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font><input type="checkbox" name="one[]" value="'); echo $rows[1]; echo('" checked> </td>
  

	</tr>');
	}
	echo('
	


</table>

<input type="submit" name="submit" id="submit"    value="تسجيل"  style=" border-radius:4px; font-size:20px;  width:80px; background-color:#060; border:none; margin-left:470px; position:absolute; margin-top:548px;" />

</form>

');
}

echo('

</div>
</div>
<div id="fotter4"></div>
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