<?php


include('connec.php');


echo(' 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحة التحكم الرئيسية</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body background="imagess/background-freebg-web-abstract-blue-light-array-wallwuzz-hd-wallpaper-2659.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="header"></div>



<div id="bodyopo">
<br><br>
<font size="6px" > <center>الدخول لغرفة التحكم </center></font>

<br><br><br>
<form method="POST"   >

    
    <center>
                  <div >
				 <font align="left" size="5px"> username </font>
                <input type="text"  placeholder="كلمه المرور" name="username" id="username" />
                
                </div>
                
	
<br/><br/>
                <div >
				<font align="left" size="5px"> password</font>
                <input type="password" name="password" id="password"   placeholder="الرقم السرى"  />
                
                </div> 
                <br/><br/><br/><br/>  
                
                  <div>
                
                <input  type="submit" name="submit" id="submit" value="الدخول" />
                
                </div> 
    </center>
</form>	

<br><br><br>

<font color="red" size="5px"> <center>.ممنوع منعا باتا الدخول هنا او استخدام اسم مستخدم وهمى لعدم التعرض للمسألة القانونية </center> </font> ');


if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];




// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

 


  $resul = mysql_query("select * from prev where username = ('$username') and password = ('$password')");
  $rowse = mysql_fetch_array($resul);
$count = mysql_num_rows( $resul);



if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
///session_register("username");
///session_register("password");

session_start();

$id5=$rowse['id'];

$_SESSION['admin_session'] = "$username";

$_SESSION['id8']="$id5";

echo('
<script type="text/javascript">

window.location ="control.php";
</script>
');



////header("location:control.php");
}
else {

echo('<br><br>');
echo (" <font size='4px' ><center> كلمه المرور او الرقم السرى خطأ </center></font>");

}


}
echo('



</div>
<div id="fotteropo"></div>
</body>
</html> ');
?>
