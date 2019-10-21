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



   $result = mysql_query("INSERT INTO student (name,username,password,class,year,section,term)
 values('$_POST[name]' , '$_POST[username]', '$_POST[password]', '$_POST[class]', '$_POST[year]', '$_POST[section]', '$_POST[term]' )");

if ($result)
{
echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم التسجيل بنجاح");
window.location ="addstudents.php";
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

window.location ="login.php";
</script>
');


}
echo('

</body>
</html>');

?>