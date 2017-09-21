<!DOCTYPE html>
<html>
<head>
<title>PROGRAMINGTUTORIAL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/w3.css" rel="stylesheet">
<link href="css/webb.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/riju.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
<style>
.indicator_show {
    width: 0;
    height: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #222;
    position: relative;
    top: 8px;
    float: right;
    margin-right: 6%;
}
.indicator_hide {
    width: 0;
    height: 0;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
    border-left: 6px solid #222;
    position: relative;
    top: 8px;
    float: right;
    margin-right: 6%;
}
#w3til{
background-color:#2C394B!important;
height:90px;
}

.jb-accordion-title {
    position: relative;
    background: #f6f8fa;
    color: #000;
    padding: 10px 20px 10px;
    font-size: 16px;
}
.jb-accordion-title:hover{
	background:#003366;
	color:#fff;
}
.jb-accordion-title button {
    background: #fff;
    position: absolute;
    right: 15px;
    border: none;
    color:#c32143;
    font-size: 17px;
    padding: 0px 7px;
    outline: none;
    border-radius: 20px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    -o-border-radius: 20px;
}
.jb-accordion-content {
    padding:0 10px;
}
.jb-accordion-content p{
	font-size: 0.85em;
    line-height: 1.5em;
    margin-bottom: 0;
}
.jb-accordion-wrapper {
    background: #FFFFFF;
}
@media only screen and (orientation: landscape) {
.container-fluid {
    padding-right: 15px!important ;
     padding-left: 15px!important;
    margin-right: auto!important;
    margin-left: auto!important;
	}
}
@media only screen and (orientation: portrait){
.container-fluid {
    padding-right: 1px!important;
     padding-left: 1px!important;
    margin-right: auto!important;
    margin-left: auto!important;
	}
}
#intro,#intr,#int,#in,#i,#io{
display:none;
}
</style>

<script type="text/javascript">
 $(document).ready(function(){   
   $("a").click(function(){
   var t=$(this).attr("class");  
   $("#"+t).slideToggle(400);
   
   });
   });
   

</script>

</head>
<body style="background-color:#CCCCCC; font-size:18px; line-height:1.5; color:#596063;">

<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;" id="mySidenav">
  <a href="javascript:void(0)" 
  onclick="w3_close()"
  class="w3-closenav w3-large">Close &times;</a>
 <a href="c.php" style="background:#97a0c3; font-size:24px; color:#11170d">C</a>
 <a href="c++.php" style="font-size:20px">C++</a></h3>
  <a href="java.php" style="font-size:20px">java</a>
  <a href="php.php" style="font-size:20px">php</a>
  <a href="html.php" style="font-size:20px">html</a>
</nav>

<div id="main">
<header class="w3-container w3-teal w3-top" id="w3til">
  <span class="w3-opennav w3-xlarge" onClick="w3_open()" id="openNav">&#9776;</span>
  <h1>PROGRAMINGCODING</h1>
</header>


<div class="container-fluid" style="padding-top:120px; margin-bottom:30px; padding-left:20px; padding-right:20px;">

<div class="banner-grid h3 w3-card-2">
      <h3>Learn C Programming</h3></div>
<div class="w3-card-2" style="padding:20px 20px 20px 20px; background-color:#FFFFFF; margin-bottom:40px;">

	  <p>C programming is a powerful general-purpose language. It is fast, portable and available in all platforms.

If you are new to programming, C is a good choice to start your programming journey.

This is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.</p>
</div>

<div class="row">
<div class="col-sm-3">
<div class="banner-grid h3 w3-card-2">
      <h3>TOPIC</h3></div>
	  
	  <div class="w3-card-2" style="background-color:#FFFFFF; padding:10px 10px 10px 10px">
	  
	  <div class="accordation">
	   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">Introduction<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-1-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-1-" class="jb-accordion-content collapse" style="height: auto;">
				
				<?php
	   $x=0;
      include("pro.php");
	  $rs=mysql_query("select * from clang where sub='c'");
	  while($r=mysql_fetch_array($rs)){
	  $x=$x+1;
	  if($r[4]=="introduction"){
	  ?>
				<p><a href="c_fullstory.php?id=<?=$r[4]?>&id1=<?=$r[2]?>" class="ad" style="color:#3f78cb">
  <?=$x?>:  <!--Write chapter name. --><?=$r[2]?></a></p>
  <?php
  }
  }?>
				
				
				
				</div>
				<p><!-- /.collapse --></p>
			</div>
	  </div>
	  
	  
	  
	  
	  
	 
	  <div class="accordation">
	   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">Flow Control <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-2-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-2-" class="jb-accordion-content collapse" style="height: auto;">
				
				<?php
	   $x=0;
      include("pro.php");
	  $rs=mysql_query("select * from clang where sub='c'");
	  while($r=mysql_fetch_array($rs)){
	  $x=$x+1;
	  if($r[4]=="flow_control"){
	  ?>
				<p><a href="c_fullstory.php?id=<?=$r[4]?>&id1=<?=$r[2]?>" class="ad" style="color:#3f78cb">
  <?=$x?>:  <!--Write chapter name. --><?=$r[2]?></a></p>
  <?php
  }
  }?>      </div>
				<p><!-- /.collapse --></p>
			</div>
	 </div>
	  
	  <div class="accordation">
	   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">Function <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-3-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-3-" class="jb-accordion-content collapse" style="height: auto;">
				
				<?php
	   $x=0;
      include("pro.php");
	  $rs=mysql_query("select * from clang where sub='c'");
	  while($r=mysql_fetch_array($rs)){
	  $x=$x+1;
	  if($r[4]=="function"){
	  ?>
				<p><a href="c_fullstory.php?id=<?=$r[4]?>&id1=<?=$r[2]?>" class="ad" style="color:#3f78cb">
  <?=$x?>:  <!--Write chapter name. --><?=$r[2]?></a></p>
  <?php
  }
  }?>      </div>
				<p><!-- /.collapse --></p>
			</div>
	 </div>
	   
  <div class="accordation">
	   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">Arrays <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-4-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-4-" class="jb-accordion-content collapse" style="height: auto;">
				
				<?php
	   $x=0;
      include("pro.php");
	  $rs=mysql_query("select * from clang where sub='c'");
	  while($r=mysql_fetch_array($rs)){
	  $x=$x+1;
	  if($r[4]=="array"){
	  ?>
				<p><a href="c_fullstory.php?id=<?=$r[4]?>&id1=<?=$r[2]?>" class="ad" style="color:#3f78cb">
  <?=$x?>:  <!--Write chapter name. --><?=$r[2]?></a></p>
  <?php
  }
  }?>      </div>
				<p><!-- /.collapse --></p>
			</div>
	 </div>

<div class="accordation">
	   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">C Pointer <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-5-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-5-" class="jb-accordion-content collapse" style="height: auto;">
				
				<?php
	   $x=0;
      include("pro.php");
	  $rs=mysql_query("select * from clang where sub='c'");
	  while($r=mysql_fetch_array($rs)){
	  $x=$x+1;
	  if($r[4]=="pointer"){
	  ?>
				<p><a href="c_fullstory.php?id=<?=$r[4]?>&id1=<?=$r[2]?>" class="ad" style="color:#3f78cb">
  <?=$x?>:  <!--Write chapter name. --><?=$r[2]?></a></p>
  <?php
  }
  }?>      </div>
				<p><!-- /.collapse --></p>
			</div>
	 </div>

<div class="accordation">
	   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">Structure & File <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-6-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-6-" class="jb-accordion-content collapse" style="height: auto;">
				
				<?php
	   $x=0;
      include("pro.php");
	  $rs=mysql_query("select * from clang where sub='c'");
	  while($r=mysql_fetch_array($rs)){
	  $x=$x+1;
	  if($r[4]=="structure_file"){
	  ?>
				<p><a href="c_fullstory.php?id=<?=$r[4]?>&id1=<?=$r[2]?>" class="ad" style="color:#3f78cb">
  <?=$x?>:  <!--Write chapter name. --><?=$r[2]?></a></p>
  <?php
  }
  }?>      </div>
				<p><!-- /.collapse --></p>
			</div>
	 </div>
  

  
   
  
  </div>
  </div>

<div class="col-sm-1"></div>
<div class="col-sm-9">
<div class="banner-grid h3 w3-card-2">
      <h3>WHAT IS C LANGUAGE</h3></div>
	  <div class="w3-card-2" style="background-color:#FFFFFF; padding:20px 20px 20px 20px">
	  <p> C is the basic langauge of programing coading.</p>
	  </div><br>
	  
	  <div class="banner-grid h3 w3-card-2">
      <h3>C LANGUAGE COMPLIER</h3></div>
	  <div class="w3-card-2" style="background-color:#FFFFFF; padding:20px 20px 20px 20px">
	  <p> C is the basic langauge of programing coading.</p>
	  </div><br>
	  
	  <div class="banner-grid h3 w3-card-2">
      <h3>Why you need C langauge</h3></div>
	  <div class="w3-card-2" style="background-color:#FFFFFF; padding:20px 20px 20px 20px">
	  <p> C is the basic langauge of programing coading.</p>
	  </div><br>

</div></div></div></div>



<footer class="footer-section">
	<div class="container">
	<div class="row"><div class="col-sm-4">
	<a href="index.php">
	<h4 style="color:#FFFFFF">PROGRAMINGTUTORIAL</h4></a>
	<hr style="border-color:#36384c"/>
	<p style="color:#898989; font-size:15px; font-family:'Lato', sans-serif; line-height: 1.8em;">EDUENTERTAINMENT is a search engine which is helpful to everyone who want to know about Movie review, TV review, Games review, Book review and also helpful for students that aims to gets information about Career and various Exam.</p>
	</div>
	<div class="col-sm-4">
	<h4 style="color:#FFFFFF">Quick Links</h4>
	<hr style="border-color:#36384c"/>
	<ul style="padding-left:11px">
<li style="color: #fff; margin: 0 0 0.5em;list-style: none;"><a href="terms.php" style="color:#898989; font-size:16px;">Terms & Condition</a></li>
            <li style="color: #fff; margin: 0 0 0.2em;list-style:none;"><a  href="policy.php" style="color:#898989; font-size:16px;">Policy</a></li>
			<li style="color: #fff; margin: 0 0 0.2em;list-style:none;"><a  href="about.php" style="color:#898989; font-size:16px;">About</a></li>
          </ul>
	
	</div>
	
	
	
	
	<div class="col-sm-4">
	<h4 style="color:#FFFFFF;">We are social, You can follow us</h4>
	<hr style="border-color:#36384c; margin-bottom:50px"/>
	
	<ul class="social slide" style="margin-top:15px">
	            <li><a href="https://www.facebook.com/eduentertainment.in" class="facebook" title="Go to Our Facebook Page"></a></li>
	            <li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
	            <li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
	            <li><a href="#" class="instagram" title="Go to Our Instagram Account"></a></li>
	            <li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
	        </ul>

	</div></div>
	<span class="copyright" style="text-align:center">programimgtutorial - All rights reserved ©2017</span>
	</div>
	</footer>


</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidenav").style.width = "25%";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidenav").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>
