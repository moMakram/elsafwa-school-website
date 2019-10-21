<?php
session_start();
include ("connec.php");

echo('
<html>
<head>
</head>
<body>
');

if (isset($_SESSION['admin_session']) ) {


$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['updatevideo']=='1'){


$id=$_GET['id'];
$result = mysql_query("delete from video where id = ('$id') "); 


if ($result)
{
 echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم الحذف بنجاح");
window.location ="deleteorupdatevideo.php";
</script>
</body>
</html>
');
}
else
{
echo ("error");
}

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
</html>');

?>