<?php

include("connec.php");

session_start();
session_destroy();

echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>




<br/><br/>');




echo('
<script type="text/javascript">

window.location ="index.php";
</script>
');



echo('
</center>

</body>
</html> ');
?>