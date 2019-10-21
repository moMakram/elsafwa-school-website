<?php

session_start();
include('connec.php');



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صلاحيات الشيت</title>
<link href="css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php
if (isset($_SESSION['admin_session6']) ) {
?>


<div id="header"></div>
<div id="menu">
<a href="admincontrol.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>

<form method="POST">
<center>
<font size="5">&nbsp; choose username </font>
<select name="username" style="width:200px; height:30px;">
<option> ------ </option>
<?php
$result = mysql_query("select * from prev where addsheet='1' order by id");
while($row = mysql_fetch_array($result)){
echo('
<option> '); echo $row['username']; echo(' </option>
');
}
?>


</select>
</center>
<input name="submit" type="submit" value="ok"  style="width:100px; height:30px;  position:absolute; margin-left:780px; margin-top:-30px;" />


</form>



<br/><br/><br/>

	<?php

if(isset($_POST['submit'])){

$username = $_POST['username'];

$res = mysql_query("select * from prev where username='$username'");
$ro = mysql_fetch_array($res);


?>


	





<form method="POST" action="update_sheetprev.php">

<center>

  <table width="680" height="100" border="0">
  

    <tr style="background:#999; height:35px;">
	  <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">اسم الماده </td>
      
	  <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">الخصوصيه</td>
	  
    </tr> 
	<?php
	
		$result = mysql_query("select * from material order by id ");
	
	while($row= mysql_fetch_array($result))
	{
	?>
	
	<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><?php echo $row['name']; ?> </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <input type="checkbox" name="one[]" value="<?php echo $row['name']; ?>" checked>
	  
	  </td>
	  
    </tr> 
	
	
	<?php
	}
	?>
	
	
	
</table>
<input name="submit" type="submit" value="ok"  style="width:100px; height:30px;  position:absolute; margin-left:-80px; margin-top:230px;" />


</center>

<input type="hidden" name="id" value="<?php echo $ro['id']; ?>" />

</form>
	

<?php
}
?>
	
 
 
 
</div>
<div id="fotter4"></div>
<?php
}else{

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
