<?php
if(empty($_POST["mname"]) || empty($_POST["about"])){
header("location:index.php?err=1");
}
else{
include("pro.php");
$chapter=$_POST["mname"];
$about=$_POST["about"];
$x=1;
$rs=mysql_query("select * from tutorial where flag=1");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	if(mysql_query("insert into tutorial values($x,'java','$chapter','$about',1)")){
		header("location:index.php?succ=1");
		}
		else{
		echo "rijwan";
	}

}