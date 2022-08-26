<?php
require_once "./components/validation.php";
include_once "Product.php";
include_once "Disc.php";
include_once "Book.php";
include_once "Furniture.php";

include_once "Database.php";

$product = new Product();
$db = new Database();

if (isset($_POST["but_delete"])) {
    $product->deleteProduct();
}


if (!$form_errors) {
    if (isset($_POST["save"])) {
        $sku = mysqli_real_escape_string($db->connect(), $_POST['sku']);
        $name = mysqli_real_escape_string($db->connect(), $_POST['name']);
        $price = mysqli_real_escape_string($db->connect(), $_POST['price']);
        $img = mysqli_real_escape_string($db->connect(), "img/" . $_FILES['img']['name']);
        $type = mysqli_real_escape_string($db->connect(), $_POST['type']);

        if ($_POST['type'] == 1) {
            $size = mysqli_real_escape_string($db->connect(), $_POST['size']);
            $disk = new Disc($sku, $name, $price, $img, $type, $size);
            $disk->addDisc($sku, $name, $price, $img, $type, $size);
        } elseif ($_POST['type'] == 2) {
            $weight = mysqli_real_escape_string($db->connect(), $_POST['weight']);
            $book = new Book($sku, $name, $price, $img, $type, $weight);
            $book->addBook($sku, $name, $price, $img, $type, $weight);
        } else {
            $height = mysqli_real_escape_string($db->connect(), $_POST['height']);
            $width = mysqli_real_escape_string($db->connect(), $_POST['width']);
            $length = mysqli_real_escape_string($db->connect(), $_POST['length']);
            $furniture = new Furniture($sku, $name, $price, $img, $type, $height, $width, $length);
            $furniture->addFurniture($sku, $name, $price, $img, $type, $height, $width, $length);
        }
    }
}
