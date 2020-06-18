<?php

//CONNECT TO DATABASE
$db = mysqli_connect('localhost', 'root', '', 'authentication');
include("header.php");

$arr = explode("/",$_SERVER['PHP_SELF']);
$CurrentDIR = '/' . $arr[1] . '/' . $arr[2];
$category =  $_GET['category'];
?>

<div class="container p-4">
<div class="row">
<div class="col">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item"><a href="product_page.php">Products</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $category; ?></li>
  </ol>
</nav>
</div>
</div>
  <div class="row">
  <div class="col-4">
    <?php include("filter_category.php"); ?>
  </div>
  <div class="col-8">
  <?php

$pid = (isset($_POST['product'])) ? $_POST['product'] : '';
//select products based on specific product id
$sql="SELECT * FROM product WHERE prod_category =" . $_GET['id'] . " ";
$results= mysqli_query($db,$sql);

 while($row = mysqli_fetch_array($results)){

   $prod_id = $row["prod_id"];
   $prod_category = $row["prod_category"];
   $prod_title = $row["prod_title"];
   $prod_price = $row["prod_price"];
   $prod_description = $row["prod_description"];
   $prod_image = $row["prod_image"];

  echo "
  <div class = 'productList bg-white'>
  <div class='col-md-8 p-1 mx-auto'  style = 'width : 300px; height : 350px;'>

                <div class='panel panel-default ' >

                    <div id='title' class='panel-heading h5 '>$prod_title</div>
                        <div class='panel-body' style=' height: auto; overflow: hidden;'>
                            <a href = 'description_page.php?id=$prod_id'>
                                <img id='image' class='img-responsive' src='images/$prod_image' style = 'width : 200px; height:200px;'>
                              </a>
                        </div>

                        <form method='POST' action='$CurrentDIR/cart.php?action=add&id=$prod_id&quantity=1'>
                          <div class='panel-heading'>
                              $ $prod_price
                              <button class='btn btn-info btn-xs' type='submit' name='add_to_cart'>
                                Add To Cart
                              </button>
                          </div>
                        </form>

                    </div>
        </div>
        </div>
     ";

 };

    ?>
  </div>
  </div>
</div>



<?php include ("footer.php"); ?>
