<?php
session_start();
require 'config.php';

$old=$_POST['old_pass'];
$new1=$_POST['new_pass'];
$new2=$_POST['new_pass2'];

$tbl_name="user";

$sql="SELECT password FROM $tbl_name WHERE id='1'";

$result=mysqli_query($con,$sql);
     if(!$result)
     {
        die('Error: ' . mysqli_error($con));
     }
     else 
    
     {
         $rows=mysqli_fetch_array($result);  
         $password=$rows['password'];

         if($password==$old)
         {
            if($new1==$new2)
            {
                $sql="UPDATE user set password='$new2' WHERE id='1'";                
                            
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    die('Error: ' . mysqli_error($con));
                }
                    
                
                //$_SESSION['newpas']='1';
                else
                {
                    echo"<script>alert('Password Changed');</script>";
                }
                //echo '<script>alert(1);</script>';
                header('Location:admin.php');
                   
                
            
            }

        
            else
            {
                echo '<script type="text/javascript"> alert("New Password Dont Match") </script>';
                header('Location:profile.php');
                
            }
         }
        
         $_SESSION['newpas']='0';
         //echo "<script>alert('hii');</script>";
        //header('Location:profile.php');
    }   
    
?>
