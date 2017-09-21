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
 <a href="c.php" style="font-size:20px">C</a>
 <a href="c++.php" style="font-size:20px">C++</a></h3>
  <a href="java.php" style="background:#97a0c3; font-size:20px">java</a>
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
      <h3>Learn JAVA Programming</h3></div>
<div class="w3-card-2" style="padding:20px 20px 20px 20px; background-color:#FFFFFF; margin-bottom:40px;">

	  <p>Java is a popular general-purpose programming language and computing platform. It is fast, reliable, and secure. According to Oracle, the company that owns Java, Java runs on 3 billion devices worldwide.</p>

<p>Considering the number of Java developers, devices running Java, and companies adapting it, it's safe to say that Java will be around for many years to come.</p>

<p>This guide will provide everything you need to know about Java programming language before you learn it. More specifically, you will learn about features of Java programming, its applications, reasons to learn it, and how you can learn it the right way.</p>
</div>

<div class="row">
<div class="col-sm-3">
<div class="banner-grid h3 w3-card-2">
      <h3>TOPIC</h3></div>
	  
	  <div class="w3-card-2" style="background-color:#FFFFFF; padding:10px 10px 10px 10px">
	  
	  <div class="accordation">
	   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">INTRODUCTION<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-1-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-1-" class="jb-accordion-content collapse" style="height: auto;">
				
				<?php
	   $x=0;
      include("pro.php");
	  $rs=mysql_query("select * from javalang where sub='java'");
	  while($r=mysql_fetch_array($rs)){
	  $x=$x+1;
	  if($r[4]=="INTRODUCTION"){
	  ?>
				<p><a href="java_fullstory.php?id=<?=$r[4]?>&id1=<?=$r[2]?>" class="ad" style="color:#3f78cb">
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
				<div class="jb-accordion-title">FLOW CONTROL <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-2-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-2-" class="jb-accordion-content collapse" style="height: auto;">
				
				<?php
	   $x=0;
      include("pro.php");
	  $rs=mysql_query("select * from javalang where sub='java'");
	  while($r=mysql_fetch_array($rs)){
	  $x=$x+1;
	  if($r[4]=="FLOWCONTROL"){
	  ?>
				<p><a href="java_fullstory.php?id=<?=$r[4]?>&id1=<?=$r[2]?>" class="ad" style="color:#3f78cb">
  <?=$x?>:  <!--Write chapter name. --><?=$r[2]?></a></p>
  <?php
  }
  }?>      </div>
				<p><!-- /.collapse --></p>
			</div>
	 </div>
	  
	  <div class="accordation">
	   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">JAVA OOP<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-3-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-3-" class="jb-accordion-content collapse" style="height: auto;">
				
				<?php
	   $x=0;
      include("pro.php");
	  $rs=mysql_query("select * from javalang where sub='java'");
	  while($r=mysql_fetch_array($rs)){
	  $x=$x+1;
	  if($r[4]=="JAVAOOP"){
	  ?>
				<p><a href="java_fullstory.php?id=<?=$r[4]?>&id1=<?=$r[2]?>" class="ad" style="color:#3f78cb">
  <?=$x?>:  <!--Write chapter name. --><?=$r[2]?></a></p>
  <?php
  }
  }?>      </div>
				<p><!-- /.collapse --></p>
			</div>
	 </div>
	   
  <div class="accordation">
	   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">OTHER<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-4-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-4-" class="jb-accordion-content collapse" style="height: auto;">
				
				<?php
	   $x=0;
      include("pro.php");
	  $rs=mysql_query("select * from javalang where sub='java'");
	  while($r=mysql_fetch_array($rs)){
	  $x=$x+1;
	  if($r[4]=="OTHER"){
	  ?>
				<p><a href="java_fullstory.php?id=<?=$r[4]?>&id1=<?=$r[2]?>" class="ad" style="color:#3f78cb">
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
      <h3>What is Java Programming Language?</h3></div>
	  <div class="w3-card-2" style="background-color:#FFFFFF; padding:20px 20px 20px 20px">
	  <p style="font-size:24px; font-weight:500"> Java is platform independent:</p>
<p>Java was built with the philosophy of "write once, run anywhere" (WORA). The Java code (pure Java code and libraries) you write on one platform (operating system) will run on other platforms with no modification.</p>

<p>To run Java, an abstract machine called Java Virtual Machine (JVM) is used. The JVM executes the Java bytecode. Then, the CPU executes the JVM. Since all JVMs works exactly the same, the same code works on other operating systems as well, making Java platform-independent.
<p style="font-size:24px; font-weight:500">An object-oriented Language:</p>

<p>There are different styles of programming. Object-oriented approach is one of the popular programming styles. In object-oriented programming, a complex problem is divided into smaller sets by creating objects. This makes your code reusable, has design benefits, and makes code easier to maintain.</p>

<p>Many programming languages including Java, Python, and C++ has object-oriented features. If you are serious about programming, you should definitely learn object-oriented style of programming.</p>
<p style="font-size:24px; font-weight:500">Java is fast:</p>

<p>The earlier versions of Java were criticized for being slow. However, things are completely different now. The new JVMs are significantly faster. And, the CPU that executes JVM are also getting more and more powerful.</p>

<p>Now, Java is one of the fastest programming languages. Well optimized Java code is nearly as fast as lower level languages like C/C++, and much faster than Python, PHP etc.</p>
<p style="font-size:24px; font-weight:500">Java is secure:</p>

<p>The Java platform provides various features for security of Java applications. Some of the high-level features that Java handles are:</p>

<p>- provides secure platform for developing and running applications</p>
<p>- automatic memory management, reduces memory corruption and vulnerabilities<p>
<p>- provides secure communication by protecting the integrity and privacy of data transmitted</p>
<p style="font-size:24px; font-weight:500">Large Standard Library</p>

<p>One of the reasons why Java is widely used is because of the availability of huge standard library. The Java environment has hundreds of classes and methods under different packages to help software developers like us. For example,</p>

<p>java.lang - for advanced features of strings, arrays etc.</p>
<p>java.util - for data structures, regular expressions, date and time functions etc.</p>
<p>java.io - for file i/o, exception handling etc.</p>
	  </div><br>
	  
	  <div class="banner-grid h3 w3-card-2">
      <h3>JAVA LANGUAGE COMPLIER</h3></div>
	  <div class="w3-card-2" style="background-color:#FFFFFF; padding:20px 20px 20px 20px">
	  <p>To run Java Programming in Windows, you'll need to install two things:</p>
	  <p> JAVA SE Development Kit (JDK) and IDE to create your Java Projects.</p>

	  </div><br>
	  
	  <div class="banner-grid h3 w3-card-2">
      <h3>Your First Java Program</h3></div>
	  <div class="w3-card-2" style="background-color:#FFFFFF; padding:20px 20px 20px 20px">
	  <p> Often, a program called Hello World is used to introduce a new programming language to beginners. It is a simple program that outputs Hello, World!. In this section, you will learn to write the same program in Java using Eclipse.</p>

<p>Open IntelliJ IDEA.</p>
<p>Go to File > New > Project... > Java (on the left navigation)</p>
<p>Give the Project Name. We will call it Hello World for now and click Finish</p>
<p>Now, you need to create a new Java class.</p>
<p>Select HelloWorld's src folder in the left sidebar. When it is selected, go to File > New > Java Class and give Name to the class and click Ok. We will call it HelloWorld.</p>
<p>Copy the following code in HelloWorld.java file and save it. (Shortcut: Ctrl +S, or Cmd +S for Mac)</p>
<p style="font-size:24px; font-stretch:extra-expanded"> 
public class HelloWorld {<br>
	
    public static void main(String[] args) {<br>
        // prints "Hello, World!"<br>
        System.out.println("Hello, World!");<br>
    }<br>
}</p>
<p>Finally, hit run button. If everything goes right, you will see Hello, World! output on the screen.</p>
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
