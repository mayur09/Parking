<?php
	
	require("config.php");

	
    $id=$ida;
	$tbl_name="clg_mstr";
	$sql="SELECT clg_name,logo,clg_type FROM $tbl_name WHERE clg_id=$id";
	//$sql1="SELECT logo FROM $tbl_name WHERE id=$i";
	//$sql1="SELECT log FROM $tbl_name WHERE id=$i";

$result_name=mysqli_query($con,$sql);
if(!$result_name)
    {
    die('Error: ' . mysqli_error($con));
    }
    else 
    
    {
        $rows=mysqli_fetch_array($result_name);  
        $name=$rows['clg_name'];
        $logo=$rows['logo'];
        $type=$rows['clg_type'];
        //echo $name;
    }
 /* $result_logo=mysqli_query($con,$sql1);
if(!$result_logo)
    {
    die('Error: ' . mysqli_error($con));
    }
    else 
    
    {
        $rows1=mysqli_fetch_array($result_logo);  
        $logo=$rows1['logo'];
        echo $logo;
    }*/

?>


<html>
<article class="four columns">

						
						 <a class="bwWrapper single-image plus-icon" href="editing.php?id=<?php echo $id; ?>" rel="folio">  
								<img src="images/logos/<?php echo $logo;?>" alt="" />
														
						  </a>
                          <!--/ .preloader-->

						<a class="project-meta" href="editing.php?id=<?php echo $id; ?>"> 

							<h6 class="title"><?php echo $name; ?></h6>
                            
                        </a>
							<a class="project-meta" href="http://localhost/projects/college/Latest%20GCL/delete.php?id=<?php echo $id;?>">Delete</a>

						    <!--/ .project-meta-->						


</article><!--/ .columns-->



</html>