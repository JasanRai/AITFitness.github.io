<?php
session_start();
  $total = 0;
  $shipping = 0;
  $output = "";
  $test = "";
  if(!empty($_SESSION["shopping_cart"])) {
    $shipping = 100;
    foreach ($_SESSION["shopping_cart"] as $key => $value) {
    $output .= '

      <tr>
          <td class="align-middle ">
          <a href="description_page.php?id='. $value["id"] .' ">
            <img src="./images/'.$value["image"].'" alt="product name" style="width:50px; margin-right:5px;">
            '.$value["name"].'
          </a>
          </td>
          <td class="align-middle ">
            $'.number_format($value["price"] * $value["quantity"], 2) .'
          </td>
          <td class="align-middle text-center">
            '. $value["quantity"] .'
          </td>
          <td class="align-middle">
          <button name="delete" class="btn btn-danger btn-xs delete" id="'. $value["id"] .'">
            Remove
          </button>
          </td>
        </tr>
    ';
    $total = $total + ($value["price"] * $value["quantity"]) ;
    }
   
  }
  else {
    $output .= '
      <tr>
        <td colspan="4" align="center">Your Cart is Empty </td>
      </tr>
    ';

  }



  $data = array(
    'cart_detail' => $output,
    'subTotal_price' => '$'. number_format($total,2),
    'shipping_price' => '$'. number_format($shipping,2),
    'total_price' =>  number_format($total + $shipping,2),
  );

  echo json_encode($data);

?>
