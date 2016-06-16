<?php 		
session_start();

if(!isset($_SESSION['admin']))
	{
		header('Location:index.php');
	
	}


$_SESSION['logo'] = $_FILES["file"]["name"];
$_SESSION['name'] = $_POST['clg_name'];
$_SESSION['type'] = $_POST['clg_type'];

$_SESSION['aicte'] = $_POST['aicte'];
$_SESSION['ugc'] = $_POST['ugc'];

$_SESSION['fndyear']=$_POST['fndyear'];
$_SESSION['fees'] = $_POST['fees'];
 
 $page_type = 'home';

	require("header.php"); // Will include nav.php and inc_styles.php
	//require("config.php");




/*	$tbl_name="clg_mstr";

	$sql="SELECT clg_id FROM  $tbl_name";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);

	$sr=$count+1;

	$sql="INSERT INTO $tbl_name (clg_name,aicte,ugc,clg_type,fees,logo,sr_id)
	VALUES
	('$name','$aicte','$ugc','$type','$fees','$logo','$sr')";

	if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  		header("Location:addCollege.php");
  	}

  	$sql="SELECT clg_id FROM  $tbl_name WHERE sr_id=$sr";
	$result_id=mysqli_query($con,$sql);
	$result_id_rows=mysqli_fetch_array($result_id);
	$clg_id=$result_id_rows['clg_id'];

	$_SESSION['clg_id']=$clg_id;
	echo $clg_id;
	$sql="INSERT INTO clg_contact (clg_id) VALUES ('$clg_id	')";

	if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  		header("Location:addCollege.php");
  	}

  	$sql="INSERT INTO clg_location_mstr (clg_id) VALUES ('$clg_id')";

	if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  		header("Location:addCollege.php");
  	}*/

?>
<script type="text/javascript">
back()
{
	window.location="http://localhost/gcl/addCollege.php";
}
</script>
<section id="content">
    
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1>Add New College - Contact</h1>

			</div><!--/ .page-header-->
			
			<div class="six columns clearfix">
			
				<div id="addform">
					<form method="POST" action="addlocation.php">
					
					<input required="" type="text" name="per_name" id="per_name" placeholder="Person Name"/>
					
					<input required="" type="email" name="per_email" id="per_email" placeholder="Person Email"/>

					<input required="" type="text" name="per_phone" id="per_phone" placeholder="Phone"/>

					<input required="" type="text" name="per_mob" id="per_mob" placeholder="Person Mobile"/>

					<input required="" type="url" name="website" id="website" placeholder="Website URL"/>
					

					<button class="button default" type="button" name="back" onclick="window.location='addcollege.php'";>Back</button>
					
				
					<button class="button default" type="submit" id="submit">Next</button>
					</form>
				</div>

			</div>
		</div>
<?php
		
		$allowedExts = array("gif", "jpeg", "jpg", "png","JPG","GIF","JPEG","PNG");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 200000000)
		&& in_array($extension, $allowedExts))
 	    {
 	    if ($_FILES["file"]["error"] > 0)
 	      {
 	      echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
 	      }
 	    else
 	      {
 	     	  if (file_exists("images/logos" . $_FILES["file"]["name"]))
 	        {
 	        echo $_FILES["file"]["name"] . " already exists. ";
 	        }
 	      else
 	        {
 	        move_uploaded_file($_FILES["file"]["tmp_name"],"images/logos/" . $_FILES["file"]["name"]);
 	    	  }
 	      }
		}  
		else
 		 {
 		 echo "Invalid file";
 		 }
?> 

</section>
<?php 
include('footer.php');
?>