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


$date=$_POST['date'];
$class=$_POST['class'];





$resul= mysql_query(" select * from student where class='$_POST[name]' ");


  while ( $rows = mysql_fetch_array($resul) )
  {
  
    $result = mysql_query("INSERT INTO attend (name,date,idstu,class)
 values('$rows[name]','$date','$rows[id]','$class')");
  

  
  if(empty($_POST['one'])){
   /// $result = mysql_query("INSERT INTO attend (name,date,two)
 ///values('$rows[name]','$date','yy')");
 
 }else{
  $one=$_POST['one'];                            /// we take the value of checkbox and put it on an array and call this array
 foreach($one as $ch)
 {
/// echo $ch;
/// echo"<br/>";
 if ($ch==$rows['id']){

 
 
$resultone = mysql_query(" update attend set one ='حضور' where idstu='$rows[id]' and date='$date'  " );
 
 }
 }
 }
 
 
   if(empty($_POST['two'])){
 
 
 }else{
  $two=$_POST['two'];                            /// we take the value of checkbox and put it on an array and call this array
 foreach($two as $ch)
 {
 ///echo $ch;
 ////echo"<br/>";
 if ($ch==$rows['id']){

 
$resulttwo = mysql_query(" update attend set two ='حضور' where idstu='$rows[id]' and date='$date'  " );
 
 }
 }
 }
 
 
 
  if(empty($_POST['three'])){
 
 
 }else{
  $three=$_POST['three'];                            /// we take the value of checkbox and put it on an array and call this array
 foreach($three as $ch)
 {
 ///echo $ch;
 ////echo"<br/>";
 if ($ch==$rows['id']){

 
$resulttwo = mysql_query(" update attend set three ='حضور' where idstu='$rows[id]' and date='$date'  " );
 
 }
 }
 }
 
 
 
 
 if(empty($_POST['four'])){
 
 
 }else{
  $four=$_POST['four'];                            /// we take the value of checkbox and put it on an array and call this array
 foreach($four as $ch)
 {
 ///echo $ch;
 ///echo"<br/>";
 if ($ch==$rows['id']){

 
$resulttwo = mysql_query(" update attend set four ='حضور' where idstu='$rows[id]' and date='$date'  " );
 
 }
 }
 }
 
 
 
 
 
  if(empty($_POST['five'])){
 
 
 }else{
  $five=$_POST['five'];                            /// we take the value of checkbox and put it on an array and call this array
 foreach($five as $ch)
 {
 ///echo $ch;
 ////echo"<br/>";
 if ($ch==$rows['id']){

 
$resulttwo = mysql_query(" update attend set five ='حضور' where idstu='$rows[id]' and date='$date'  " );
 
 }
 }
 }
 
 
 
  if(empty($_POST['six'])){
 
 
 }else{
  $six=$_POST['six'];                            /// we take the value of checkbox and put it on an array and call this array
 foreach($six as $ch)
 {
 ///echo $ch;
 ////echo"<br/>";
 if ($ch==$rows['id']){

 
$resulttwo = mysql_query(" update attend set six ='حضور' where idstu='$rows[id]' and date='$date'  " );
 
 }
 }
 }
 
 
 
 
  if(empty($_POST['seven'])){
 
 
 }else{
  $seven=$_POST['seven'];                            /// we take the value of checkbox and put it on an array and call this array
 foreach($seven as $ch)
 {
 ///echo $ch;
 ////echo"<br/>";
 if ($ch==$rows['id']){

 
$resulttwo = mysql_query(" update attend set seven ='حضور' where idstu='$rows[id]' and date='$date'  " );
 
 }
 }
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
window.location ="ins_attend.php";
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