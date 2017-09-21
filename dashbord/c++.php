<?php
if(empty($_POST[""]) || empty($_POST[""])){
header("location:index.php?err=1");
}
else{
include("pro.php");
$chapter=$_POST[""];
$about=$_POST[""];
$x=1;
$rs=mysql_query("select * from program where flag=1");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	if(mysql_query("insert into program values($x,'c++','$chapter','$about',1)")){
		header("location:index.php?succ=1");
		}
		else{
		echo "rijwan";
	}

