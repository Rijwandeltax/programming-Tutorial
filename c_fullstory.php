<!DOCTYPE html>
<html><head>
<title>PROGRAMINGTUTORIAL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/w3.css" rel="stylesheet">
<link href="css/webb.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/riju.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
 
<style>
#sidebar ,#content{ 
    float: none;
    display: block;
    margin-bottom: 15px;
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
  
#sidebar {
    float: left;
    width: 27%;
}

#content {
    float: right;
    width: 70%;
}
.container-fluid {
    padding-right: 15px !important;
     padding-left: 15px !important;
    margin-right: auto;
    margin-left: auto;
	}

}
.cont{
padding:20px 20px 20px 20px!important;
}
#intro,#intr{
display:none;
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
.container-fluid {
    padding-right: 1px;
     padding-left: 1px;
    margin-right: auto;
    margin-left: auto;
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

<body style="background-color:#CCCCCC">

<?php
if($_REQUEST["id"]){
$v=$_REQUEST["id"];
$p=$_REQUEST["id1"];
include("pro.php");
}
?>


<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;" id="mySidenav">
  <a href="javascript:void(0)" 
  onclick="w3_close()"
  class="w3-closenav w3-large">Close &times;</a>
 <a href="c.php" style="background:#97a0c3; font-size:24px; color:#11170d" >C</a>
 <a href="c++.php" style="font-size:20px" >C++</a></h3>
  <a href="java.php" style="font-size:20px">java</a>
  <a href="php.php" style="font-size:20px">php</a>
  <a href="html.php" style="font-size:20px">html</a>
</nav>

<div id="main">
<header class="w3-container w3-teal w3-top" id="w3til">
  <span class="w3-opennav w3-xlarge" onClick="w3_open()" id="openNav">&#9776;</span>
  <h1>Programingtutorial</h1>
</header>

<div class="container-fluid" style="padding-top:120px; margin-bottom:30px">
<div id="content">
<?php
$rs=mysql_query("select * from clang where unit='$v' AND chapter='$p'");
if($r=mysql_fetch_array($rs)){
?>
<div class="banner-grid h3">
      <h3><?=$r[2]?></h3></div>
	  <div class="w3-card-2 cont" style="background-color:#FFFFFF; ">
	  <div style="background:#f6f8fa; padding:10px 10px 10px 10px;">
	  <p><?=$r[5]?></p></div>
	  
	  <br>
	
	  
	   <img src="images/<?=$r[0]?><?=$r[4]?>.jpg" class="img-responsive" width="80%" height="80%"><br>
	   <h3>Important Points:</h3>
	   <hr style="border-top-color:#00CC66; padding-right:79%; border-width:1.5px; margin-top:4px">
	   <p><?=$r[3]?></p><br>
	   
	   <h3>Example:</h3>
	   <hr style="border-top-color:#00CC66; padding-right:79%; border-width:1.5px; margin-top:4px">
	   <p><?=$r[7]?></p>

	  
	  
	  
	  </div>
<?php
}
?>
</div>

<div id="sidebar">
<div class="banner-grid h3">
      <h3>CHAPTER</h3></div>
	  <div class="w3-card-2" style="background-color:#FFFFFF; padding:20px 20px 20px 20px">
	  
	  
	  
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
