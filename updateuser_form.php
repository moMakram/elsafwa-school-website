<?php

session_start();
include("connec.php");



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه صلاحيات المستخدم</title>
<link href="css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php
if (isset($_SESSION['admin_session6']) ) {
?>


<div id="header"></div>
<div id="menu">
<a href="admincontrol.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>

<form method="POST">
<center>
<font size="5">&nbsp; choose username </font>
<select name="username" style="width:200px; height:30px;">
<option> ------ </option>
<?php
$result = mysql_query("select * from prev order by id");
while($row = mysql_fetch_array($result)){
echo('
<option> '); echo $row['username']; echo(' </option>
');
}
?>


</select>
</center>
<input name="submit" type="submit" value="ok"  style="width:100px; height:30px;  position:absolute; margin-left:780px; margin-top:-30px;" />


</form>



<br/><br/><br/>

	<?php

if(isset($_POST['submit'])){

$username = $_POST['username'];

?>


	





<form method="POST" action="update_userprev.php">

<center>

  <table width="680" height="100" border="0">
  

    <tr style="background:#999; height:35px;">
	  <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">اسم الصفحه </td>
      
	  <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">الخصوصيه</td>
	  
    </tr> 
	<?php
	
		$result = mysql_query("select * from prev where username='$username' ");
	
	$row= mysql_fetch_array($result);
	?>
	
	<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">ادخال اخر الاخبار </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="lastnews" style="width:100px; height:30px;">

     <?php
	 if($row['lastnews']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على الاخبار </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatenews" style="width:100px; height:30px;">

     <?php
	 if($row['updatenews']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">ادخال الصور </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addphoto" style="width:100px; height:30px;">

     <?php
	 if($row['addphoto']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على الصور </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatephoto" style="width:100px; height:30px;">

     <?php
	 if($row['updatephoto']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">ااستفسارات الزائرين </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="quesvisit" style="width:100px; height:30px;">

     <?php
	 if($row['quesvisit']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافة نشاط </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addactive" style="width:100px; height:30px;">

     <?php
	 if($row['addactive']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على النشاط </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updateactive" style="width:100px; height:30px;">

     <?php
	 if($row['updateactive']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه الفيديو </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addvideo" style="width:100px; height:30px;">

     <?php
	 if($row['addvideo']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على الفيديو </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatevideo" style="width:100px; height:30px;">

     <?php
	 if($row['updatevideo']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه الجوده </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addgood" style="width:100px; height:30px;">

     <?php
	 if($row['addgood']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
			<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على الجوده </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updategood" style="width:100px; height:30px;">

     <?php
	 if($row['updategood']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
			<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه طالب </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addstudent" style="width:100px; height:30px;">

     <?php
	 if($row['addstudent']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
			<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على طالب </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatestudent" style="width:100px; height:30px;">

     <?php
	 if($row['updatestudent']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
				<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">ادخال المواد </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addmaterial" style="width:100px; height:30px;">

     <?php
	 if($row['addmaterial']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
				<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على المواد </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatematerial" style="width:100px; height:30px;">

     <?php
	 if($row['updatematerial']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
				<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">ادخال قسم </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addsection" style="width:100px; height:30px;">

     <?php
	 if($row['addsection']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
				<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على القسم</td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatesection" style="width:100px; height:30px;">

     <?php
	 if($row['updatesection']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
	
	
				<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اسئله الطلبة </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="inquery" style="width:100px; height:30px;">

     <?php
	 if($row['inquery']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
				<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه فصل </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addclass" style="width:100px; height:30px;">

     <?php
	 if($row['addclass']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
				<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على الفصل </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updateclass" style="width:100px; height:30px;">

     <?php
	 if($row['updateclass']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
				<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه شيت </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addsheet" style="width:100px; height:30px;">

     <?php
	 if($row['addsheet']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
				<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">حذف او تعديل الشيت </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatesheet" style="width:100px; height:30px;">

     <?php
	 if($row['updatesheet']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	

			<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه سنه دراسيه </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addyear" style="width:100px; height:30px;">

     <?php
	 if($row['addyear']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
		
		
		
					<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على سنه دراسيه </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updateyear" style="width:100px; height:30px;">

     <?php
	 if($row['updateyear']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
		
	
	
	
					<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه ترم </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addterm" style="width:100px; height:30px;">

     <?php
	 if($row['addterm']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
	
					<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على الترم </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updateterm" style="width:100px; height:30px;">

     <?php
	 if($row['updateterm']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
		
		
	
	
					<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">ادخال مواد الترم </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addtype" style="width:100px; height:30px;">

     <?php
	 if($row['addtype']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
					<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على مواد الترم </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatetype" style="width:100px; height:30px;">

     <?php
	 if($row['updatetype']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
					<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">ادخال الغياب </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addattend" style="width:100px; height:30px;">

     <?php
	 if($row['addattend']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
					<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">ارشيف الغياب </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updateattend" style="width:100px; height:30px;">

     <?php
	 if($row['updateattend']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
					<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافة صور الانشطه </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="pictactive" style="width:100px; height:30px;">

     <?php
	 if($row['pictactive']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
					<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على صور الانشطة </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatepictactive" style="width:100px; height:30px;">

     <?php
	 if($row['updatepictactive']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
	
	
</table>
<input name="submit" type="submit" value="ok"  style="width:100px; height:30px;  position:absolute; margin-left:-80px; margin-top:30px;" />


</center>

<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
 <br/><br/>
</form>
	

<?php
}
?>
	
 <br/><br/>
 
 
</div>
<div id="fotter4"></div>
<?php
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
