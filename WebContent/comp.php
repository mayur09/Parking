<?php
	session_start();

	$id=$_POST['id'];
	require("config.php");

	$tbl_name="clg_mstr";
	//$sql="SELECT clg_name FROM $tbl_name WHERE id=$i";

	switch($_SESSION['count'])
	{
	
		case "0":
		$_SESSION['id1']=$id;
		$_SESSION['count']++;
		$sql1="SELECT clg_name,logo FROM $tbl_name WHERE clg_id=$_SESSION[id1]";
		$result1=mysqli_query($con,$sql1);
		if(!$result1)
  		{
  			die('Error: ' . mysqli_error($con));
  		}
		else 
	
		{
			$rows=mysqli_fetch_array($result1);	
			$name1=$rows['clg_name'];
			$logo1=$rows['logo'];
			//echo '<img src="images/Logos/<?php echo $logo1;
			echo "logo";
			echo $name1;	
		?>
			<input type="button" id="button<?php echo $_SESSION['count'] ;?>" value="Remove" onclick="rem(<?php echo $_SESSION['id1']?>,this.id)"/>
		<?php
		}	
		
		//echo $_SESSION['count'];
		break;
		
		case "1":
			$_SESSION['id2']=$id;
			$_SESSION['count']++;
			$sql2="SELECT clg_name FROM $tbl_name WHERE clg_id=$_SESSION[id2]";
			$result2=mysqli_query($con,$sql2);
			if(!$result2)
  			{
  				die('Error: ' . mysqli_error($con));
  			}
			else 
	
			{
				$rows=mysqli_fetch_array($result2);	
				$name2=$rows['clg_name'];

				echo $name2;?>
				<input type="button" id="button<?php echo $_SESSION['count'];?>" value="Remove" onclick="rem(<?php echo $_SESSION['id2']?>,this.id)"/>	
			<?php
			}


		break;

		case "2":
			$_SESSION['id3']=$id;
			$_SESSION['count']++;
			$sql3="SELECT clg_name FROM $tbl_name WHERE clg_id=$_SESSION[id3]";
			$result3=mysqli_query($con,$sql3);
			if(!$result3)
  			{
  				die('Error: ' . mysqli_error($con));
  			}
			else 
	
			{
				$rows=mysqli_fetch_array($result3);	
				$name3=$rows['clg_name'];
				echo $name3;
			?>
				<input type="button" id="button<?php echo $_SESSION['count'];?>" value="Remove" onclick="rem(<?php echo $_SESSION['id3']?>,this.id)"/>
			<?php
			}
			break;
	}
	
?>
<html>
	<head>
		<script src="js/jquery.modernizr.js"></script>

	<script type="text/javascript">
  
  		function rem(id,bid){
    
	
	$.ajax({
        
        url: "remove.php", 
        type: "POST",
    	data: {id:id,bid:bid},
    	}).done(function(msg){
    		
    		if(msg=="button1")
    				
    			$("#button1",".slogan").remove();
  				
  			else if(msg=="button2")	

  				$("#button2").remove();
  			
  			else if(msg=="button3")

  				$("#button3").remove();
    			c--;
    	});
    		
    		
    }

  </script>
</head>

	</head>
</html>0