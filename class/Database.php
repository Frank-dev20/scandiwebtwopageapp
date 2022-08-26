<?php


class Database
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;


    // class constructor
    public function connect()
    {
        $this->dbname = "productsdb";
        $this->tablename = "products";
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";

        // create connection
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        return $con;
    }
}
