<?php
$page_type = "recres";
require 'header.php';
require 'config.php';

$category=$_POST['category'];
$rank=$_POST['rank'];
$department=$_POST['branch'];
$city=$_POST['city'];

?>

  <section id="content">
    
    <div class="container">
          
      <div class="page-header clearfix">

        <h1>Result</h1>

      </div>
    </hr>
                           
      <div class="detail-holder clearfix result">

<?php

//echo $rank .$branch .$city;

echo"<h3>Highest Chances</h3>";
if($city=="")
{
	
	$sql="CREATE view merit as select clg_id,department,{$category} from clg_merit where department in ('{$department}') order by {$category};";
  	/*$result=mysqli_query($con,$sql);
  	if(!$result)
  	{
  		die('Error: ' . mysqli_error($con));
  	}
*/
}

  
else
 { 		

    $sql="CREATE view merit as select clg_id,department,{$category} from clg_merit where department in ('{$department}') && city in ('{$city}')order by {$category};";
  }
    $result=mysqli_query($con,$sql);
    if(!$result)
    {
      die('Error: ' . mysqli_error($con));
    }

    //echo $result;
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
  		
  		if($count==0)
      {
        echo "No Colleges For Given Constraints";
      }
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
  		  
        echo '<ol id="result">';
		
  		  for($i=0,$j=1;$i<$count;$i++,$j++)
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


          echo '<li>';
          echo '<span>'.$j.'</span>';?>

          <a href="./SingleCollege.php?id=<?php echo $id_c;?>"><?php echo $cname['clg_name']?></a>
  				</li>
  			<?php
        }

  		}
      echo '</ol>';
		

  	}

echo "<br>";
echo "<br>";
echo "<h3>100% Assurity</h3>";
  $sql="SELECT clg_id from merit WHERE {$category} > '$max'";

    $result=mysqli_query($con,$sql);

    if(!$result)
    {
      die('Error:  '.mysqli_error($con));
    }
    else
    {  
        $count=mysqli_num_rows($result);
      
      if($count==0)
      {
        echo "No Colleges For Given Constraints";
      }

      echo '<ol class="result">';

      for($i=0,$j=1;$i<$count;$i++,$j++)
      {
        $rows=mysqli_fetch_array($result);

        $id_c=$rows['clg_id'];

        $sql="SELECT clg_name FROM clg_mstr WHERE clg_id='$id_c'";

        $res=mysqli_query($con,$sql);

        if(!$res)
        {
            die('Error:  '.mysqli_error($con));
        }
        else
        {
          $cname=mysqli_fetch_array($res);

          echo '<li>';

          echo '<span>'.$j.'</span>';?>

          <a href="./SingleCollege.php?id=<?php echo $id_c;?>"><?php echo $cname['clg_name']?></a>
          </li>
        <?php
          
        }

      }

      echo '</ol>';



    }
    $drop=mysqli_query($con,"drop view merit");


	

?>

</div>
</div>
</section>