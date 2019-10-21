<?php
session_start();
include ("connec.php");

 
echo('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافة صور الانشطة</title>
<link href="css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
');

if (isset($_SESSION['admin_session']) ) {
$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['pictactive']=='1'){
echo('

<div id="header"></div>');
include ("menu.php");
echo('
<div id="body2">
<form id="form1" name="form1" method="post" action="ins_pictactv.php" enctype="multipart/form-data">
  <table width="480" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
   
   
  
   
  
    <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">وصف الصوره</font></td>
      <td style="background-color:#060"><input name="descr" type="text" style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;"/></td>
    </tr>
   
	
	
	
	   <tr>
	     <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">النشاط</font></td>
      <td style="background-color:#060"><select name="active" id="active"  style=" border:none;margin-left:6px; margin-top:2px; width:307px; height:20px;">
        <option>-----</option>');
        $resu = mysql_query(" select * from active");
  
		      while ($row = mysql_fetch_array($resu))
			  {
  
  echo('
        <option>'); echo $row[1]; echo('</option>
		');
		}
		echo('
		
		
      </select></td>
    </tr>
   
	
	
	
	 <tr>
      <td width="150" style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الملف</font></td>
      <td style="background-color:#060"><input type="file" name="file" style=" margin-left:5px;" /></td>
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