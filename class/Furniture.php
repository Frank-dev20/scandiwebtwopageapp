<?php
include_once "Product.php";


class Furniture extends Product
{
    public $height;
    public $width;
    public $length;

    public function __contruct($sku, $name, $price, $img, $type, $height, $width, $length)
    {
        parent::__construct($sku, $name, $price, $img, $type);
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function addFurniture($sku, $name, $price, $img, $type, $height, $width, $length)
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
        $sql = "INSERT INTO product (SKU, name, price, img, type, height, width, length) VALUES ('$sku','$name','$price','$img', '$type', '$height', '$width', '$length')";
        mysqli_query($this->connect(), $sql);
    }
}
