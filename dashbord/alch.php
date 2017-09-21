<?php
   if($_REQUEST["code"]){
	   $v=$_REQUEST["code"];
	   $t=(int)$v;
	   include("pro.php");
	    $x=1;
		$rs=mysql_query("select * from tutorial where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
	   ?>
	   <table class="w3-table table-responsive" style="background-color:#CCCCCC">
	   <?php
	   $rs=mysql_query("select * from tutorial order by sn DESC");
	   while($r=mysql_fetch_array($rs)){
	   if($r[0]<=$x-$t && $r[0]>$x-$t-3){
                      ?>
					  <tr>
					  <td><?=$r[1]?></td>
					  <td style="margin-left:30px"><?=$r[2]?></td>
					  <td><a href="dele.php?id=<?=$r[0]?>&event_id=<?=$r[1]?>&con_id=<?=$r[2]?>" class="w3-hover-blue-grey">Delete</a></td>
					  </tr>
					 <?php
	
	  }
	}
	?>
	</table>
	<?php
	
	
}
?>