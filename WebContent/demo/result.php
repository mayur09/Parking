<?php
require 'header.php';
require 'config.php';
$category=$_POST['category'];
$rank=$_POST['rank'];
$department=$_POST['branch'];
$city=$_POST['city'];

//echo $rank .$branch .$city;

if($city=="")
{
	
	$sql="CREATE view merit as select clg_id,department,{$category} from clg_merit where department in ('IT') order by {$category};";
  	$result=mysqli_query($con,$sql);
  	if(!$result)
  	{
  		die('Error: ' . mysqli_error($con));
  	}

  	else
  		//echo "Done";

  		$min=$rank-150;
  		$max=$rank+150;

  	$sql="SELECT clg_id,{$category} from merit WHERE {$category} > '$min' AND {$category} < '$max'";

  	$result=mysqli_query($con,$sql);

  	if(!$result)
  	{
  		die('Error:  '.mysqli_error($con));
  	}
  	else
  	{
  		$count=mysqli_num_rows($result);
  		
  		$clg=array(array());


  		//$id=array();
  		//$clg_rank=array();
  		$rank_dif=array(array());

  		for($i=0;$i<$count;$i++)
  		{
  			$rows=mysqli_fetch_array($result);
  		
  			//$clg[$i]['0']=$rows['clg_id'];
  			//$clg[$i]['1']=$rows[$category];

  		/*	$id[$i]=$rows['clg_id'];	
  			$clg_rank[$i]=$rows[$category];
  			
  			$rank_dif[$i]=abs($clg_rank[$i]-$rank);*/
  			
  			

  			$rank_dif[$i]['rank']=abs($rows[$category]-$rank);
  			$rank_dif[$i]['id']=$rows['clg_id'];;

  			//echo $rank_dif[$i];
  			//echo "<br>";

  		}
  			

			sort($rank_dif);
			//$index = array_search($min, $rank_dif);

  			


  			//print_r($rank_dif);

  		  	//echo $index;
  		  
		
  		  for($i=0;$i<$count;$i++)
  		  {
  		  	$id_c=$rank_dif[$i]['id'];
  		  	$sql="SELECT clg_name FROM clg_mstr WHERE clg_id='$id_c'";
  		
  			$res=mysqli_query($con,$sql);

  			if(!$res)
  			{
  					die('Error:  '.mysqli_error($con));
  			}
  			else
  			{
  				$cname=mysqli_fetch_array($res);

  				echo $cname['clg_name'];
  				echo "<br>";
  			}

  		}
		

  	}
}

	$drop=mysqli_query($con,"drop view merit");

?>