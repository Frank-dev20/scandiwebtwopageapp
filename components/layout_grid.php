<?php
include_once "./class/Product.php";
include_once "./class/Database.php";

$con = new Database();
$product = new Product();
$result = $product->getProducts();

while ($row = $result->fetch_assoc()) {
  products_grid($row["id"], $row["SKU"], $row["name"], $row["price"], $row["img"], $row["size"], $row["weight"], $row["height"], $row["width"], $row["length"]);
}

function products_grid($id, $SKU, $name, $price, $image, $size, $weight, $height, $width, $length)
{
  $element = "
  <div class='col-md-3 col-sm-6 my-3 my-md-0'>
    <form action='' method='post'>
      <div class='card-deck'>
      <div class='form-check position-absolute top-0 end-0'>
            <input class='form-check-input' type='checkbox' form='delete_form' name='delete[]' value='$id' id='defaultCheck1' onclick=''>
          </div>
        <div class='card'>
          <img src='$image' alt='Image_$id' class='img-fluid card-img-top'>
          <div class='card-body'>
            <h5 class='card-title'>$SKU</h5>
            <h5 class='card-text'>$name</h5>
            <h5 class='card-text'>$price  $</h5>";
  if (!empty($size)) {
    $element .= "
          <h6 class='card-text'>Size: $size MB</h6>";
  }
  if (!empty($weight)) {
    $element .= "
            <h6 class='card-text'>Weight: $weight Kg</h6>";
  }
  if (!empty($height)) {
    $element .= "
            <h6 class='card-text'>Dimensions: $height x $width x $length</h6>";
  }
  $element .= "
          </div>
        </div>
      </div>
    </form>
  </div>
  ";

  echo $element;
};
