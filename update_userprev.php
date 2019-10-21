<?php

session_start();
include("connec.php");



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

$id = $_POST['id'];
echo $id;

$lastnews = $_POST['lastnews'];
$updatenews = $_POST['updatenews'];
$addphoto = $_POST['addphoto'];
$updatephoto = $_POST['updatephoto'];
$quesvisit = $_POST['quesvisit'];
$addvideo = $_POST['addvideo'];
$updatevideo = $_POST['updatevideo'];
$addgood = $_POST['addgood'];
$updategood = $_POST['updategood'];
$addstudent = $_POST['addstudent'];
$updatestudent = $_POST['updatestudent'];
$addmaterial = $_POST['addmaterial'];
$updatematerial = $_POST['updatematerial'];
$addsection = $_POST['addsection'];
$updatesection = $_POST['updatesection'];
$inquery = $_POST['inquery'];
$addclass = $_POST['addclass'];
$updateclass = $_POST['updateclass'];
$addsheet = $_POST['addsheet'];
$updatesheet = $_POST['updatesheet'];
$addyear = $_POST['addyear'];
$updateyear = $_POST['updateyear'];
$addterm = $_POST['addterm'];
$updateterm = $_POST['updateterm'];
$addtype = $_POST['addtype'];
$updatetype = $_POST['updatetype'];
$addattend = $_POST['addattend'];
$updateattend = $_POST['updateattend'];
$addactive = $_POST['addactive'];
$updateactive = $_POST['updateactive'];
$pictactive = $_POST['pictactive'];
$updatepictactive = $_POST['updatepictactive'];




$result2 = mysql_query(" update prev set  lastnews='$lastnews'
,updatenews='$updatenews',addphoto='$addphoto',addactive='$addactive',pictactive='$pictactive',updatepictactive='$updatepictactive',updateactive='$updateactive',updatephoto='$updatephoto',quesvisit='$quesvisit',addvideo='$addvideo',updatevideo='$updatevideo',
addgood='$addgood',updategood='$updategood',addstudent='$addstudent',updatestudent='$updatestudent',addmaterial='$addmaterial',
updatematerial='$updatematerial',addsection='$addsection',updatesection='$updatesection',inquery='$inquery',addclass='$addclass',updateclass='$updateclass',


addsheet='$addsheet',updatesheet='$updatesheet',addyear='$addyear',updateyear='$updateyear',addterm='$addterm',updateterm='$updateterm',addtype='$addtype',updatetype='$updatetype',
addattend='$addattend',updateattend='$updateattend'


 where id='$id'  " ) ;




 echo "<br />";
if ($result2){
echo('
<script type="text/javascript">
alert ("تم التعديل بنجاح");
window.location ="updateuser_form.php";
</script>
');
}
else
{
echo "error";
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
