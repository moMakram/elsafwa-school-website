<?php

echo('

  <div id="header">
  
  <div style="margin-left:1125px; margin-top:182px; border-radius:7px; position:absolute; border:2px groove #060; display: inline-block; text-align: center; width: 200px;"><noscript><div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; text-align: center; background-color: rgb(233, 247, 251);"><a href="http://localtimes.info/Africa/Egypt/Alexandria/" style="text-decoration: none; font-size: 13px; color: rgb(0, 0, 0);"><img src="http://localtimes.info/images/countries/eg.png"="" border=0="" style="border:0;margin:0;padding:0"=""> Alexandria</a></div></noscript><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Africa&country=Egypt&city=Alexandria&cp1_Hex=000000&cp2_Hex=e9f7fb&cp3_Hex=000000&fwdt=200&ham=0&hbg=0&hfg=0&sid=1&mon=1&wek=0&wkf=0&sep=0&widget_number=1000"></script></div>

     

      <a href="index.html"><img src="images/logo.png" class="animated bounceIn" style="margin-top:20px; margin-left:25px; position:absolute;" /></a>
      <div id="line">
      <div id="search">
        <form name="search" action="">
          <input name="search" type="text" id="search"  value="        بحث " placeholder="        بحث ...." onfocus="this.value=("   ");" style="width:178px; height:33px; color:#333; '); echo" font-family:'SC_KHALID';  "; echo('  direction:rtl; margin-left:0px; margin-top:0px;border:none; " />
        </form>
        <img src="images/1390541673_icon-ios7-search.png" style="margin-left:180px; margin-top:5px; position:absolute;" /> </div>
      <div id="latest_news"></div>
	  
         <marquee onmouseover="this.stop();" onmouseout="this.start();" dir="ltr"  style="margin-left:243px; margin-top:15px; width:780px; height:px; color:#FFF; '); echo" font-family:'SC_KHALID'; "; echo(' ">
      ');
	  $sel = mysql_query("select * from news order by ordere");
			  
			while($row = mysql_fetch_array($sel)){
			 echo $row['descr']; 
			echo('
          <img src="images/icon_marquee.png" width="30" height="20" margin-top:-23px; />
		  '); } echo('
        </marquee>
		
      </div>
      <div id="line1"></div>
      <div id="line2"></div>
      <div id="line_menu"></div>


');

?>