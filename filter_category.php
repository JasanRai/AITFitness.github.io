
<?php
// $_SESSION["uid"]="123";
// include "server.php";

if(!isset($_POST["category"])){
$cat_sql="SELECT * FROM category ORDER BY Category_ID DESC";
$C_results= mysqli_query($db,$cat_sql);

if(mysqli_num_rows($C_results) > 0){
    echo "<ul>";
    echo "
      <h4>Filter By Category</h4>
      <li class='list-group-item'>
        <a href=product_page.php>All Category</a>
      </li>
      ";
    while($row = mysqli_fetch_array($C_results)){
      $cat_id = $row["Category_ID"];
      $cat_title = $row["Category_Name"];
      echo "<li class='list-group-item'>
      <a href='filter_product.php?id=$cat_id&category=$cat_title' class='category' cid='$cat_id' >$cat_title</a>
      </li>";
  }
  echo "</ul>";
  }
}

    ?>
    <!-- </div>
  </div> -->
