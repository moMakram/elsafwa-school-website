<?php
session_start();
include ("connec.php");



echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ارشيف غياب الطلبه</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

');
if (isset($_SESSION['admin_session']) ) {

$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['updateattend']=='1'){

echo('




<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body5">

<form id="form1" name="form1" method="POST" >


  <table width="480" height="50" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
   
   
   <tr>
	     <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الفصل</font></td>
      <td style="background-color:#060"><select name="class" id="group_n"  style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;">
        <option>-----</option>');
		
		 $result = mysql_query(" select * from class");
  
		      while ($rows = mysql_fetch_array($result))
			  {
  
  echo('
        <option>'); echo $rows[1];echo('</option>
		');
		}
		echo('
      </select></td>
    </tr>
	
	
<tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">التاريخ</font></td>
      <td style="background-color:#060"><input name="date" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
	
	
	
	
	
	
	</table>
<input type="submit" name="submit" id="submit"    value="بحث"  style=" border-radius:4px; font-size:20px;  width:80px; background-color:#060; border:none;margin-left:370px; position:absolute; margin-top:48px;" />
</form>


');





if(isset($_POST['submit'])){

$date=$_POST['date'];
$class=$_POST['class'];

////echo $class;

$reslu=mysql_query("select * from attend where class='$_POST[class]' and date='$date' ");
echo('



<form id="form2" name="form2" method="POST" action="delete_attend.php" >

<input type="hidden" name="date" value="'); echo $date; echo('"/>
<input type="hidden" name="class" value="'); echo $class; echo('"/>

<br/>
<table width="650" height="50" border="0" bordercolor="#000" style="margin-left:55px; border:#009 groove 1px; margin-top:70px; position:absolute; width: 651px;">
<tr height="10">
<td width="50%" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">التاريخ &nbsp;'); echo $date; echo('</font></td>
    <td width="50%" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الفصل &nbsp;'); echo $class; echo('</font></td>
  
 </tr>
</table>
<table width="650" height="100" border="0" bordercolor="#000" style="margin-left:55px; border:#009 groove 1px; margin-top:120px;  width: 651px;">


  <tr height="10">
    <td width="990" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">اسم الطالب</font></td>
    <td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الحصه الاولى</font></td>
	<td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الحصه الثانيه</font></td>
	<td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الحصه الثالثه</font></td>
	<td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الحصه الرابعه</font></td>
	<td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الحصه الخامسه</font></td>
	<td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الحصه السادسه</font></td>
	<td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الحصه السابعه</font></td>
	
   
  </tr>
  
  
  
  
  ');
     while ( $rows = mysql_fetch_array($reslu) )
  {
  echo('
  
  <tr>
  

 
   <td width="990" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> '); echo($rows['name']);echo(' </td>  
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> '); echo($rows['one']);echo('</td>
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> '); echo($rows['two']);echo(' </td>
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>  '); echo($rows['three']);echo(' </td>
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> '); echo($rows['four']);echo(' </td>
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> '); echo($rows['five']);echo(' </td>
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> '); echo($rows['six']);echo(' </td>
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> '); echo($rows['seven']);echo(' </td>

	</tr>

	
	');
	
	}
	
	echo('



</table>
<div style=" margin-top:50px;  margin-left:300px;">
<input type="submit" name="submit" id="submit"    value="حذف غياب الفصل"  style=" border-radius:4px; font-size:20px; width:180px; background-color:#060; border:none;  " />
</div>

<div style=" margin-top:50px;  margin-left:300px;">
<input type="submit" name="submite" id="submite"    value="حذف غياب اليوم كاملا"  style=" border-radius:4px; font-size:20px; width:180px; background-color:#060; border:none;  " />
</div>

<br/><br/>
<font size="4"><center> عزيزى العميل اضغط مره واحده فقط على (تسجيل) وانتظر قليلا لان هذه العمليه تستغرق بعض الوفت</center></font>

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