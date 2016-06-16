<?php
	$id=$_POST['id'];
	session_start();
	
	$bid=$_POST['bid'];
	//echo $bid;
	if($bid=='button1')
	{
		if ($_SESSION['count']==1) 
		{
			$_SESSION['count']--;
		}
		else if($_SESSION['count']==2)
		{
			$_SESSION['id1']=$_SESSION['id2'];
			$_SESSION['count']--;
		}
		else if($_SESSION['count']==3)
		{
			$_SESSION['id1']=$_SESSION['id2'];
			$_SESSION['id2']=$_SESSION['id3'];
			$_SESSION['count']--;
		}
		echo $bid;
	}
	else if($bid=='button2')
	{
		if($_SESSION['count']==3)
		{

			$_SESSION['id2']=$_SESSION['id3'];
			$_SESSION['count']--;
	
		}
		else
		{
			$_SESSION['count']--;
		}
		echo $bid;
	}
	else if($bid=='button3')
	{
		unset($_SESSION['id3']);
		$_SESSION['count']--;
		echo $bid;
	}


		
?>