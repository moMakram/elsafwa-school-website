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
if($go['quesvisit']=='1'){



$result = mysql_query(" update question set ques ='$_POST[ques]' , typee ='$_POST[typee]' , ans ='$_POST[ans]' 
  where id='$_POST[id]' " );


if($result)
{

echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم التعديل بنجاح");
window.location ="inquiriesandanswers2.php";
</script>
</body>
</html>
');
}

else
{

echo("error");
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




