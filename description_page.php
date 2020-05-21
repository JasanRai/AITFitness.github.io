<?php 
    $db = mysqli_connect('localhost', 'root', '', 'authentication');



include("header.php");


$sql="SELECT * FROM product WHERE prod_id =" . $_GET['id'] . " ";

$results= mysqli_query($db,$sql);


 while($row = mysqli_fetch_array($results)){
     $prod_id = $row["prod_id"];
   $prod_category = $row["prod_category"];
   $prod_title = $row["prod_title"];
   $prod_price = $row["prod_price"];
   $prod_description = $row["prod_description"];
   $prod_image = $row["prod_image"];
     
     echo "
  <div class='col-md-8 p-1 '  >
  
                <div class='panel panel-default ' >
                
                    <div class='panel-heading'>$prod_title</div>
                        <div class='panel-body' style=' height: auto; overflow: hidden;'>
                            
                                <img class='img-responsive' src='images/$prod_image' style = 'width : 200px; '>
                            
                        </div>
                        
                         <div class='panel-heading'>
                            $ $prod_price 
                            <button class='btn btn-info btn-xs'>Add To Cart</button>
                           
                        </div>
                        <div class = 'panel-footing'>
                         $prod_description
                        </div>
                    </div> 
        </div>
        </div>
        
     ";
 }
?>