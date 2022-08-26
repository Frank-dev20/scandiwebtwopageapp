<?php
include_once "./class/Database.php";
include_once "./components/validation.php";

class Product extends Database
{
    public $sku;
    public $name;
    public $price;
    public $img;
    public $type;

    public function __construct($sku = '', $name = '', $price = '', $img = '', $type = '')
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->type = $type;
    }

    // get product from the database
    public function getProducts()
    {
        $sql = "SELECT * FROM product ORDER BY id DESC;";

        $result = mysqli_query($this->connect(), $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }

    // delete Product
    public function deleteProduct()
    {
        if (isset($_POST["delete"])) {
            foreach ($_POST["delete"] as $deleteid) {
                $delete_product = "DELETE from " . 'product' . " WHERE id=" . $deleteid;
                mysqli_query($this->connect(), $delete_product);
            }
        }
    }
}
