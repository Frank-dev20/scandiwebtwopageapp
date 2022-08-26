<?php
include_once "Product.php";

class Disc extends Product
{
    public $size;

    public function __construct($sku, $name, $price, $img, $type, $size)
    {
        parent::__construct($sku, $name, $price, $img, $type);
        $this->size = $size;
    }

    public function addDisc($sku, $name, $price, $img, $type, $size)
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

        $size = mysqli_real_escape_string($this->connect(), $_POST['size']);
        $sql = "INSERT INTO product (SKU, name, price, img, type, size) VALUES ('$sku','$name','$price','$img', '$type', '$size')";
        mysqli_query($this->connect(), $sql);
    }
}
