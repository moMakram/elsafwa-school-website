<?php

include ("connec.php");

echo('
<html>
<head>
</head>
<body>
');





   $result = mysql_query("INSERT INTO question (name,ques,typee)
 values('$_POST[name]' , '$_POST[ques]','لا يظهر' )");

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
window.location ="contact_us.php";
</script>
</body>
</html>
');



}
else
{
echo ("error");
}


echo('

</body>
</html>');

?>