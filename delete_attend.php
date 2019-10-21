<?php
session_start();
include ("connec.php");

echo('
<html>
<head>
</head>
<body>
');
$date=$_POST['date'];
$class=$_POST['class'];


if (isset($_SESSION['admin_session']) ) {



if(isset($_POST['submit'])){



$result = mysql_query("delete from attend where date = ('$date') and class = ('$class') "); 


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
window.location ="deleteorupdateattend.php";
</script>
</body>
</html>
');
}
else
{
echo ("error");
}
}


if(isset($_POST['submite'])){



$result = mysql_query("delete from attend where date = ('$date') "); 


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
window.location ="deleteorupdateattend.php";
</script>
</body>
</html>
');
}
else
{
echo ("error");
}
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