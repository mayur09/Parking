<?php
$page_type = "comp_res";
session_start();
if($_SESSION['count']<2)
{
		
	header("location:compare.php");
}

else if($_SESSION['count']>1)
{

require("header.php");	
require("config.php");

$tbl_name="clg_mstr";
$tbl_contact="clg_contact";
$sql1="SELECT clg_id,clg_name,AICTE,clg_type,fees,logo FROM $tbl_name WHERE clg_id=$_SESSION[id1]"; // query for first college of comparision

$sql2="SELECT clg_id,clg_name,AICTE,clg_type,fees,logo FROM $tbl_name WHERE clg_id=$_SESSION[id2]"; // query for second college of comparision

$result1=mysqli_query($con,$sql1);
if(!$result1)
  	{
  	die('Error: ' . mysqli_error($con));
  	}
	else 
	{
		$rows=mysqli_fetch_array($result1);
		
		$clg_id1=$rows['clg_id'];
		$name1=$rows['clg_name'];
		$ctgry1=$rows['clg_type'];
		$aic1=$rows['AICTE'];
		$aicte1 = ($aic1==1?'yes':'no');
		$fees1=$rows['fees'];
		$logo1=$rows['logo'];
		//$uni1=$rows['uni'];
		//echo $name;
	}

$sql1_contact="SELECT CCD_CLG_EMAIL,CCD_CLG_PHONE,CCD_CLG_WEB FROM $tbl_contact WHERE clg_id=$clg_id1";


$contact1=mysqli_query($con,$sql1_contact);


if(!$contact1)
  	{
  	die('Error: ' . mysqli_error($con));
  	}
	else 
	{
		$rows=mysqli_fetch_array($contact1);
		
		$email1=$rows['CCD_CLG_EMAIL'];
		$phone1=$rows['CCD_CLG_PHONE'];
		$web1=$rows['CCD_CLG_WEB'];
	}

$result2=mysqli_query($con,$sql2);
if(!$result2)
  	{
  	die('Error: ' . mysqli_error($con));
  	}
	else 
	
	{
		$rows=mysqli_fetch_array($result2);
		
		$clg_id2=$rows['clg_id'];
		$name2=$rows['clg_name'];
		$ctgry2=$rows['clg_type'];
		$aic2=$rows['AICTE'];
		$aicte2 = ($aic2==1?'yes':'no');
		$fees2=$rows['fees'];
		$logo2=$rows['logo'];
		//$uni2=$rows['uni'];
		//echo $name;
	}


	$sql2_contact="SELECT CCD_CLG_EMAIL,CCD_CLG_PHONE,CCD_CLG_WEB FROM $tbl_contact WHERE clg_id=$clg_id2";


$contact2=mysqli_query($con,$sql2_contact);


if(!$contact2)
  	{
  	die('Error: ' . mysqli_error($con));
  	}
	else 
	{
		$rows=mysqli_fetch_array($contact2);
		
		$email2=$rows['CCD_CLG_EMAIL'];
		$phone2=$rows['CCD_CLG_PHONE'];
		$web2=$rows['CCD_CLG_WEB'];
	}



	if($_SESSION['count']>2)
	{

		$sql3="SELECT clg_id,clg_name,AICTE,clg_type,fees,logo FROM $tbl_name WHERE clg_id=$_SESSION[id3]";
		$result3=mysqli_query($con,$sql3);
		if(!$result3)
  		{
  			die('Error: ' . mysqli_error($con));
  		}
		else 
	
		{
			$rows=mysqli_fetch_array($result3);	
			
			$clg_id3=$rows['clg_id'];
			$name3=$rows['clg_name'];
			$ctgry3=$rows['clg_type'];
			$aic3=$rows['AICTE'];
			$aicte3 = ($aic3==1?'yes':'no');
			$fees3=$rows['fees'];
			$logo3=$rows['logo'];
			//$uni3=$rows['uni'];
			
		
		}
	
			$sql3_contact="SELECT CCD_CLG_EMAIL,CCD_CLG_PHONE,CCD_CLG_WEB FROM $tbl_contact WHERE clg_id=$clg_id3";


			$contact3=mysqli_query($con,$sql3_contact);


		if(!$contact3)
  		{
  			die('Error: ' . mysqli_error($con));
  		}
		else 
		{
			$rows=mysqli_fetch_array($contact3);
		
			$email3=$rows['CCD_CLG_EMAIL'];
			$phone3=$rows['CCD_CLG_PHONE'];
			$web3=$rows['CCD_CLG_WEB'];
		}

		include("three.php");
	}	

	else
	{
		include("two.php");
	}
}



?>


			





					
		</div>
</section>





<?php

	require("footer.php");
	session_destroy();
?>