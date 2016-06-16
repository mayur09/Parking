<?php
require("config.php");

//echo $ida;
$id=$ida;


$tbl_name="clg_mstr";
$sql="SELECT clg_name,logo,clg_type FROM $tbl_name WHERE clg_id=$id";
//$sql="SELECT clg_name FROM $tbl_name WHERE clg_id=$id";

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



/*
$sql="SELECT logo FROM $tbl_name WHERE sr_id=$i";
$result=mysqli_query($con,$sql);
  
  $rows=mysqli_fetch_array($result);  
      $logo=$rows['logo'];
//echo $logo;*/
?><head>
<script src="js/jquery.modernizr.js"></script>

<script type="text/javascript">
        
        var c=0,b1=0,b2=0,b3=0;
        function submitinfo(nm,id){
          
            var a=nm;
            var b=id;
            
                  if( b1== '0')
                    {
                    $(".res #first").append(a,"<input type='button' id='button1' value= 'X' onclick='rem(this.id)' />");
                      //c++;  
                      b1=1;
                    }

                    else if(b2 =='0')
                    {  
                      $(".res #two").append(a,"<input type='button' id='button2' value='X' onclick='rem(this.id)'/>"); 
                      //c++; 
                      b2=1;
                    }

                    else if (b3 =='0') 
                    {  
                      $(".res #three").append(a,"<input type='button' id='button3' value='X' onclick='rem(this.id)'/>");
                      b3=1;
                      //c++; 
                    }
          

                  $.ajax({
                    
                    url: "comp.php", 
                    type: "POST",
                    data: {id:id},
                    }).done(  function(html){});
              
          }

          function rem(bid){
          
          var bid = bid;
        
              if(bid=="button1")
              {    
                $(".res #first").empty();
                b1=0;
                //c--;
              }

              else if(bid=="button2") 
              {
                $(".res #two").empty();
                b2=0;
                //c--;
              }
              else if(bid=="button3")
              {
                $(".res #three").empty();
                b3=0;
                //c--;

              } 
                $.ajax({
              
              url: "remove.php", 
              type: "POST",
              data: {bid:bid},
              }).done(function(msg){}); 
          }
    

  </script>
</head>
<!-- <div class="detail-holder clearfix"> -->

        
                

<div class="app">
</div>
<div class="four columns">

          <div class="detail-box">

            <div class="detail-entry">

              <i id="clglogo">

                  <img src="images/Logos/<?php echo $logo; ?>">
              
              </i>

              <h5 id="nme"> <?php echo $name; ?> </h5>

              <p>
                  
                                <input type="button" id="button1" value="Compare" style="width: 5em;" onclick="submitinfo('<?php echo $name?>','<?php echo $id?>')"/>
                                <!--<a href="#">Compare</a>-->  
              </p>

            </div><!--/ .detail-entry-->

            <div data-color-state="" data-color-hover="" class="transform mixed-bg-1"></div>
            
          
                    </div><!--/ .detail-box-->
          
        </div><!--/ .columns--> 