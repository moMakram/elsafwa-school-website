<?php
include ("connec.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include ("head.php");
?>
         <!--slider-->
         
         <link rel="stylesheet" type="text/css" href="css/style_ss.css" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/style_ie.css" />
		<![endif]-->
		<!-- jQuery -->
		<script type="text/javascript" src="javascript/jquery2.js"></script>
		<!-- jmpress plugin -->
		<script type="text/javascript" src="javascript/jmpress.min.js"></script>
		<!-- jmslideshow plugin : extends the jmpress plugin -->
		<script type="text/javascript" src="javascript/jquery.jmslideshow.js"></script>
		<script type="text/javascript" src="javascript/modernizr.custom.48780.js"></script>
        
                 <link href="css/animate.css" rel="stylesheet" type="text/css" />
				 
				 
				 	
		

		

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="body">
 
 
      <?php
	  include ("header.php");
	  ?>
	  
       <div id="menu">
        <a href="index.php"><div id="home_button1"></div></a>
       <a href="about_us.php"> <div id="aboutus_button"></div></a>
        <a href="contact_us.php"><div id="contact_button"></div></a>
        <a href="time_table.php"><div id="timetable_button"></div></a>
        <a href="good.php"><div id="good_button"></div></a>
        <a href="activities.php"><div id="activity_button"></div></a>
      </div>
	  

  </div>
  <div style="position:absolute; margin-left:139px; margin-top:150px;">
  <section id="jms-slideshow" class="jms-slideshow">
  
  
  
             <?php
	  $sel = mysql_query("select * from pic where place='الصفحه الرئيسية' order by ordere");
			  $x=1500;
			  $y=0.4;
			  $z=30;
			  $w=100;
			  $e=0;
			  $r=1000;
			  
			while($row = mysql_fetch_array($sel)){
			
			 ?>
			
				<div class="step" data-color="color-1" data-y="<?php echo $x; ?>" data-z="<?php echo $x; ?>" data-scale="<?php echo $y; ?>" data-rotate-y="<?php echo $e; ?>" data-rotate="<?php echo $w; ?>" data-rotate-x="<?php echo $z; ?>" >
					<!--<div class="jms-content">
						<h3><?php echo $row['descr']; ?> </h3>
						<p></p>
						
					</div>-->
					<div class="jms-content">
					<center>
				<img src="photo/<?php echo $row['file']; ?>" width=1357px; height=390px;   /></center>
			
				
				</div>
				</div>
				
				<?php
				$x+=1000;
				$r+=2000;
				$y=0;
				$z+=100;
				$e+=45;
				}
				?>
				
				
			
				
				
				
				
				<!--
				<div class="step" data-color="color-2" data-y="500" data-scale="0.4" data-rotate-x="30">
					<div class="jms-content">
						<h3>Holy cannoli!</h3>
						<p>But as the riper should by time decease, his tender heir might bear his memory</p>
						
					</div>
					<img src="images/images_slider/2.png" />
				</div>
				<div class="step" data-color="color-3" data-x="2000" data-z="3000" data-rotate="170">
					<div class="jms-content">
						<h3>No time to waste</h3>
						<p>Within thine own bud buriest thy content and, tender churl, makest waste in niggarding</p>
					</div>
					<img src="images/images_slider/3.png" />
				</div>
				<div class="step" data-color="color-4" data-x="3000">
					<div class="jms-content">
						<h3>Supercool!</h3>
						<p>Making a famine where abundance lies, thyself thy foe, to thy sweet self too cruel</p>
						
					</div>
					<img src="images/images_slider/4.png" />
				</div>
				<div class="step" data-color="color-5" data-x="4500" data-z="1000" data-rotate-y="45">
					<div class="jms-content">
						<h3>Did you know that...</h3>
						<p>Thou that art now the world's fresh ornament and only herald to the gaudy spring</p>
						
					</div>
					<img src="images/images_slider/5.png" />
				</div>-->
			</section>

		<script type="text/javascript">
			$(function() {
			
				$( '#jms-slideshow' ).jmslideshow();
				
			});
		</script>
  </div>
 <div id="write_about"></div>

 <?php
include ("fotter.php");
?>
 
		</div>

	




</body>
</html>
