<?php
session_start();
include ("connec.php");

echo('
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
');

if (isset($_SESSION['admin_session']) ) {

$year=$_POST['year'];
$term=$_POST['term'];
$section=$_POST['section'];







  

  
  if(empty($_POST['one'])){
 
echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم التسجيل بنجاح");
window.location ="ins_type.php";
</script>
</body>
</html>
'); 
 
 
 }else{
  $one=$_POST['one'];                            /// we take the value of checkbox and put it on an array and call this array
 foreach($one as $ch)
 {
 ///echo $ch;
 ///echo"<br/>";
 

 
 
$result = mysql_query("INSERT INTO termmat (section,year,term,material)
 values('$section','$year','$term','$ch')");
 
 
 }
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  

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
window.location ="ins_type.php";
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