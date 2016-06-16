<?php
//$page_type = 'comp';
session_start();
require("header.php");
require("config.php");
$tbl_name="clg_mstr";
$sql="SELECT clg_id FROM  $tbl_name";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

$_SESSION['count']=0;
$_SESSION['flag']=0;
?>

<script type="text/javascript">
var c=0;
</script>
<section id="content">
    
		<div class="container">
					
			<h2 class="slogan">
				Compare Colleges
			</h2>	
			<h3 class="res">
			<center><form method="POST" action="abc.php">
			<li id="first"></li>
			<li id="two"></li>
			<li id="three"></li>
			<input type="submit" name="go" value="GO"/>
			</form></center>
			</h3>
			

            <?php
				


					for($i=1;$i<=$count;$i++)
					{
						$r=mysqli_fetch_array($result);
						$ida=$r['clg_id'];
						
						//include("delete.php");
						include("box.php");
					}
			?>
				
      

		        
       </div><!--/ .container-->
	 
	</section><!--/ #content-->
   


<?php
    require("footer.php");
?>