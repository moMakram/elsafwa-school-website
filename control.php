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
///$id=$_GET['id'];
if (isset($_SESSION['admin_session']) ) {

echo('

<div id="header"></div>
<div id="body6">
<div id="control_word"></div>
');
echo('

<a href="addnews.php"><div id="button1"></div></a>
<a href="deleteorupdatenews.php"><div id="button2"></div></a>
<a href="addpict.php"><div id="button3"></div></a>
<a href="deleteorupdatepict.php"><div id="button4"><font color="white"></font></div></a>
<a href="addactive.php"><div id="button5"></div></a>
<a href="deleteorupdatesec.php"><div id="button6"></div></a>
<a href="addclass.php"><div id="button7"></div></a>
<a href="deleteorupdatecls.php"><div id="button8"></div></a>
<a href="addsheet.php"><div id="button9"></div></a>
<a href="deleteorupdateattend.php"><div id="button10"></div></a>
<a href="addyear.php"><div id="button11"></div></a>

<a href="deleteorupdateactive.php"><div id="button12"></div></a>
<a href="1"><div id="button14"></div></a>

<a href="deleteorupdateyear.php"><div id="button37"></div></a>

<a href="addterm.php"><div id="button38"></div></a>

<a href="deleteorupdateterm.php"><div id="button39"></div></a>

<a href="ins_type.php"><div id="button40"></div></a>

<a href="deleteorupdatetype.php"><div id="button41"></div></a>

<a href="ins_attend.php"><div id="button42"></div></a>

<a href="deleteorupdateattend.php"><div id="button43"></div></a>


<a href="addpictactv.php"><div id="button44"></div></a>

<a href="deleteorupdatepictactv.php"><div id="button45"></div></a>

<a href="logout.php"><div id="button46"></div></a>

<a href="addvideo.php"><div id="button13"></div></a>
<a href="deleteorupdatevideo.php"><div id="button15"></div></a>
<a href="addgood.php"><div id="button16"></div></a>
<a href="deleteorupdategood.php"><div id="button17"></div></a>
<a href="addstudents.php"><div id="button18"></div></a>

<a href="deleteorupdatestudent.php"><div id="button19"></div></a>

<a href="addmaterial.php"><div id="button20"></div></a>

<a href="deleteorupdatemat.php"><div id="button21"></div></a>

<a href="addsection.php"><div id="button22"></div></a>

<a href="inquiriesandanswers2.php"><div id="button23"></div></a>

<a href="inquiriesandanswers.php"><div id="button24"></div></a>





</div>
<div id="fffter2"></div>
');
}else{

echo('
<script type="text/javascript">

window.location ="login.php";
</script>
');

}
echo('

</body>
</html>

');




?>