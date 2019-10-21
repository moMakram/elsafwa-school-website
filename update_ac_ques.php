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





$result = mysql_query(" update quesstu set ques ='$_POST[ques]' , typee ='$_POST[typee]' , ans ='$_POST[ans]' 
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
window.location ="inquiriesandanswers.php";
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




