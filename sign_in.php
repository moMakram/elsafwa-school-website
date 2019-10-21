<?php
include('connec.php');


echo(' 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>دخول الطالب</title>
</head>
<body>


');


if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];




// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

 


  $result = mysql_query("select * from student where username = ('$username') and password = ('$password')");
  $row = mysql_fetch_array($result);
$count = mysql_num_rows( $result);



if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
///session_register("username");
///session_register("password");

session_start();
$id=$row['id'];

$_SESSION['admin_session2'] = "$username";

$_SESSION['id2'] = "$id";

echo('
<script type="text/javascript">

window.location ="student.php";
</script>
');

}
else {

echo('
<script type="text/javascript">
alert ("اسم السمتخدم او كلمه المرور خطأ");
window.location ="index.php";
</script>
');

}


}
echo('
</body>
</html> ');
?>

