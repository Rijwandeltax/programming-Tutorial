<!DOCTYPE >
<html>
  <head>
    <title>programingtutorial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/bootstrap.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
	<link href="css/w3.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){   
   $("a").click(function(){
   var t=$(this).attr("class");  
   $("#"+t).fadeIn(1000);
   if(t=="c"){
   $("#cpp").hide();
   $("#java").hide();
    $("#html").hide();
	$("#php").hide();
	$("#das").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
   }
   else if(t=="cpp"){
    $("#c").hide();
   $("#java").hide();
    $("#html").hide();
	$("#php").hide();
	$("#das").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
   }
   else if(t=="java"){
  $("#cpp").hide();
   $("#c").hide();
    $("#html").hide();
	$("#php").hide();
	$("#das").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
   } 
   else if(t=="html"){
   $("#cpp").hide();
   $("#java").hide();
    $("#c").hide();
	$("#php").hide();
	$("#das").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
   }
    else if(t=="php"){
    $("#cpp").hide();
   $("#java").hide();
    $("#html").hide();
	$("#c").hide();
	$("#das").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
   }
    else if(t=="dsa"){
     $("#cpp").hide();
   $("#java").hide();
    $("#html").hide();
	$("#php").hide();
	$("#c").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
   }
   else if(t=="delete"){
    $("#cpp").hide();
   $("#java").hide();
    $("#html").hide();
	$("#php").hide();
	$("#das").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#c").hide();
	}
   });   
});
</script>
	<script src="js/jquery.min.js"></script>
           <script type="text/javascript">
         $(document).ready(function(){
	      $(".asd").click(function(){
		var v=$(this).attr("id");
		 var m =parseInt(v); 
		$.post(
		"alch.php",
		  {code:v},
		function(data){
	     document.getElementById("s").innerHTML+=data;
		// $("#msg").html(data);
		
              $("button").attr("id",m+3);
                });
              });
         });
</script>	
	
	
	

<style>
#c,#cpp,#java,#html,#php,#dsa,#new,#mobile,#delete{
display:none;
}
</style>
    
  </head>
  
  
  
  <body>
  
  <?php
if(!isset($_COOKIE["user"])){
header("location:404.asp");
}

else{
?>
  
  
  
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="in.php">Edutainment</a></h1>
	              </div>
	           </div>
			   <div class="col-md-5">	        </div>
			    <div class="col-md-2">
	             <h4 style="color:#FFFFFF"><a href="logout.php">Logout</a></h4> 
	        </div>
	           
           </div>
	           <div class="col-md-2">	        </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  <div class="w3-card-4">
		  	<div class="sidebar content-box">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"> Home</a></li>
                    <li><a href="#" class="c">C</a></li>
					<li><a href="#" class="cpp"> Cpp</a></li>
					<li><a href="#" class="java"> JAVA</a></li>
					<li><a href="#" class="html">HTML</a></li>
					
			        <li><a href="#" class="php">PHP</a></li>
					<li><a href="#" class="dsa"> DSA</a></li>
					<li><a href="#" class="book"> Books</a></li>
                    <li><a href="#" class="query">Query</a></li>
                    <li><a href="#" class="mobile"> Mobile</a></li>
					<li><a href="#" class="delete">Delete Last 10</a></li>
		  </ul></div></div></div>
		  
		  
		  <div class="col-md-8">
		  
		  
		  <div id="c">
		  <div class="w3-card-2" style="height:690px">
					<form method="post" enctype="multipart/form-data" action="cset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Type</label></div>
					<div class="col-sm-7">
					<select class="form-control" name="tname">
					<option value="introduction">introduction</option>
					<option value="flow_control">flow_control</option>
					<option value="function">function</option>
					<option value="array">array</option>
					<option value="pointer">pointer</option>
					<option value="structure_file">structure_file</option>
					
					</select></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="chapter name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About This Chapter</label></div>
					<div class="col-sm-7">
					<textarea name="introd" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Pic</label></div>
					<div class="col-sm-7">
					<input type="file" name="photo" class="form-control" ></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Discription in points</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Example</label></div>
					<div class="col-sm-7">
					<textarea name="example" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="cpp">
		           <div class="w3-card-2" style="height:700px">
					<form method="post" enctype="multipart/form-data" action="cppset.php" style="padding-top:30px">
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Type</label></div>
					<div class="col-sm-7">
					<select class="form-control" name="tname">
					<option value="FLOWCONTROL">FLOWCONTROL</option>
					<option value="FUNCTIONS">FUNCTIONS</option>
					<option value="STRUCTURES">STRUCTURES</option>
					<option value="ARRAYSSTRING">ARRAYSSTRING</option>
					<option value="OBJECTCLASS">OBJECTCLASS</option>
					<option value="INHERITANCE">INHERITANCE</option>POINTERS
					<option value="POINTERS">POINTERS</option>
					
					</select></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="chapter name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About This Chapter</label></div>
					<div class="col-sm-7">
					<textarea name="introd" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Pic</label></div>
					<div class="col-sm-7">
					<input type="file" name="photo" class="form-control" ></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Discription in points</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Example</label></div>
					<div class="col-sm-7">
					<textarea name="example" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
										
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="java">
		  <div class="w3-card-2" style="height:700px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Type</label></div>
					<div class="col-sm-7">
					<select class="form-control" name="tname">
					<option value="INTRODUCTION">INTRODUCTION</option>
					<option value="FLOWCONTROL">FLOWCONTROL</option>
					<option value="JAVAOOP">JAVAOOP</option>
					<option value="OTHER">OTHER</option>
					</select></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="chapter name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About This Chapter</label></div>
					<div class="col-sm-7">
					<textarea name="introd" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Pic</label></div>
					<div class="col-sm-7">
					<input type="file" name="photo" class="form-control" ></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Discription in points</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Example</label></div>
					<div class="col-sm-7">
					<textarea name="example" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="html">
		            <div class="w3-card-2" style="height:300px">
					<form method="post" enctype="multipart/form-data" action="htmlset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Type</label></div>
					<div class="col-sm-7">
					<select class="form-control" name="tname">
					<option value="introduction">introduction</option>
					<option value="flow_control">flow_control</option>
					<option value="function">function</option>
					<option value="array">array</option>
					<option value="pointer">pointer</option>
					<option value="structure_file">structure_file</option>
					
					</select></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="chapter name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About This Chapter</label></div>
					<div class="col-sm-7">
					<textarea name="introd" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Pic</label></div>
					<div class="col-sm-7">
					<input type="file" name="photo" class="form-control" ></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Discription in points</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Example</label></div>
					<div class="col-sm-7">
					<textarea name="example" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="php">
		  <div class="w3-card-2" style="height:300px">
					<form method="post" enctype="multipart/form-data" action="phpset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Type</label></div>
					<div class="col-sm-7">
					<select class="form-control" name="tname">
					<option value="introduction">introduction</option>
					<option value="flow_control">flow_control</option>
					<option value="function">function</option>
					<option value="array">array</option>
					<option value="pointer">pointer</option>
					<option value="structure_file">structure_file</option>
					
					</select></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="chapter name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About This Chapter</label></div>
					<div class="col-sm-7">
					<textarea name="introd" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Pic</label></div>
					<div class="col-sm-7">
					<input type="file" name="photo" class="form-control" ></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Discription in points</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Example</label></div>
					<div class="col-sm-7">
					<textarea name="example" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="dsa">
		             <div class="w3-card-2" style="height:300px">
					<form method="post" enctype="multipart/form-data" action="dsaset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Type</label></div>
					<div class="col-sm-7">
					<select class="form-control" name="tname">
					<option value="introduction">introduction</option>
					<option value="flow_control">flow_control</option>
					<option value="function">function</option>
					<option value="array">array</option>
					<option value="pointer">pointer</option>
					<option value="structure_file">structure_file</option>
					
					</select></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Chapter Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="chapter name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About This Chapter</label></div>
					<div class="col-sm-7">
					<textarea name="introd" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Pic</label></div>
					<div class="col-sm-7">
					<input type="file" name="photo" class="form-control" ></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Discription in points</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Example</label></div>
					<div class="col-sm-7">
					<textarea name="example" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>





					
					
					
										
					<div id="delete" class="w3-card-4">
					
					<table class="w3-table table-responsive" style="background-color:#CCCCCC">
					<tr>
					<th>Type Containt</th>
					<th>Containt</th>
					<th>Delete</th>
					</tr>
					
					<?php
					include("pro.php");
	               $x=1;
	        	$rs=mysql_query("select * from tutorial where flag=1");
		         while($r=mysql_fetch_array($rs)){
		         $x=$x+1;
		          }
		         $x=$x-1;
		         $j=$x-3;
				 $num=3;
				
					
					$rs=mysql_query("select * from tutorial where flag=1 order by sn DESC");
					while($r=mysql_fetch_array($rs)){
					if($r[0]<=$x && $r[0]>$j){
                      ?>
					  <tr>
					  <td><?=$r[1]?></td>
					  <td><?=$r[2]?></td>
					  <td ><a href="dele.php?id=<?=$r[0]?>&event_id=<?=$r[1]?>&con_id=<?=$r[2]?>" class="w3-hover-blue-grey">Delete</a></td>
					  </tr>
					  <?php
					 }
					 }
					  ?>
					  </table> <div id="s"></div>
					  <button class="w3-btn asd" id="<?=$num?>" style="float:right; margin-right:70px; margin-bottom:100px;">Load more</button></div>
</div>
    	</div></div>
		  
	<?php
	}
	?>	  
		  
		  
		  
		  
		  
		  </body></html>