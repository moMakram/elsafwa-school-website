<?php

session_start();
include('connec.php');
$idte=$_POST['id'];


echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التعديل على صلاحيات المستخدم</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session6']) ) {

?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="admincontrol.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>




<font size="7px"><center>  التعديل على صلاحيات المستخدم </center> </font>
<br><br>




<?php

if(isset($_POST['submit'])){


	
 if(empty($_POST['one'])){
 
echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم التسجيل بنجاح");
window.location ="updatesheet_form.php";
</script>
</body>
</html>
'); 
 
 
 }else{
  $one=$_POST['one'];                            /// we take the value of checkbox and put it on an array and call this array
 foreach($one as $ch)
 {
 ///echo $ch;
 ///echo"<br/>";
 

 
 
$result = mysql_query("INSERT INTO prevsheet (matname,idte)
 values('$ch','$idte')");
 
 
 }
 }
 




 echo "<br />";
if ($result){
echo('
<script type="text/javascript">
alert ("تم التعديل بنجاح");
window.location ="updatesheet_form.php";
</script>
');
}
else
{
echo "error";
}
}


	
	
echo('
	
  
</div>
<div id="fotter4"></div> ');

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
