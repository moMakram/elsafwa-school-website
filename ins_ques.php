<?php
session_start();
include ("connec.php");

echo('
<html>
<head>
</head>
<body>
');

if (isset($_SESSION['admin_session2']) ) {

$resu = mysql_query("select * from student where id='$_SESSION[id2]'");
$row = mysql_fetch_array($resu);

$idstu=$row['id'];
$name=$row['name'];


   $result = mysql_query("INSERT INTO quesstu (name,ques,idstu,typee)
 values('$name' , '$_POST[ques]', '$idstu' ,'لا يظهر' )");

if ($result)
{
echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم استقبال السؤال بنجاح انتظر الاجابه قريبا");
window.location ="student_inquiry.php";
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

////header("location:login.php");


echo('
<script type="text/javascript">

window.location ="index.php";
</script>
');


}
echo('

</body>
</html>');

?>