<?php
session_start();
include ("connec.php");

echo('
<html>
<head>
</head>
<body>
');

if (isset($_SESSION['admin_session6']) ) {



   $result = mysql_query("INSERT INTO prev (username,password,lastnews)
 values('$_POST[username]','$_POST[password]','1')");

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
window.location ="adduser.php";
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

window.location ="admin.php";
</script>
');


}
echo('

</body>
</html>');

?>