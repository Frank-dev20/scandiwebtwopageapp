<?php
include_once "Product.php";


class Book extends Product
{
    public $weight;

    public function __contruct($sku, $name, $price, $img, $type, $weight)
    {
        parent::__construct($sku, $name, $price, $img, $type);
        $this->weight = $weight;
    }

    public function addBook($sku, $name, $price, $img, $type, $weight)
    {
        // image upload
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $uploadOk = 1;


        if ($uploadOk == 1) {
            if (!move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                echo "Sorry, there was an error uploading your file. ";
                echo $_FILES['img']['error'];
            }
        }
        $sql = "INSERT INTO product (SKU, name, price, img, type, weight) VALUES ('$sku','$name','$price','$img', '$type', '$weight')";
        mysqli_query($this->connect(), $sql);
    }
}
