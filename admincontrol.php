<?php

session_start();

include('connec.php');

echo('


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحة التحكم الرئيسية</title>
<link href="css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body  background="imagess/background-freebg-web-abstract-blue-light-array-wallwuzz-hd-wallpaper-2659.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

');
if (isset($_SESSION['admin_session6']) ) {

echo('

<div id="header"></div>
<div id="bodyadmmakr">
<div id="control_word"></div>





<a href="adduser.php"><div id="buttona1"></div></a>

<a href="deleteorupdateuser.php"><div id="buttona2"></div></a>

<a href="updateuser_form.php"><div id="buttona3"></div></a>

<a href="updatesheet_form.php"><div id="buttona4"></div></a>

<a href="logoutadm.php"><div id="buttona5"></div></a>



</div>
<div id="fffter26"></div>
');
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