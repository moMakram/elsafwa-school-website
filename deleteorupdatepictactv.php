<?php
session_start();
include ("connec.php");



echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>حذف صور الانشطة</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

');
if (isset($_SESSION['admin_session']) ) {

$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['updatepictactive']=='1'){

echo('




<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body5">

<form id="form1" name="form1" method="POST" >


  <table width="480" height="50" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
   
   
   <tr>
	     <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">النشاط</font></td>
      <td style="background-color:#060"><select name="active" id="group_n"  style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;">
        <option>-----</option>');
		
		 $result = mysql_query(" select * from active");
  
		      while ($rows = mysql_fetch_array($result))
			  {
  
  echo('
        <option>'); echo $rows[1];echo('</option>
		');
		}
		echo('
      </select></td>
    </tr>
	
	

	
	
	
	
	
	</table>
<input type="submit" name="submit" id="submit"    value="بحث"  style=" border-radius:4px; font-size:20px;  width:80px; background-color:#060; border:none;margin-left:370px; position:absolute; margin-top:48px;" />
</form>


');





if(isset($_POST['submit'])){

$active=$_POST['active'];


$reslut=mysql_query("select * from active where name='$_POST[active]' ");
   $rows = mysql_fetch_array($reslut);
  $idactive=$rows['id'];

$reslu=mysql_query("select * from pictactive where idactive='$idactive' ");
echo('



<form id="form2" name="form2" method="POST" action="delete_attend.php" >




<table width="650" height="100" border="0" bordercolor="#000" style="margin-left:55px; border:#009 groove 1px; margin-top:120px;  width: 651px;">


  <tr height="10">
    <td width="990" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">اسم الصوره </font></td>
    <td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">الوصف</font></td>
	<td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">النشاط</font></td>
	<td width="150" height="10"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"  size="-1">Delete</font></td>

	
   
  </tr>
  
  
  
  
  ');
     while ( $rowse = mysql_fetch_array($reslu) )
  {
  echo('
  
  <tr>
  

 
   <td width="990" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> '); echo($rowse['file']);echo(' </td>  
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> '); echo($rowse['descr']);echo('</td>
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> '); echo($rows['name']);echo(' </td>
   <td width="150" height="20"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font> ');echo('<a href= "delete_pictactive.php?id='); echo $rowse['id']; echo('"> Del </a>  </td>


	</tr>

	
	');
	
	}
	
	echo('



</table>

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