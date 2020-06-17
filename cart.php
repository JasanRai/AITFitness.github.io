<?php include("header.php");
require_once("server.php");


if(isset($_POST["add_to_cart"])) {
  // echo 'add to cart is set';
  $id = $_GET["id"];
  $quantity = (int)$_GET["quantity"];
  // Check if user wants to add product to cart
  if($_GET["action"] == "add") {
    $sql = "SELECT * FROM product WHERE prod_id ='" .$id. "'";
    $results = mysqli_query($db,$sql);
     
    if(mysqli_num_rows($results) > 0)
    {
    
      $row = mysqli_fetch_assoc($results);
        $item_array = array (
          'id' => $row["prod_id"],
          'name' => $row["prod_title"],
          'image' => $row["prod_image"],
          'quantity' => $quantity,
          'price' => $row["prod_price"]
        );
    }
    //If some products has been added to the cart
    if(isset($_SESSION["shopping_cart"]))
    {
       
      $item_array_id = array_column($_SESSION["shopping_cart"],'id');
      if(!in_array($_GET['id'],$item_array_id))
      {//specific item hasn't been added
          $count = count($_SESSION["shopping_cart"]);
          $_SESSION["shopping_cart"][$count] = $item_array;
          echo '<script>window.location="cart.php"</script>';
      } else {
        //Item already added
        foreach($_SESSION["shopping_cart"] as $key => $value) {
            if($_SESSION["shopping_cart"][$key]['id'] == $_GET["id"]) {
              $_SESSION["shopping_cart"][$key]['quantity'] = number_format($_SESSION["shopping_cart"][$key]['quantity'] + $quantity, 0);
              echo '<script>window.location="cart.php"</script>';
            }
        }
      }
    } else if (!isset($_SESSION["shopping_cart"]))
    {//If there is nothing in the cart
      $_SESSION["shopping_cart"][0] = $item_array;
      echo '<script>window.location="cart.php"</script>';
    }
  } // ADD
}
// Remove

if($_POST["action"] == "remove") {
  // Remove Product
  foreach ($_SESSION["shopping_cart"] as $key => $value)
    {
      if($_POST['id'] == $value['id']) {
        //Remove the product from the cart
        unset($_SESSION["shopping_cart"][$key]);
        // echo '<script>window.location="/public/shopping_cart.php"</script>';
      }
    }
}


?>

<script>
  $(document).ready(function() {
    load_cart_data();
    $(document).on('click', '.delete', function() {
      const prod_id = $(this).attr("id");
      console.log(prod_id);
      $.ajax({
        url: `cart.php`,
        method: "POST",
        data: {id:prod_id, action:"remove"},
        success:function(data) {
          console.log(data);
          load_cart_data();
        },
      })
      return false;
    });

    function load_cart_data() {
      $.ajax({
        url: "ajax.php",
        method: "POST",
        dataType: "json",
        success: function(data) {
          console.log(data.cart_detail)
          $('#cart_details').html(data.cart_detail);
          $('.subTotal_price').text(data.subTotal_price);
          $('.shipping_price').text(data.shipping_price);
          $('.total_price').text(data.total_price);
          $('.checkout_total').text(data.total_price);
          $('.checkout_total').prepend('$ ');

          // Disable button if total is less than 0
          if(!parseFloat(data.total_price) > 0){
            $('.checkout').prop('disabled',true)
          }
          else {
            $('.checkout').prop('disabled',false)
          }

        }
      })
    }

  });
</script>
<div class="pb-5">

  <div class="bg-white text-secondary">
    <div class="container p-1">
      <h1>Cart</h1>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-7 bg-light rounded-lg ">
      <table class="table table-borderless">
        <thead class="border-bottom">
          <tr>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody id="cart_details">

        </tbody>
      </table>
      </div>

        <div class="col-12 col-sm-1">
        <p></p>
        </div>

      <div class="col-12 col-sm-5 col-md-4 bg-light rounded-lg">
        <table class="table table-borderless">
          <thead class="border-bottom">
            <th>
              <h3>Cart Summary</h3>
            </th>
          </thead>
          <tbody>
            <tr class="border-bottom">
              <td>
                Sub Total
              </td>
              <td class="subTotal_price"></td>
            </tr>
            <tr class="border-bottom">
              <td>
                Shipping
              </td>
              <td class="shipping_price">

              </td>
            </tr>
            <tr>
              <td>
                Total
              </td>
              <td>
              $<span class="total_price"></span>
              </td>
            </tr>
            <tr>
              <td>
              <button type="button" class="btn btn-outline-primary checkout" data-toggle="modal" data-target="#checkoutModal">Checkout</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Checkout Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form" role="form" autocomplete="off">
        <div class="form-group">
            <label for="cc_name">Card Holder's Name</label>
            <input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*" title="First and last name" required="required">
        </div>
        <div class="form-group">
            <label>Card Number</label>
            <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="">
        </div>
        <div class="form-group row">
            <label class="col-md-12">Card Exp. Date</label>
            <div class="col-md-4">
                <select class="form-control" name="cc_exp_mo" size="0">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-control" name="cc_exp_yr" size="0">
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC">
            </div>
        </div>
        <div class="row">
            <label class="col-md-12">Amount</label>
        </div>
        <div class="form-inline">

        <ul class="nav nav-pills nav-fill w-100">
          <li class="nav-item nav-link active p-3">
          <div class="d-flex justify-content-between">
          <h5 class="m-0">Total Cost</h5>
          <h5 class="m-0">
            <span class="badge badge-pill badge-light px-2 text-primary checkout_total"></span></h5>
          </div>
          </li>
        </ul>
            <!-- <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                <input type="text" class="form-control text-right" id="exampleInputAmount" placeholder="39">
                <div class="input-group-append"><span class="input-group-text">.00</span></div>
            </div> -->
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-md-6">
                <button type="reset" class="btn btn-secondary btn-lg btn-block"  data-dismiss="modal">Cancel</button>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-lg btn-block">Checkout</button>
            </div>
        </div>
    </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
